<?php

class Social_Links_Widget extends WP_Widget
{

    /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(

            'description' => __('Outputs social icons linked to profiles', 'sl_domain')
        );
        parent::__construct('social_links_widget', __('Social Links Widget', 'sl_domain'), $widget_ops);
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
        $links = array(
            'facebook' => esc_attr($instance['facebook_link']),
            'twitter' => esc_attr($instance['twitter_link']),
            'linkedin' => esc_attr($instance['linkedin_link']),
            'google' => esc_attr($instance['google_link']),
            'youtube' => esc_attr($instance['youtube_link']),
            'instagram' => esc_attr($instance['instagram_link']),

        );
        $title=apply_filters('widget_title',$instance['title']);
        echo $args['before_widget'];
        if($title){
            echo $args['before_title'].$title.$args['after_title'];
        }
        $this->getSocialLinks($links);
        echo $args['after_widget'];
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        // outputs the options form on admin
        $this->getForm($instance);
    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     */
    public function update($new_instance, $old_instance)
    {
        // processes widget options to be saved
        $instance = array(
            'title'=>(!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '',
            'facebook_link' => (!empty($new_instance['facebook_link'])) ? strip_tags($new_instance['facebook_link']) : '',
            'twitter_link' => (!empty($new_instance['twitter_link'])) ? strip_tags($new_instance['twitter_link']) : '',
            'linkedin_link' => (!empty($new_instance['linkedin_link'])) ? strip_tags($new_instance['linkedin_link']) : '',
            'google_link' => (!empty($new_instance['google_link'])) ? strip_tags($new_instance['google_link']) : '',
            'youtube_link' => (!empty($new_instance['linkedin_link'])) ? strip_tags($new_instance['youtube_link']) : '',
            'instagram_link' => (!empty($new_instance['google_link'])) ? strip_tags($new_instance['instagram_link']) : ''
        );
        return $instance;
    }

    public function getForm($instance)
    {
        if (isset($instance['facebook_link'])) {
            $facebook_link = esc_attr($instance['facebook_link']);
        } else {
            $facebook_link = 'http://www.facebook.com';
        }
        if (isset($instance['twitter_link'])) {
            $twitter_link = esc_attr($instance['twitter_link']);
        } else {
            $twitter_link = 'https://www.twitter.com';
        }
        if (isset($instance['linkedin_link'])) {
            $linkedin_link = esc_attr($instance['linkedin_link']);
        } else {
            $linkedin_link = 'http://www.linkedin.com';
        }
        if (isset($instance['google_link'])) {
            $google_link = esc_attr($instance['google_link']);
        } else {
            $google_link = 'http://www.google.com';
        }
        if (isset($instance['youtube_link'])) {
            $youtube_link = esc_attr($instance['youtube_link']);
        } else {
            $youtube_link = 'https://www.youtube.com';
        } if (isset($instance['instagram_link'])) {
        $instagram_link = esc_attr($instance['instagram_link']);
    } else {
        $instagram_link = 'http://www.instagram.com';
    }

        ?>
       <?php  $defaults=array('title'=>'Connect with me');
        $instance=wp_parse_args((array)$instance,$defaults);?>
        <p>
            <label for="<?php echo $this->get_field_id('title');?>"><?php _e('Title: ','agv');?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" value="<?php echo esc_attr($instance['title']);?>">
        </p>
        <p><label for="<?php $this->get_field_id('facebook_link'); ?>"><?php _e('Facebook Link'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook_link'); ?>"
                   name="<?php echo $this->get_field_name('facebook_link'); ?>" type="text"
                   value="<?php echo esc_attr($facebook_link); ?>"></p>
        <p><label for="<?php $this->get_field_id('twitter_link'); ?>"><?php _e('Twitter Link'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter_link'); ?>"
                   name="<?php echo $this->get_field_name('twitter_link'); ?>" type="text"
                   value="<?php echo esc_attr($twitter_link); ?>"></p>
        <p><label for="<?php $this->get_field_id('linkedin_link'); ?>"><?php _e('Linkedin Link'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin_link'); ?>"
                   name="<?php echo $this->get_field_name('linkedin_link'); ?>" type="text"
                   value="<?php echo esc_attr($linkedin_link); ?>"></p>
        <p><label for="<?php $this->get_field_id('google_link'); ?>"><?php _e('Google Link'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('google_link'); ?>"
                   name="<?php echo $this->get_field_name('google_link'); ?>" type="text"
                   value="<?php echo esc_attr($google_link); ?>"></p>
        <p><label for="<?php $this->get_field_id('youtube_link'); ?>"><?php _e('Youtube Link'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('youtube_link'); ?>"
                   name="<?php echo $this->get_field_name('youtube_link'); ?>" type="text"
                   value="<?php echo esc_attr($youtube_link); ?>"></p>

        <p><label for="<?php $this->get_field_id('instagram_link'); ?>"><?php _e('Instagram Link'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('instagram_link'); ?>"
                   name="<?php echo $this->get_field_name('instagram_link'); ?>" type="text"
                   value="<?php echo esc_attr($instagram_link); ?>"></p>

        <?php
    }

    public function getSocialLinks($links)
    {
        ?>
        <div class="social_links clearfix">
            <a target="_blank" href="<?php echo esc_attr($links['facebook']); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a target="_blank" href="<?php echo esc_attr($links['twitter']); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a target="_blank" href="<?php echo esc_attr($links['linkedin']); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a target="_blank" href="<?php echo esc_attr($links['google']); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a target="_blank" href="<?php echo esc_attr($links['youtube']); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
            <a target="_blank" href="<?php echo esc_attr($links['instagram']); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>

        </div>
        <?php
    }
}