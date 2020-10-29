<?php
function dollar_theme_styles(){
wp_enqueue_style('bootstrap_css',
'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'
);

//get the mimified styles
wp_enqueue_style('main_css', get_template_directory_uri() .
'/assets/dist/css/bundle.css');
}

function wpb_adding_scripts() {
    wp_register_script('main_script', get_template_directory_uri() . '/assets/dist/js/bundle.js','','1.1', true);
    wp_enqueue_script('main_script');
    }
    add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  

//get the mimified scripts
// wp_enqueue_script('main_script', get_template_directory_uri() .
// '/assets/dist/js/bundle.js');

add_action('wp_enqueue_scripts', 'dollar_theme_styles');
function dollar_widgets_init() {
register_sidebar( array(
'name' => 'Home right sidebar',
'id' => 'home_right_1',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
) );
}
add_action( 'widgets_init', 'dollar_widgets_init' );
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
