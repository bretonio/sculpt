<?php
/*
Template Name: Project Template
*/

  $lede = get_field('blog_lede');
  $sculptron_id = get_field('blog_author');
  $sculptron_url = get_permalink($sculptron_id);
  $guest = get_field('blog_guest_bool');

  $web = get_field('sculptron_website_url', $sculptron_id);
  $twitter = get_field('sculptron_twitter_url', $sculptron_id);
  $facebook = get_field('sculptron_facebook_url', $sculptron_id);
  $instagram = get_field('sculptron_instagram_url', $sculptron_id);
  $pinterest = get_field('sculptron_pinterest_url', $sculptron_id);
  $tumblr = get_field('sculptron_tumblr_url', $sculptron_id);

  $postID = get_the_id();
  $authorID = get_post_field( 'post_author', $postID );
  $author = get_the_author_meta( 'display_name', $authorID );
  $date = get_the_date( __('m.d.Y'), $postID );

  get_header();
?>

<!-- HERO SECTION -->
<section class="blogPage container">
  <div class="row row--med">

      <div class="block s1">
          <h5 class="blog-date">Posted <?php echo $date.' by '.$author; ?></h5>
          <h1 class="h0 blog-title"><?php the_title(); ?></h1>
          <h2 class="blog-lede"><?php echo $lede; ?></h2>
      </div>

  </div>
</section>

<!-- PAGE MODULES -->
<?php
while ( have_posts() ): the_post();

  //increment post views
  setPostViews(get_the_ID());

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

  ?> <!-- end modules loop -->

  <section class="blogAuthor container pad--med">
    <div class="row row--med">
      <span class="divider"></span>
      <div class="blogAuthor-img block">
        <div class="avatar">
          <?php echo get_avatar( $authorID, 200) ?>
        </div>
      </div>
      <div class="blogAuthor-info block s1 med_s23">
        <?php if ($guest == true){ ?>
          <h3 class="author-name"><?php the_author(); ?></h3>
        <?php } else { ?>
          <a class="author-name" href="<?php echo $sculptron_url; ?>"><h3><?php the_author(); ?></h3></a>
        <?php } ?>
        <h5 class="author-desc"><?php the_author_meta('description'); ?><br/><br/>
        <strong>Follow <?php the_author_meta('first_name'); ?>:</strong></h5>
        <p>
          <?php echo $web != '' ? '<a class="icon-web" href="'.$web.'" target="_blank"></a>' : '';?>
          <?php echo $twitter != '' ? '<a class="icon-twitter" href="'.$twitter.'" target="_blank"></a>' : '';?>
          <?php echo $facebook != '' ? '<a class="icon-facebook" href="'.$facebook.'" target="_blank"></a>' : '';?>
          <?php echo $instagram != '' ? '<a class="icon-instagram" href="'.$instagram.'" target="_blank"></a>' : '';?>
          <?php echo $pinterest != '' ? '<a class="icon-pinterest" href="'.$pinterest.'" target="_blank"></a>' : '';?>
          <?php echo $tumblr != '' ? '<a class="icon-tumblr" href="'.$tumblr.'" target="_blank"></a>' : '';?>
        </p>
    </div>
  </section>

  <?php 
    $prev = get_previous_posts_link('link');
    $next = get_next_posts_link('link', 0);
  ?>

  <section class="postNav container">
    <div class="row">
      <div class="prevPost block s14 med_s13">
        <?php previous_post_link('%link', '<span class="icon-arrow"></span>'); ?>
      </div>
      <div class="allPosts block s12 med_s13">
        <a href="<?php echo site_url().'/contact'; ?>">back to all posts</a>
      </div>
      <div class="nextPost block s14 med_s13">
        <?php next_post_link('%link', '<span class="icon-arrow"></span>'); ?>
      </div>
    </div>
  </section>

<?php endwhile; ?>


<!-- popular posts module -->
<section class="popularPosts container pad--sm">
  <div class="row row--lg inline">
    <h3 class="popularPosts-title">read these next</h3>
  </div>
  <div class="row row--lg inline">

  <?php 
    $popPost = new WP_Query( array( 'posts_per_page' => 2, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

    while ( $popPost->have_posts() ): $popPost->the_post(); 

      $postID = get_the_id();
      $authorID = get_post_field( 'post_author', $postID );
      $author = get_the_author_meta( 'display_name', $authorID );
      $date = get_the_date( __('m.d.Y'), $postID );

      $excerpt = get_the_excerpt(); 
    ?>

      <!-- post block -->
      <div class="block s1 lg_s12">
        <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
        <p class="post-desc"><?php echo strip_tags($excerpt); ?></p>
        <h5 class="post-byline"><?php echo '<strong>'.$date.'</strong> by '.$author; ?></h5>
      </div>

  <?php endwhile; wp_reset_postdata(); ?>

  </div>
</section>

<?php get_footer('secondary'); ?>