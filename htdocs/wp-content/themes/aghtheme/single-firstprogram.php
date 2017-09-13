<?php wp_head();?>
<div class="firstprogram">
    <div class="container">
        <h1>Hurry! Registration closing soon!</h1>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-md-offset-2">
        <?php the_field('first_program_video');?>
                </div>
        </div>
        <?php $loop = new WP_Query(array('post_type' => 'firstprogram', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
        <?php while ($loop->have_posts()):$loop->the_post(); ?>
            <div class="row">

                <div class="col-lg-8 col-md-8 col-md-offset-2">
                    <?php the_content();?>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>

    </div>
</div>
<?php wp_footer();?>