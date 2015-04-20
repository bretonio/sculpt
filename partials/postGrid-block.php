<?php 
  // Get current post ID
  $postID = get_the_id();
  $postCats = get_the_category($postID);

  // Current Post:
  $img = get_field('featured_img', false); ?>

<div class="postGrid-block block s1 med_s12 xl_s14">
  <a href="<?php the_permalink(); ?>" class="postGrid-block-img" style="background-image: url('<?php echo $img[sizes][four_up]; ?>');"></a>
  <div class="postGrid-block-caption">
    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    <span class="postGrid-block-tags">
      <?php 
        $cats = array();
        $i = 1;

        foreach($postCats as $category) { 
          array_push($cats, $category->cat_name);

          if ($i++ == 3) break;
        } 

        $print = implode (', ', $cats); 

        echo $print;
      ?>
    </span>
    <span class="divider"></span>
  </div>
</div>