<?php

function aademo_admin_init(){
    include ('enqueue.php');
    add_action('admin_enqueue_scripts','aademo_admin_enqueue');
    add_action('admin_post_aademo_save_options','aademo_save_options');
}
