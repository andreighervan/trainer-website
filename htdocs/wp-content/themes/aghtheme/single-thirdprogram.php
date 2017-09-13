<?php
get_header('third');
wp_head();
?>
<div class="thirdprogram">
    <img src="<?php bloginfo('stylesheet_directory');?>/img/programs/thirdprogram.jpg">
    <div class="container">
        <h2>Featured Courses</h2>
        <hr>
        <div class="row">
            <?php if (have_posts()) : ?>
            <?php $loop=new WP_Query(array('post_type'=>'post','orderby'=>'post_id','order'=>'ASC','category_name'=>'courses'));?>
            <?php while($loop->have_posts()):$loop->the_post();?>
                <div class="col-lg-4 col-md-4">
                    <div class="box-th-pr">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?>
                        <div class="shadow">
                            <h3><b><?php the_title();?></b></h3>
                       <div class="th-content"><?php the_content();?></div>
                          <a href="<?php the_permalink();?>">Learn More</a>
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
<?php get_footer('third');
?>
