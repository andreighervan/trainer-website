<?php

function aghtheme_widgets(){
    register_sidebar(array(
       'name'=>__('Footer One','aghtheme'),
        'id'=>'aghtheme_footer_one',
        'description'=>__('Footer widget one','aghtheme'),
        'class'=>'',
        'before_widget'=>'<div id="%1%s" class="card %2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 class="card-title">',
        'after_title'=>'</h4>'
    ));
    register_sidebar(array(
        'name'=>__('Footer Two','aghtheme'),
        'id'=>'aghtheme_footer_two',
        'description'=>__('Footer widget two','aghtheme'),
        'class'=>'',
        'before_widget'=>'<div id="%1%s" class="card %2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 class="card-title">',
        'after_title'=>'</h4>'
    ));
    register_sidebar(array(
        'name'=>__('Footer Three','aghtheme'),
        'id'=>'aghtheme_footer_three',
        'description'=>__('Footer widget three','aghtheme'),
        'class'=>'',
        'before_widget'=>'<div id="%1%s" class="card %2$s">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 class="card-title title-widget-three clearfix">',
        'after_title'=>'</h4>'
    ));
}