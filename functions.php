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



// Регистрируем новый тип записей блог
add_action('init', 'my_custom_init',0);
function my_custom_init(){
	register_post_type('blog', array(
		'labels'             => array(
			'name'               => __('Блог'), // Основное название типа записи
			'singular_name'      => __('Блог'), // отдельное название записи типа Book
			'add_new'            => __('Добавить запись'),
			'add_new_item'       => __('Добавить новые Блог'),
			'edit_item'          => __('Редактировать Блог'),
			'new_item'           => __('Новые Блог'),
			'view_item'          => __('Посмотреть Блог'),
			'search_items'       => __('Найти Блог'),
			'not_found'          => __('Блог не найдено'),
			'not_found_in_trash' => __('В корзине услуг не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Блог')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => false,
		'menu_position'      => null,
        'taxonomies'          => array( 'category' ),//Добавляем категории
		'supports'           => array('title','editor','thumbnail','excerpt')
	) );

	register_taxonomy('categoreis', ['blog',], [
        'labels'                => [
            'name'              => 'Категории блога',
            'singular_name'     => 'Категории блога',
            'search_items'      => 'Найти Категории блога',
            'all_items'         => 'Все Категории блога',
            'view_item '        => 'Посмотреть Категории блога',
            'edit_item'         => 'Редактировать Категории блога',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить Категории блога',
            'new_item_name'     => 'Добавить Категории блога',
            'menu_name'         => 'Категории блога',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
		 'rewrite'             => true
		// 'rewrite'               => array('slug'=>'brands')
    ]); 
	
	
	
    register_post_type('activity', array(
		'labels'             => array(
			'name'               => __('Деятельность'), // Основное название типа записи
			'singular_name'      => __('Деятельность'), // отдельное название записи типа Book
			'add_new'            => __('Добавить запись'),
			'add_new_item'       => __('Добавить новые Деятельность'),
			'edit_item'          => __('Редактировать Деятельность'),
			'new_item'           => __('Новые Деятельность'),
			'view_item'          => __('Посмотреть Деятельность'),
			'search_items'       => __('Найти Деятельность'),
			'not_found'          => __('Деятельность не найдено'),
			'not_found_in_trash' => __('В корзине услуг не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Деятельность')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt')
	) );





}
    

function debug($data) {
   echo '<prev>' . print_r($data, 1) . '</prev>';
}