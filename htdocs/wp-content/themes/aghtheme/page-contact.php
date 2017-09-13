<?php
/* Template Name:Page-Contact */

?>
<?php
get_header('secondprogram');
wp_head();

?>
    <div class="thirdprogram">
        <img src="<?php bloginfo('stylesheet_directory');?>/img/contact/top-contact.jpg">
    <?php get_template_part('template-parts/content-getaccess');?>
        <div class="container">

            <div class="row">
                <?php if (have_posts()) : ?>
                <?php while(have_posts()):the_post();?>
                    <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                       <?php the_content();?>
                            </div>
                        </div>

                    </div>
                <?php endwhile; ?>
            </div>


            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>
        </div>
    </div>
<?php
get_template_part('template-parts/content-getaccesstwo');
get_footer();
?>