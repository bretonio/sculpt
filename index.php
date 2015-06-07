<?php
get_header();

  while ( have_posts() ) { the_post();

    // Check if ACF is enabled and the modules field exists
    if ( function_exists('get_field') && get_field('modules') !== null ) {

      // Loop through rows of flexible content field
      while( the_flexible_field('modules') ) {

        // Render module template based on the row layout's name
        $module_name = str_replace('_', '-', get_row_layout());
        // Use "include(locate_template(...))" instead of "get_template_part" to retain scope
        include( locate_template( "/modules/$module_name.php" ) );

      }

    } else {

      // Standard post content
      the_title('<h1>', '</h1>');
      the_content();

    }

  }
?>

<?php
  global $post;
  $post_slug=$post->post_name;

  // this only works if the Services page-slug stays 'services'
  if ( is_child('services') && $post_slug != "services"): ?>

  <!-- View All Services -->
  <section class="viewAll services pad-med">
    <div class="row row--lg">
      <div class="block s1">
        <a href="/services" class="viewAll-button button">
          <span class="backArrow button-right icon-boxes"></span>
          <span class="button-left"><?php the_field('viewAll_services', 'option'); ?></span>
        </a>
      </div>
    </div>
  </section>

<?php endif; ?>


<?php get_footer(); ?>
