<?php

function aademo_admin_enqueue(){
    if(!isset($_GET['page'])||$_GET['page']!='aademo_theme_opts'){
        return;
    }
    wp_register_style('aademo_bootstrap',get_template_directory_uri().'./css/bootstrap.min.css');
    wp_enqueue_style('aademo_bootstrap');
    wp_register_script('aademo_options',get_template_directory_uri().'./js/options.js',array(),false,true);
    wp_enqueue_media();
    wp_enqueue_script('aademo_options');
}