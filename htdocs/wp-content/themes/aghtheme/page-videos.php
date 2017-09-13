<?php
/* Template Name:Page-Videos */
get_header('video');
get_template_part('template-parts/content-getaccess');
?>
<div class="videos">
    <div class="container">
        <h1 class="center">Subscribe to Brendon Burchard’s YouTube Channel</h1>
        <div class="box-youtube-vid center">
            <h4>Watch Brendon's Show</h4>
            <div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
        </div>
        <div class="row">
            <?php $loop = new WP_Query(array('post_type' => 'videocpt', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
            <?php while ($loop->have_posts()):$loop->the_post(); ?>
                    <div class="col-lg-4 col-md-4 center video">
                        <?php the_field('video_cf');?>
                        <h4><i><?php the_title();?></i></h4>
                    </div>
            <?php endwhile;
            wp_reset_query(); ?>
        </div>
    </div>
</div>
<?php
get_template_part('template-parts/content-getaccesstwo');
get_footer();?>