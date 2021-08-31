<?php

function load_stylesheets()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

