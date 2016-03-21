<?php 
  // Get current post ID
  $postID = get_the_id();

  // Current Post:
  $img = get_field('sculptron_pic', false);
  $pos = get_field('sculptron_subtitle', false); 
?>

<div class="teamGrid-block block s1 sm_s12 xl_s13">
  <a href="<?php the_permalink(); ?>" class="teamGrid-block-img" style="background-image: url('<?php echo $img['sizes']['src']; ?>');"></a>
  <div class="teamGrid-block-caption">
    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    <span class="teamGrid-position"><?php echo $pos; ?></span>
    <span class="divider"></span>
  </div>
</div>
