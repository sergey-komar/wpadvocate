<?php

function advocate_scripts() {
    wp_enqueue_style('advocate-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '2023', 'all');

    wp_enqueue_script('advocate-js',  get_template_directory_uri() . '/assets/js/main.min.js', [], '2023', true);
}

add_action('wp_enqueue_scripts', 'advocate_scripts');


function advocate() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');


    register_nav_menus([
        'footer-menu' => 'меню в подвале'
    ]);
}

add_action('after_setup_theme', 'advocate');


function debug($data) {
   echo '<prev>' . print_r($data, 1) . '</prev>';
}