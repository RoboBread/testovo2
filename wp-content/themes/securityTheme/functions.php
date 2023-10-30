<?php
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

    function add_scripts_and_styles(){
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
        wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
        // wp_enqueue_style( 'swiper-style', get_template_directory_uri() . 'css/swiper-bundle.min.css');
        wp_enqueue_style( 'main', get_stylesheet_uri(), array('normalize','reset'));
    }
?>