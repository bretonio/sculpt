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

  <?php } wp_reset_postdata(); ?>

  </div>
</section>
