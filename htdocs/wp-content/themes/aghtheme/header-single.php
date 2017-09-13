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
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header class="header-events">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- add header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h1>BRENDON <span>BURCHARD</span></h1></a>
            </div>
            <!-- menu items -->
            <ul class="nav navbar-nav navbar-right social ">
                <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
                <div class="search">
                    <div id='global-nav-hidden-search-container' class="global-nav-hidden-search-container">
                        <li> <a class="search-icon" data-toggle="collapse" data-target="#global-nav-hidden-search">
                                <span class="sr-only">Toggle Search Bar</span>
                                <i class="fa fa-search"></i>
                            </a></li>
                        <div id="global-nav-hidden-search" class="collapse global-nav-hidden-search">
                            <form action="/" method="get" class="form-search">
                                <input type="text" name="s" id="search" value="" placeholder="I'm looking for..."/>
                                <button type="submit" class="btn">
                                    <span class="sr-only">Toggle Search Bar</span>
                                    <i class="fa fa-search"></i>
                                </button>
                                <a class="btn close-btn" data-toggle="collapse" data-target="#global-nav-hidden-search">
                                    <span class="sr-only">Toggle Search Bar</span>
                                    <i class="fa fa-times"></i>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>

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

</header>

