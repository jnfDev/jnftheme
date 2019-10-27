<?php

function jnfDev_add_main_menu() {
    register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}

function jnfDev_add_widget_area() {
    register_sidebar( array(
        'name' => __('Social Media'),
        'id' => 'social-media-wa',
        'before_widget' => '<div id="%1$s" class="social-media-wa">',
        'after_widget' => '</div>'
    ) );

    register_sidebar( array(
        'name' => __('Social Media Footer'),
        'id' => 'social-media-wa-footer',
        'before_widget' => '<div id="%1$s" class="social-media-wa">',
        'after_widget' => '</div>'
    ) );

    register_sidebar( array(
        'name' => __('Contactform Footer'),
        'id' => 'contactform-footer',
        'before_widget' => '<div id="%1$s" class="contactform-footer">',
        'after_widget' => '</div>'
    ) );

    register_sidebar( array(
        'name' => __('Legal Footer'),
        'id' => 'legal-footer',
        'before_widget' => '<div id="%1$s" class="legal-footer">',
        'after_widget' => '</div>'
    ) );
}