<?php

function testimonial_theme_setup(){
    load_theme_textdomain('themeName');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','testimonial_theme_setup');

function themeName_assets(){
    wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'themeName_style', get_stylesheet_uri() );
    
    
    wp_enqueue_script( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js', array('jquery'), '1.0.0', 'all' );
   }
add_action('wp_enqueue_scripts','themeName_assets');

