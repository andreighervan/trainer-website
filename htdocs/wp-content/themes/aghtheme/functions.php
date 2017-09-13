<?php

// set up
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5',array('search-form'));
add_theme_support('post-formats',array('link','quote','video'));
add_action('admin_menu','aademo_admin_menu');
add_action('admin_init','aademo_admin_init');
//actions & filters
add_action('wp_enqueue_scripts','aademo_enqueue');
add_action('widgets_init','aghtheme_widgets');
add_action('after_setup_theme','aademo_setup_theme');
// includes

include (get_template_directory().'/include/widgets.php');
include (get_template_directory().'/include/front/enqueue.php');
include (get_template_directory().'/include/setup.php');
include (get_template_directory().'/include/widgets/widget-recent-posts.php');
include (get_template_directory().'/include/widgets/social-links/social-links.php');
include (get_template_directory().'/include/admin/menus.php');
include (get_template_directory().'/include/admin/options-page.php');
include (get_template_directory().'/include/admin/init.php');
include (get_template_directory().'/include/process/save-options.php');

//shortcodes



