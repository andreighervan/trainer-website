<?php

function aademo_admin_menu(){
    add_menu_page(
        'Theme Options',
        'Theme Options',
        'edit_theme_options',
        'aademo_theme_opts',
        'aademo_theme_opts_page'
    );
}