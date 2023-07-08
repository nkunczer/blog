<?php

function register_menus() {
  register_nav_menus(
    array(
      'primary-menu' => 'Hauptmenü',
      'footer-menu' => 'Fußermenü'
    )
  );
}

add_action('after_setup_theme', 'register_menus');


function add_menu_support() {
  add_theme_support('menus');
}
add_action('init', 'add_menu_support');


class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
 
}

function custom_gutenberg_styles() {
  wp_enqueue_style( 'custom-gutenberg-styles', get_stylesheet_directory_uri() . '/editor.css' );
}
add_action( 'enqueue_block_editor_assets', 'custom_gutenberg_styles' );

function enqueue_custom_script() {
  wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/hallo.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_script' );

?>