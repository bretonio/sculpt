<?php
/*
Template Name: Project Template
*/
  
  $title = get_field('project_title');
  $lede = get_field('project_lede');

  get_header();
?>

<!-- HERO SECTION -->
<section class="workPage container hero u-h_s23">
  <div class="row row--lg">

      <div class="hero-content block s1 xl_s34">
          <h1 class="hero-title"><?php echo $title; ?></h1>
          <p class="hero-body"><?php echo $lede; ?></p>
      </div>

  </div>
</section>

<!-- PAGE MODULES -->
<?php
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

<?php get_footer('secondary'); ?>