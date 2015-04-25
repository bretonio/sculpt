<!-- popular posts module -->
<section class="popularPosts container pad--sm">
  <div class="row row--lg inline">
    <h3 class="popularPosts-title">on the blog</h3>
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

  <?php endwhile; wp_reset_query(); ?>

  </div>
</section>