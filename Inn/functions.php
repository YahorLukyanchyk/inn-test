<?php  

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu' );;

function theme_register_nav_menu(){
	register_nav_menu('header_nav', 'Header navigation');
    register_nav_menu('footer_nav', 'Footer navigation');
}

function style_theme(){
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/style.css' );
}

function scripts_theme(){
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');
    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/burger.js');
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider.js');
    wp_enqueue_script('submenu', get_template_directory_uri() . '/assets/js/submenu.js');
}

add_theme_support( 'custom-logo' );
?>