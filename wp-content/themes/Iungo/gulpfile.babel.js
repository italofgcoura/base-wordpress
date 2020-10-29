import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'autoprefixer';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import browserSync from "browser-sync";

const PRODUCTION = yargs.argv.prod;

//refresh a page in changes
const server = browserSync.create();
export const serve = done => {
    server.init({
        proxy: "http://localhost/iungo" // put your local website link here
    });
    done();
};
export const reload = done => {
    server.reload();
    done();
};


export const styles = () => {
    return src('assets/src/scss/bundle.scss')
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpif(PRODUCTION, postcss([autoprefixer])))
        .pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie8' })))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        .pipe(dest('assets/dist/css'))
        .pipe(server.stream());
}


//img files -images have to be the same extension, and it is caelcase sensitive
export const images = () => {
    return src('assets/src/images/**/*.{jpg,JPG,jpeg,JPEG,png,PNG,svg,SVG,gif,GIF}')
        .pipe(gulpif(PRODUCTION, imagemin()))
        .pipe(dest('assets/dist/images'));
}

//copy to dist any files created in src. Empty folders will not be coppied
export const copy = () => {
    return src(['assets/src/**/*', '!assets/src/{images,js,scss}', '!assets/src/{images,js,scss}/**/*'])
        .pipe(dest('assets/dist'));
}

//delete dist folder
export const clean = () => del(['assets/dist']);


export const scripts = () => {
    return src('assets/src/js/bundle.js')
        .pipe(named())
        .pipe(webpack({
            module: {
                rules: [{
                    test: /\.js$/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: []
                        }
                    }
                }]
            },
            mode: PRODUCTION ? 'production' : 'development',
            devtool: !PRODUCTION ? 'inline-source-map' : false,
            output: {
                filename: '[name].js'
            },
            externals: {
                jquery: 'jQuery'
            },
        }))
        .pipe(dest('assets/dist/js'));
}



//function to "watch" changes in scss files
export const watchForChanges = () => {
    watch('assets/src/scss/**/*.scss', styles);

    watch('assets/src/images/**/*.{jpg,JPG,jpeg,JPEG,png,PNG,svg,SVG,gif,GIF}', series(images, reload));

    watch(['assets/src/**/*', '!assets/src/{images,js,scss}', '!assets/src/{images,js,scss}/**/*'], series(copy, reload));

    watch('assets/src/js/**/*.js', series(scripts, reload));

    watch("**/*.php", reload);
}

export const dev = series(clean, parallel(styles, images, copy, scripts), serve, watchForChanges);

export const build = series(clean, parallel(styles, images, copy, scripts));

export default dev;