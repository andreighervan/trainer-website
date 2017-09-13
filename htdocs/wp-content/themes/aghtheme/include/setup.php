<?php

function aademo_setup_theme(){
    register_nav_menu('primary',__('Primary Menu','aademo'));
    register_nav_menu('footermenu',__('Footer Menu','aademo'));
}