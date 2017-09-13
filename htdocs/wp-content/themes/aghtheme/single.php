<?php
/**
 * The main template file.
 *
 */

get_header('single'); ?>

<!--BLOG CONTENT-->

<section id="blog">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php

                    get_template_part('template-parts/content', 'single');

                    ?>

                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>

