<?php

// Hide Admin Bar - Comment this out if need be
show_admin_bar( false );

// Style Editor
add_editor_style( 'inc/editor.css' );

add_action( 'after_setup_theme', function() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

  /* Create Custom Image Sizing */
  add_image_size( 'src' );
  add_image_size( 'high_res', 2000 );
  add_image_size( 'two_up', 1000 );
  add_image_size( 'four_up', 600 );
} );

// /blog/%postname%/

/*
 * REWRITES
 */
function custom_rewrite() {
  global $wp_rewrite;
  add_rewrite_rule('^work/(.[^/]*)/?', 'index.php?project=$matches[1]', 'top');
  // add_rewrite_rule('^team/(.[^/]*)/?', 'index.php?pagename=about&team=$matches[1]', 'top');
  add_rewrite_rule('^about/(.[^/]*)/?', 'index.php?team=$matches[1]', 'top');
  // add_rewrite_rule('^about/(.[^/]*)/?', 'index.php?guest=$matches[1]', 'top');
  $wp_rewrite->flush_rules();
}
add_action('init', 'custom_rewrite');


/*
 * SCRIPTS AND STYLES
 */
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

/*
 * MENUS
 */
register_nav_menus( array(
  'default' => __( 'Default', 'sculpt' ),
  'offCanvas' => __( 'Off Canvas (Main/Mobile Nav)', 'sculpt' ),
  'homepage' => __( 'Homepage Menu', 'sculpt' ),
  'about' => __( 'About Page Menu', 'sculpt' ),
  'about_sub' => __( 'About Sub Page Menu', 'sculpt' ),
  'team' => __( 'Team Pages Menu', 'sculpt' ),
  'services' => __( 'Services Menu', 'sculpt' ),
  'services_sub' => __( 'Services Sub Page Menu', 'sculpt' ),
  'work' => __( 'Work Page Menu', 'sculpt' ),
  'project' => __( 'Project Page Menu', 'sculpt' ),
  'blog' => __( 'Blog Page Menu', 'sculpt' ),
  'post' => __( 'Blog Post Menu', 'sculpt' ),
  'contact' => __( 'Contact Page Menu', 'sculpt' ),
  'utility_1' => __( 'Utility 1', 'sculpt' ),
  'utility_2' => __( 'Utility 2', 'sculpt' ),
  'utility_3' => __( 'Utility 3', 'sculpt' )
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
  register_post_type( 'project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'work', 'with_front' => false),
      'supports' => array('title','author', 'custom-fields', 'post-format'),
      'taxonomies' => array('post_tag', 'category'),
      'menu_position' => 5
    )
  );
  
  register_post_type( 'team',
    array(
      'labels' => array(
        'name' => __( 'Sculptrons' ),
        'singular_name' => __( 'Sculptron' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'about', 'with_front' => false),
      'supports' => array('title','author','thumbnail', 'custom-fields', 'post-format'),
      'menu_position' => 5
    )
  );

  register_post_type( 'guest',
    array(
      'labels' => array(
        'name' => __( 'Collaborators' ),
        'singular_name' => __( 'Collaborator' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'about/collaborator', 'with_front' => false),
      'supports' => array('title','author','thumbnail', 'custom-fields', 'post-format'),
      'menu_position' => 5
    )
  );
}

/*
 * Options Page ACF
 */
if ( function_exists('acf_add_options_page')){
  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Footer Content',
    'menu_title'  => 'Footer Content',
    'parent_slug' => 'theme-settings',
  ));
}

