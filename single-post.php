<?php
/*
Template Name: Project Template
*/

  $lede = get_field('blog_lede');
  $sculptron_id = get_field('blog_author');
  $sculptron_url = get_permalink($sculptron_id);
  $guest = false;
  if ( get_post_type($sculptron_id) == 'guest' ) {
    $guest = true;
  }
  
  $sculptron_name = get_field('sculptron_name', $sculptron_id);
  $sculptron_pic = get_field('sculptron_pic', $sculptron_id);
  $sculptron_bio = get_field('sculptron_bio', $sculptron_id);

  $sculptron_links = get_field('sculptron_links', $sculptron_id);

  $postID = get_the_id();
  $authorID = get_post_field( 'post_author', $postID );
  $author = get_the_author_meta( 'display_name', $authorID );
  $date = get_the_date( __('m.d.Y'), $postID );

  get_header();
?>

<!-- HERO SECTION -->
<section class="blogPage container">
  <div class="row row--med pad--lg">

      <div class="block s1">
          <p class="blog-date h5">Posted <?php echo $date.' by '.$author; ?></p>
          <h1 class="h0 blog-title"><?php the_title(); ?></h1>
          <h2 class="blog-lede"><?php echo $lede; ?></h2>
      </div>

  </div>
</section>

<!-- PAGE MODULES -->
<?php
while ( have_posts() ): the_post();

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
  <section class="container">
    <div class="row row--med">
      <a class="js-commentsToggle comments-button button--alt" href="#0" target="_blank">
        <span class="button--alt-icon icon-plus"></span>
        <span class="button--alt-text">
          view comments
        </span>
      </a>
    </div>
  </section>
  <section class="js-comments comments-container">
    <div class="row row--med">
      <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>
    </div>
  </section>

  <!-- Author Section -->
  <section class="blogAuthor container pad--med">
    <div class="row row--med">
      <span class="divider"></span>
      <div class="blogAuthor-img block">
        <div class="avatar">
          <img src="<?php echo $sculptron_pic['sizes']['large']; ?>"/>
        </div>
      </div>
      <div class="blogAuthor-info block s1 med_s23">
        <?php if ($guest == true){ ?>
          <h3 class="author-name"><?php echo $sculptron_name; ?></h3>
        <?php } else { ?>
          <a class="author-name" href="<?php echo $sculptron_url; ?>"><h3><?php echo $sculptron_name; ?></h3></a>
        <?php } ?>
        <p class="author-desc h5"><?php echo $sculptron_bio; ?><br/><br/>

        <?php if (have_rows('sculptron_links', $sculptron_id)): ?>
          <strong>Follow <?php the_author_meta('first_name'); ?>:</strong></p>
          <p>

            <?php while (have_rows('sculptron_links', $sculptron_id)): the_row(); ?>
              <a class="icon-<?php the_sub_field('icon'); ?>" href="http://<?php the_sub_field('url'); ?>" target="_blank"></a>
            <?php endwhile; ?> 

          </p>
        <?php endif; ?>
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
        <a href="<?php echo site_url().'/blog'; ?>">back to all posts</a>
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
    <h2 class="popularPosts-title h3">new on the blog</h2>
  </div>
  <div class="row row--lg inline">

  <?php 
    $recent_posts = wp_get_recent_posts(array('numberposts' => 2, 'post_status' => 'publish'));

    foreach ($recent_posts as $post) { ?>

      <div class="block s1 lg_s12">
        <a href="<?php echo get_permalink($post['ID']); ?>"><h3 class="post-title"><?php echo $post['post_title']; ?></h3></a>
        <p class="post-desc"><?php echo $post['post_excerpt']; ?></p>
        <h5 class="post-byline"><?php echo '<strong>'.get_the_date( __('m.d.Y'), $post['ID']).'</strong> by '.get_the_author_meta('display_name', $post['post_author']); ?></h5>
      </div>

  <?php } ?>

  </div>
</section>

<?php get_footer('secondary'); ?>
