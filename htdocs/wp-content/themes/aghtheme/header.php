<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js"></script>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header>
    
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- add header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h1>BRIAN<span> WALKER</span></h1></a>
            </div>
            <!-- menu items -->
			
            <ul class="nav navbar-nav navbar-right social ">
                <li><a href="https://www.facebook.com"><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/?lang=en"><i class="fa fa-lg fa-twitter"></i></a></li>
                <li><a href="https://plus.google.com/"><i class="fa fa-lg fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="fa fa-lg fa-linkedin"></i></a></li>
                

            </ul>
            <div class="collapse navbar-collapse" id="navbar1">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav navbar-nav nav-header navbar-right'
                )); ?>
                <!-- social media icons -->

            </div>

        </div>
    </nav>

    <video id="bgvid" playsinline autoplay muted loop>
        <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
        
        <source src="<?php bloginfo('stylesheet_directory');?>/video/back2.mp4" type="video/mp4">
    </video>
	<div class="align-center">
    <div class="video-text">
        <h1>Productivity. Success. Best Achievements</h1>

    </div>
	</div>
</header>

