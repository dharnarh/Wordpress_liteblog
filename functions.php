<?php

# Wordpress HTML5 support
add_theme_support( 'html5' );

# Wordpress title tag support
add_theme_support( 'title-tag' );

# Wordpress post image thumbnail support
add_theme_support( 'post-thumbnails' );

# Add css styles and JS scripts
function reg_style_n_script () {

  wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . 'assets/css/bootstrap.css' );
  wp_enqueue_style( 'fontAwesomeCSS', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'mainCSS', get_template_directory_uri() . 'assets/css/main.css' );
  wp_enqueue_style( 'styleCSS', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'JqueryJS', get_template_directory_uri() . '/assets/js/Jquery-3.3.1.js' );
	wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/assets/js/bootstrap.js' );
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/assets/js/main.js' );

}

add_action ( 'wp_enqueue_scripts', 'reg_style_n_script' );

# Function to register menu to theme
function reg_my_menu () {
  register_nav_menus (
    array ( 'header-menu' => __( 'Header Menu' ) )
  );
}

add_action ( 'init', 'reg_my_menu' );

# Add bootstrap class to wp_menu ul li
function li_class ( $class, $items, $args ) {
  $classes = 'nav-item';
  return $classes;
}

add_filter ( 'nav_menu_css_class', 'li_class', 1,3 );

# Add classes to wp_menu li a
function li_a_class ( $class ) {
	$class['class'] = 'nav-link';
	return $class;
}
add_filter ( 'nav_menu_link_attributes', 'li_a_class' );