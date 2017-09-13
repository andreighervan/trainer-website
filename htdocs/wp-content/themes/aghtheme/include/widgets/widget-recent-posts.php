<?php
/*
 * Plugin Name:AGV Widget Recent Posts
 * Plugin URI:http://wordpress.org
 * Description:A widget that displays the latest posts
 * Version:1.0
 * Author:Andrei Ghervan
 */

class AGV_Widget_Recent_Posts extends WP_Widget {

/**
* Sets up the widgets name etc
*/
public function __construct() {

parent::__construct( 'agv_widget_recent_posts',__('AGV Recent Posts','agv'),array('classname'=>'recent_posts',
    'description'=>__('A custom widget that displays the 3 most recent posts','agv')) );
}

/**
* Outputs the content of the widget
*
* @param array $args
* @param array $instance
*/
public function widget( $args, $instance ) {
// outputs the content of the widget
    $title=apply_filters('widget_title',$instance['title']);

    echo $args['before_widget'];
    if($title){
        echo $args['before_title'].$title.$args['after_title'];
    }

    $queryArgs=array(
        'cat'=>'-1',
        'orderby'=>'date',
        'posts_per_page'=>$instance["number_posts"]
    );

    $query=new WP_Query($queryArgs);
    if($query->have_posts()):?>
        <ul class="media">
        <?php while($query->have_posts()):$query->the_post();?>
            <li>
           <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </li>
        <?php endwhile;?>
       </ul>
        <?php endif;

    echo $args['after_widget'];

}

/**
* Outputs the options form on admin
*
* @param array $instance The widget options
*/
public function form( $instance ) {
// outputs the options form on admin
    $defaults=array('title'=>'Recent Posts');
    $instance=wp_parse_args((array)$instance,$defaults);?>
<p>
    <label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title: ','agv');?></label>
    <input type="text" class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" value="<?php echo esc_attr($instance['title']);?>">
</p>
    <p><label for="<?php echo $this->get_field_id('number_posts');?>"><?php _e('Number of posts');?></label><br>
        <input type="text" id="<?php echo $this->get_field_id('number_posts');?>" name="<?php echo $this->get_field_name('number_posts');?>" value="<?php echo esc_attr($instance['number_posts']);?>"></p>

    <?php
}


/**
* Processing widget options on save
*
* @param array $new_instance The new options
* @param array $old_instance The previous options
*/
public function update( $new_instance, $old_instance ) {
// processes widget options to be saved
    $instance=$old_instance;
    $instance['title']=strip_tags(stripslashes($new_instance['title']));
    $instance['number_posts']=strip_tags(stripslashes($new_instance['number_posts']));
    return $instance;
}

}
function register_agv_recent_posts(){
    register_widget('AGV_Widget_Recent_Posts');
}

add_action('widgets_init','register_agv_recent_posts');
?>