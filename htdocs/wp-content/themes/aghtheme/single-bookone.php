<?php wp_head();?>
<div class="bookone">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-offset-3">
                <?php the_field('video_top_book_one');?>
            </div>
        </div>
        <div class="row">
            <?php $loop = new WP_Query(array('post_type' => 'bookone', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
            <?php while ($loop->have_posts()):$loop->the_post(); ?>
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-md-offset-3">
                        <?php the_content();?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_query(); ?>

        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-md-offset-3">
            <form action="#">
                <input type="text" placeholder="Name" class="bookone-nameinput">
                <input type="email" placeholder="Email" class="bookone-emailinput">
                <div class="center">
                <input type="submit" value="Get Your Free Book!" class="bookone-submitinput">
                    </div>
            </form>
                </div>
        </div>
    </div>
</div>

<?php wp_footer();?>