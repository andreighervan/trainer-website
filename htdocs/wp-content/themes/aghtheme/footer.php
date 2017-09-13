<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-md-offset-3">
                <nav class="navbar" role="navigation">
                    <div class="container-fluid">

                        <div id="navbar">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footermenu',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav'
                            )); ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <?php if (is_active_sidebar('aghtheme_footer_one')) : ?>
                <div id="footer-widget-one footer-widget" class="col-lg-4 col-md-4" role="complementary">
                    <?php dynamic_sidebar('aghtheme_footer_one'); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
            <?php if (is_active_sidebar('aghtheme_footer_two')) : ?>
                <div id="footer-widget-two footer-widget" class="col-lg-4 col-md-4" role="complementary">
                    <?php dynamic_sidebar('aghtheme_footer_two'); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
            <?php if (is_active_sidebar('aghtheme_footer_three')) : ?>
                <div id="footer-widget-three footer-widget" class="col-lg-4 col-md-4" role="complementary">
                    <?php dynamic_sidebar('aghtheme_footer_three'); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>

        </div>
    </div>
</footer>
<!--/.modal-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>