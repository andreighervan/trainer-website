<?php
/**
 * The main template file.
 *
 */

get_header('secondprogram'); ?>

    <!--BLOG CONTENT-->

    <section id="blog">
        <img src="<?php bloginfo('stylesheet_directory');?>/img/blog/top-blog.jpg">
        <?php get_template_part('template-parts/content-getaccess');?>
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php $loop=new WP_Query(array('category_name'=>'video'));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <?php

                        get_template_part('template-parts/content', 'video');

                    ?>

                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>

