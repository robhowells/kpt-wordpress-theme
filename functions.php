<?php

/**
 * Enqueue scripts and styles
 */

function load_kptsupport_css() {
	wp_enqueue_style( 'kptsupport_stylesheet', get_stylesheet_uri(), array(), '1.0');
	wp_enqueue_style( 'kptsupport_gfonts', 'https://fonts.googleapis.com/css?family=Raleway:400|Source+Sans+Pro:700' );
}

add_action( 'wp_enqueue_scripts', 'load_kptsupport_css' );

function load_kptsupport_scripts() { 
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', array(), '', true );
	wp_enqueue_script( 'kptsupport_main_script', get_template_directory_uri() . '/js/dist/js.min.js', array( 'jquery' ), '1.0', true ); 
}

add_action( 'wp_enqueue_scripts', 'load_kptsupport_scripts' );

/**
 * Register navigation menus
 */

function register_kptsupport_menu() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}

add_action( 'init', 'register_kptsupport_menu' );

/**
 * Add special class to nav items
 */ 

function my_nav_special_class($classes, $item){

    $classes[] = 'header-nav-item';

    return $classes;
}

add_filter('nav_menu_css_class' , 'my_nav_special_class' , 10 , 2);

/**
 * Remove admin bar - development mode only
 */ 

add_filter('show_admin_bar', '__return_false');

/**
 * Widget for displaying footer social icons
 */ 

if(function_exists('register_sidebar'))
 {

    register_sidebar ( array (
        'name' => 'Social icons',
        'id' => 'social-icons',
        'description' => 'List of social icons that appear in the footer.',
        'before_widget' => '<div id="%2$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>' ,
    ) );

}

?>