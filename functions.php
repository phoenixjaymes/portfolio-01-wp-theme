<?php


// Add theme support for Custom Header Image
$defaults = array(
  'default-image'          => get_template_directory_uri() . '/img/dw-rassilon.svg', 
  'default-text-color'     => '#36b55c',
  'header-text'            => false,
  'uploads'                => true,
);
add_theme_support( 'custom-header', $defaults );




add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


function register_theme_menus() {
  
  register_nav_menus(
    array (
      'primary-menu' => 'Primary Menu',
      'secondary-menu' => 'Secondary Menu' 
    )
  );
}
add_action( 'init', 'register_theme_menus' );


function wppj_theme_styles () {
  wp_enqueue_style( 'google_css', 'https://fonts.googleapis.com/css?family=Proza+Libre|Roboto:400,500');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'wppj_theme_styles' );


?>