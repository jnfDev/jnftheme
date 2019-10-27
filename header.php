<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Social media -->
                        <?php dynamic_sidebar( 'social-media-wa' ); ?>
                        <!-- Search bar -->
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 logo clearfix">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                        <div class="logo-text">
                            <p>Jairo J. Niño</p>
                            <span>Development & Design</span>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <!-- Main menu -->
                        <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main-menu', 
                            'container_class' => 'main-menu',
                            'menu_class' => 'nav-bar'
                        ));?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content">