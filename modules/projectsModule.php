<!-- POSTS LOOP -->
<section class="postGrid container">
  <div class="row">
    <?php 
      $projects = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 4, 'tag' => 'featured' ) ); 
      while ( $projects->have_posts() ) : $projects->the_post(); ?>

      <?php include( locate_template('partials/postGrid-block.php') ); ?>

    <?php endwhile; wp_reset_query();?>
  </div>
</section>