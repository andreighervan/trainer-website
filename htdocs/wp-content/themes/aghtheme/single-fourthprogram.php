<?php get_header('secondprogram'); ?>
<?php wp_head(); ?>
<?php
$fields = get_field_object('image_top_fourth');
?>
<div class="fourthprogram">
    <div class="container">

        <div class="row center">
            <div class="col-lg-8 col-md-8 col-md-offset-2">
                <img src="<?php echo $fields['value']['url']; ?>" alt="<?php echo $fields['value']['alt']; ?>" class="">
                <h1>Announcing Dates for World’s Greatest Speaker Training LIVE!</h1><br>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-5 col-md-5">
                <?php the_field('video_fs_1'); ?>
            </div>
            <div class="col-lg-7 col-md-7">
                <?php the_field('content_fs_1'); ?>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-5 col-md-5">
                <?php the_field('video_fs_2'); ?>
            </div>
            <div class="col-lg-7 col-md-7">
                <?php the_field('content_fs_2'); ?>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-5 col-md-5">
                <?php the_field('video_fs_3'); ?>
            </div>
            <div class="col-lg-7 col-md-7">
                <?php the_field('content_fs_3'); ?>
            </div>
        </div>
        <div class="row">
            <?php the_field('after_videos_fs'); ?>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<?php get_footer(); ?>
