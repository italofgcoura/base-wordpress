<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div>
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                                <?php the_content(); ?>

                            </a>
                        </h2>
                                           
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>