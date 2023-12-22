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
        'header-menu' => 'меню в шапке',
        'footer-menu' => 'меню в подвале'
    ]);
}

add_action('after_setup_theme', 'advocate');


//УБИРАЕМ span и br в contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
    return $content;
});
//УБИРАЕМ span и br в contact form 7

//УБИРАЕМ ТЕГ Р в contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');



if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Настройки контактов',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}


function debug($data) {
   echo '<prev>' . print_r($data, 1) . '</prev>';
}