<?php 

// Setup
add_action( 'after_setup_theme', function() {
    $defaults = array(
        'width' => 80,
        'height' => 80,
    );
    add_theme_support( 'custom-logo', $defaults );
});

// Includes
include( get_template_directory() . '/include/front/enqueue.php' );

add_action( 'wp_enqueue_scripts', 'jnfDev_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'jnfDev_enqueue_scripts' );

// Actions and hooks
include( get_template_directory() . '/include/front/action-hooks.php' );

add_action( 'init', 'jnfDev_add_main_menu' );
add_action( 'init', 'jnfDev_add_widget_area' );

// Shortcodes