<?php

show_admin_bar( false );

add_action( 'after_setup_theme', function() {

  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

} );

add_action( 'wp_enqueue_scripts', function() {

  $theme = wp_get_theme();
  $theme_ver = $theme->version;

   wp_enqueue_style( 'main',
    get_template_directory_uri().'/style.css',
    array(),
    $theme_ver
  );

  wp_enqueue_script( 'main',
    get_template_directory_uri().'/js/scripts.js',
    array( 'jquery' ),
    $theme_ver,
    true
  );

} );

require get_template_directory() . '/inc/jetpack.php';

// MENU
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'sculpt' ),
) );


//Clean Menus
function wp_nav_menu_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_css_class', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'wp_nav_menu_attributes_filter', 100, 1);
add_filter('page_css_class', 'wp_nav_menu_attributes_filter', 100, 1);


/*
 * Custom Post Types
 */
add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'people',
    array(
      'labels' => array(
        'name' => __( 'Sculptrons' ),
        'singular_name' => __( 'Sculptron' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'team'),
      'supports' => array('author'),
    )
  );
}