<?php
/*
Template Name: Project Template
*/

  $lede = get_field('blog_lede');

  $postID = get_the_id();
  $authorID = get_post_field( 'post_author', $postID );
  $author = get_the_author_meta( 'display_name', $authorID );

  $date = get_the_date( __('F j, Y'), $postID );

  get_header();
?>

<!-- HERO SECTION -->
<section class="blogPage container">
  <div class="row row--med">

      <div class="block s1">
          <h5 class="blog-date">Posted on <?php echo $date.' by '.$author; ?></h5>
          <h1 class="h0 blog-title"><?php the_title(); ?></h1>
          <h2 class="blog-lede"><?php echo $lede; ?></h2>
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