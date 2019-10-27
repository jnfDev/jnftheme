<?php

function jnfDev_enqueue_styles() {
    //wp_enqueue_style( 'jnfDev-fontawesome', get_stylesheet_directory_uri() . '/assets/libraries/fontawesome/css/all.min.css');
    wp_enqueue_style( 'jnfDev-main', get_stylesheet_directory_uri() . '/assets/dist/css/main.css');
}

function jnfDev_enqueue_scripts() {
    wp_enqueue_script('jnfDev-main', get_template_directory_uri() . '/assets/dist/js/main.js');
}