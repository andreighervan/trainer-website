<?php
function aademo_theme_opts_page(){
    $theme_opts=get_option('aademo_opts');
    ?>
<div class="wrap">
    <div class="panel">
        <div class="panel-loading">
            <h3 class="panel-title"><?php _e('Theme Settings','aademo');?></h3>
        </div>
        <div class="panel-body">
            <?php
            if(isset($_GET['status'])&&$_GET['status']==1){
                ?>
                <div class="alert alert-success">SUCCESS !</div>
                <?php
            }
            ?>
            <form method="post" action="admin-post.php">
                <input type="hidden" name="action" value="aademo_save_options">
                <?php wp_nonce_field('aademo_options_verify');?>
                <h4><?php _e('Social Icons','aademo');?></h4>
                <div class="form-group">
                    <label><?php _e('Facebook','aademo');?></label>
                    <input type="text" class="form-control" name="aademo_inputFacebook" value="<?php echo $theme_opts['facebook'];?>">
                </div>
            <div class="form-group">
                <label><?php _e('Twitter','aademo');?></label>
                <input type="text" class="form-control" name="aademo_inputTwitter" value="<?php echo $theme_opts['twitter'];?>">
            </div>

                <div class="form-group">
                    <label><?php _e('Linkedin','aademo');?></label>
                    <input type="text" class="form-control" name="aademo_inputLinkedin" value="<?php echo $theme_opts['linkedin'];?>">
                </div>
                <div class="form-group">
                    <label><?php _e('Google plus','aademo');?></label>
                    <input type="text" class="form-control" name="aademo_inputGooglePlus" value="<?php echo $theme_opts['google_plus'];?>">
                </div>
                <div class="form-group">
                    <label><?php _e('Instagram','aademo');?></label>
                    <input type="text" class="form-control" name="aademo_inputInstagram" value="<?php echo $theme_opts['instagram'];?>">
                </div>
                <h4><?php _e('Logo Footer','aademo');?></h4>
                <div class="form-group">
                    <label><?php _e('Logo Type','aademo');?></label>
                    <select class="form-control" name="aademo_inputLogoType">
                        <option value="1"><?php _e('Site Name','aademo');?></option>
                        <option value="2" <?php echo $theme_opts['logo_type']==2?'SELECTED':'';?>><?php _e('Image','aademo');?></option>
                    </select>
                </div>

                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Logo Image" name="aademo_inputLogoImg" value="<?php echo $theme_opts['logo_img'];?>">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button" id="aademo_uploadLogoImgBtn">
                            <?php _e('Upload','aademo');?>
                        </button>
                    </span>
                </div>

             



                <h4><?php _e('Footer','aademo');?></h4>
                <div class="form-group">
                    <textarea cols="62"  name="aademo_inputFooter"><?php echo stripslashes($theme_opts['footer']);?></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
}