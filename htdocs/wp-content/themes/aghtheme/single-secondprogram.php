<?php get_header('secondprogram');?>
<?php wp_head();?>
    <?php
    $fields = get_field_object('image_top_ss');
?>
    <div class="secondprogram">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-8 col-md-offset-2">
                    <img src="<?php echo $fields['value']['url']; ?>"  alt="<?php echo $fields['value']['alt']; ?>" class="top-image-sec-program">
                    <h1>Announcing Experts Academy 2016!</h1><br>
                </div>
            </div>

                <div class="row">

                    <div class="col-lg-5 col-md-5">
                        <?php the_field('video_fs');?>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <?php the_field('content_fs');?>
                    </div>
                </div>
            <div class="row">

                <div class="col-lg-5 col-md-5">
                    <?php the_field('video_ss');?>
                </div>
                <div class="col-lg-7 col-md-7">
                    <?php the_field('content_ss');?>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-5 col-md-5">
                    <?php the_field('video_ts');?>
                </div>
                <div class="col-lg-7 col-md-7">
                    <?php the_field('content_ts');?>
                </div>
            </div>

        </div>
    </div>
<?php wp_footer();?>