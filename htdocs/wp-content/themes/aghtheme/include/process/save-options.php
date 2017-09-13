<?php
function aademo_save_options()
{
    if(!current_user_can('edit_theme_options')){
        wp_die(__('You are not allowed to be on this page'));
    }
    check_admin_referer('aademo_options_verify');
    $opts=get_option('aademo_opts');
    $opts['twitter']=sanitize_text_field($_POST['aademo_inputTwitter']);
    $opts['facebook']=sanitize_text_field($_POST['aademo_inputFacebook']);
    $opts['linkedin']=sanitize_text_field($_POST['aademo_inputLinkedin']);
    $opts['google_plus']=sanitize_text_field($_POST['aademo_inputGooglePlus']);
    $opts['instagram']=sanitize_text_field($_POST['aademo_inputInstagram']);
    $opts['logo_type']=absint($_POST['aademo_inputLogoType']);
    $opts['footer']=$_POST['aademo_inputFooter'];
    $opts['logo_img']=esc_url_raw($_POST['aademo_inputLogoImg']);
    update_option('aademo_opts',$opts);
    wp_redirect(admin_url('admin.php?page=aademo_theme_opts&status=1'));
}