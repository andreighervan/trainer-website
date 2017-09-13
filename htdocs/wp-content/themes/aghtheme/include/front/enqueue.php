<?php

function aademo_enqueue(){

    wp_register_style('aademo_bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('aademo_bootstrap');
    wp_register_style('aademo_responsive',get_template_directory_uri().'/css/responsive.css');
    wp_enqueue_style('aademo_responsive');
    wp_register_style('aademo_fontawesome',get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('aademo_fontawesome');
    wp_register_style('aademo_reset',get_template_directory_uri().'/css/reset.css');
    wp_enqueue_style('aademo_reset');
    wp_enqueue_style( 'aademo-style', get_stylesheet_uri() );
    wp_enqueue_script('jquery');
    wp_register_script('aademo_bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true);
    wp_enqueue_script('aademo_bootstrap');
    wp_register_script('aademo_main',get_template_directory_uri().'/js/main.js',array(),false,true);
    wp_enqueue_script('aademo_main');

}