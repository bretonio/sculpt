<?php
get_header();

while ( have_posts() ) { the_post();

  // Check if ACF is enabled and the modules field exists
  if ( function_exists('get_field') && get_field('modules') !== null ) {
    $modules = get_field('modules');

    foreach ($modules as $module) {
      /* print("<pre>".print_r($module,true)."</pre>"); */

      $layout = ucfirst($module['acf_fc_layout']);

      $render = "\Component\\{$layout}";

      function_exists($render) ? print($render($module)) : print("${layout}");
    }

  } else {

    // Standard post content
    the_title('<h1>', '</h1>');
    the_content();

  }

}

global $post;
$post_slug=$post->post_name;

// this only works if the Services page-slug stays 'services'
if ( is_child('services') && $post_slug != "services"):

  // "View All" Link
  $viewAll = get_field('viewAll_services', 'option');
  $viewAll_url = '/services';
  $viewAll_classes = 'services'; // string of optional classnames
  include( locate_template( "/partials/viewAll.php" ) );

endif; 

get_footer(); ?>
