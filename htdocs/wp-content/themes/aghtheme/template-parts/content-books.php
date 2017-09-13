<div class="programs" id="books">
    <?php if(is_front_page()):?>
    <div class="feat-posts-title">
        <div class="container">
            <div class="left-float">
                <h3>Books</h3>
            </div>
            <div class="right-posts">
                <h3>by Brian Walker</h3>
            </div>
        </div>
    </div>
    <?php endif;?>
    <div class="container programs-container">
        <?php $loop = new WP_Query(array('post_type' => 'bookone', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while ($loop->have_posts()):$loop->the_post(); ?>
            <div class="row first-program">
                <div class="col-sm-4 img-programs first-img-programs">
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div><!--col-sm-4-->
                <div class="col-sm-8 right-program first-right-program">

                    <h2><?php the_title(); ?></h2>
                    <h4><i><?php the_field('first_book_subtitle'); ?></i></h4>
                    <p><?php the_field('first_book_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/books/button-get-your-copy.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
        <?php $loop = new WP_Query(array('post_type' => 'booktwo', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
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
                    <h4><i><?php the_field('second_book_subtitle'); ?></i></h4>
                    <p><?php the_field('second_book_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/books/button-get-your-copy.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>

        <?php $loop = new WP_Query(array('post_type' => 'bookthree', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
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
                    <h4><i><?php the_field('third_book_subtitle'); ?></i></h4>
                    <p><?php the_field('third_book_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/books/button-get-your-copy.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>

        <?php $loop = new WP_Query(array('post_type' => 'bookfour', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
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
                    <h4><i><?php the_field('fourth_book_subtitle'); ?></i></h4>
                    <p><?php the_field('fourth_book_excerpt'); ?></p>
                    <a href="<?php the_permalink(); ?>" target="_blank"><img
                            src="<?php bloginfo('stylesheet_directory'); ?>/img/books/button-buy-now.jpg"></a>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>

    </div>
</div>