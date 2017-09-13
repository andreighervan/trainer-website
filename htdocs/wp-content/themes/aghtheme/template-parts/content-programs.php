<div class="programs" id="programs">
    <?php if(is_front_page()):?>
    <div class="feat-posts-title">
        <div class="container">
            <div class="left-float">
                <h3>PROGRAMS</h3>
            </div>
            <div class="right-posts">
                <h3>with Brian Walker</h3>
            </div>
        </div>
    </div>

    <?php {echo '';}?>
    <?php endif;?>
    <div class="container programs-container">
        <?php $loop = new WP_Query(array('post_type' => 'firstprogram', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while ($loop->have_posts()):$loop->the_post(); ?>
            <div class="row first-program">
                <div class="col-sm-4 img-programs first-img-programs">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div><!--col-sm-4-->
                <div class="col-sm-8 right-program">

                    <h2><?php the_title(); ?></h2>
                    <h4><i><?php the_field('first_program_subtitle'); ?></i></h4>
                    <p><?php the_field('first_program_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/programs/learn-more-button.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
        <?php $loop = new WP_Query(array('post_type' => 'secondprogram', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while ($loop->have_posts()):$loop->the_post(); ?>
            <div class="row second-program">
                <div class="col-sm-4 img-programs">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div><!--col-sm-4-->
                <div class="col-sm-8 right-program">

                    <h2><?php the_title(); ?></h2>
                    <h4><i><?php the_field('second_program_subtitle'); ?></i></h4>
                    <p><?php the_field('second_program_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/programs/learn-more-button.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>

        <?php $loop = new WP_Query(array('post_type' => 'thirdprogram', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while ($loop->have_posts()):$loop->the_post(); ?>
            <div class="row third-program">
                <div class="col-sm-4 img-programs">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div><!--col-sm-4-->
                <div class="col-sm-8 right-program">

                    <h2><?php the_title(); ?></h2>
                    <h4><i><?php the_field('third_program_subtitle'); ?></i></h4>
                    <p><?php the_field('third_program_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/programs/button-course.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>

        <?php $loop = new WP_Query(array('post_type' => 'fourthprogram', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while ($loop->have_posts()):$loop->the_post(); ?>
            <div class="row fourth-program">
                <div class="col-sm-4 img-programs">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div><!--col-sm-4-->
                <div class="col-sm-8 right-program">

                    <h2><?php the_title(); ?></h2>
                    <h4><i><?php the_field('fourth_program_subtitle'); ?></i></h4>
                    <p><?php the_field('fourth_program_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/programs/learn-more-button.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>

    </div>
</div>