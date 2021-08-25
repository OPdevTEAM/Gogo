<?php

function load_stylesheets()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('slick-custom-script', get_template_directory_uri() . '/js/slick-slider.js');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
