<?php
/*
Template Name: Work Template
*/
  
  $title = get_field('workHero_title');
  $lede = get_field('workHero_lede');

  get_header();
?>

<!-- HERO SECTION -->
<section class="workPage container hero u-h_s23">
  <div class="row row--lg">

      <div class="hero-content block s1 xl_s34">
          <h1 class="h0 hero-title"><?php echo $title; ?></h1>
          <h2 class="hero-body"><?php echo $lede; ?></h2>
      </div>

  </div>
</section>

<!-- POSTS LOOP -->
<section class="postGrid container">
  <div class="row">
    <?php 
      $projects = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => -1 ) ); 
      while ( $projects->have_posts() ) : $projects->the_post(); ?>

      <?php include( locate_template('partials/postGrid-block.php') ); ?>

    <?php endwhile; wp_reset_query();?>
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