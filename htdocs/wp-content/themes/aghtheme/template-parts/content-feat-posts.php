<div class="feat-posts" id="feat-posts">
    <div class="feat-posts-title">
        <div class="container">
            <div class="left-float">
                <h3>Blog</h3>
            </div>
            <div class="right-posts">
                <h3>Featured Posts by Brian Walker</h3>
            </div>
        </div>
    </div>
    <div class="container feat-posts-container">

                <div class="row">
                    <?php if (have_posts()) : ?>
                    <?php $loop=new WP_Query(array('post_type'=>'post','orderby'=>'date','order'=>'ASC','category__not_in'=>10,'posts_per_page'=>6));?>
                    <?php while($loop->have_posts()):$loop->the_post();?>
                    <div class="col-lg-4 col-md-4">
                        <div class="box-features relative">
                            <div class="absolute category-feat">
                                <?php the_category(); ?>
                            </div>
                            <a href="<?php the_permalink();?>">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail();
                            }
                            ?> </a>
                           <p class="title-posts-feat">    <a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
                        </div>

                    </div>
                    <?php endwhile; ?>
                </div>


        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>
    </div>
</div>