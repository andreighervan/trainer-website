<section class="blog">
    <div class="container">
        <div class="row blog-row">
            <div class="col-lg-1 col-md-1 col-md-offset-1 col-lg-offset-1">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 ">

                <div class="blog-post">

                    <h2><?php the_title();?></h2>
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                    <br><br>
                    <div class="video-blog"> <?php the_field('video_post');?></div>
                    <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/img/blog/getnewposts.jpg" class="margin-r-15"></a>
                    <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/img/blog/getthisepisode.jpg"></a>
                    <?php the_content();?>
                               </div>

            </div>
        </div>
    </div>
</section>

