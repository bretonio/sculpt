<?php
/*
Template Name: Blog Template
*/

  get_header();
?>

<!-- HERO SECTION -->
<section class="blogListing blogPage container">

  <?php 
    // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // $posts = new WP_Query( array( 'posts_per_page' => 5, 'post_type' => 'post' ));

    while ( have_posts() ): the_post();

      $author = get_the_author_meta( 'display_name' );
      $date = get_the_date( __('m.d.Y'));
      $excerpt = get_the_excerpt(); 

      if (get_field('blog_feat_img')){
        $img = get_field('blog_feat_img');
        $img_url = 'style="background-image: url(\''.$img['sizes']['high_res'].'\')"';
      } else {
        $img = false;
        $img_url = false;
      }
      ?>

      <div class="post pad--lg<?php echo $img != false ? ' has-feat_img' : '' ; ?>">
        <div class="post-img" <?php echo $img_url; ?>></div>
        <div class="post-overlay"></div>
        <div class="row row--med">
          <div class="block s1">
              <h5 class="blog-date">Posted <?php echo $date.' by '.$author; ?></h5>
              <a href="<?php the_permalink(); ?>"><h1 class="h0 blog-title"><?php the_title(); ?></h1></a>
              <h2 class="blog-lede"><?php echo strip_tags($excerpt); ?></h2>
          </div>
        </div>
      </div>

  <?php endwhile; wp_reset_postdata();?>
</section>
<!-- end blog listing -->


<section class="postNav container">
  <div class="row">
    <div class="prevPost block s12">
      <?php previous_posts_link('<span class="icon-arrow"></span>'); ?>
    </div>
    <div class="nextPost block s12">
      <?php next_posts_link('<span class="icon-arrow"></span>'); ?>
    </div>
  </div>
</section>


<!-- popular posts module -->
<section class="popularPosts container pad--sm">
  <div class="row row--lg inline">
    <h3 class="popularPosts-title">popular posts</h3>
  </div>
  <div class="row row--lg inline">

  <?php 
    $popPost = new WP_Query( array( 'posts_per_page' => 2, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

    while ( $popPost->have_posts() ): $popPost->the_post(); 

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