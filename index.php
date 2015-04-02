<?php get_header(); ?>

  <?php
  while ( have_posts() ) { the_post();

    // Check if ACF is enabled and the modules field exists
    if ( function_exists('get_field') && get_field('modules') !== null ) {

      // Loop through rows of flexible content field
      while( the_flexible_field('modules') ) {

        // Render module template based on the row layout's name
        $module_name = str_replace('_', '-', get_row_layout());
        // Use "include(locate_template(...))" instead of "get_template_part" to retain scope
        include( locate_template( "/modules/$module_name/$module_name.php" ) );

      }

    } else {

      // Standard post content
      the_title('<h1>', '</h1>');
      the_content();

    }

  }
  ?>
  
<?php get_footer(); ?>