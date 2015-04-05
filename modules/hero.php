<?php

/*
 * The hero type and size
 */
$hero_type = strtolower(get_sub_field('hero_type'));
if ($hero_type = 'full') {
	$hero_size = 'u-h_s1';
	$hero_big = 'hero-content-large';
} elseif ($hero_type = 'half') {
	$hero_size = 'u-h_s2';
} elseif ($hero_type = 'two thirds') {
	$hero_size = 'u-h_s23';
} elseif ($hero_type = 'cta') {
	$hero_size = 'u-h_s23';
	$hero_cta;
}

/*
 * Set background image/color.
 */
$hero_bg_img = get_sub_field('hero_bg_img');
$hero_bg_color = get_sub_field('hero_bg_color');

if ($hero_bg_img != '' && $hero_bg_color == '') {
	$hero_bg = 'background: url('.$hero_bg_img.');' ;
} elseif ($hero_bg_img == '' && $hero_bg_color != '') {
	$hero_bg = 'background: '.$hero_bg_color.';' ;
} else {
	$hero_bg = 'background: '.$hero_bg_color.' url('.$hero_bg_img.');' ;
}

/*
 * The text content.
 */
$hero_content = get_sub_field('hero_content');

?>

<section class="hero <?php echo $hero_size; ?>" style="<?php echo $hero_bg; ?>">
  
  <?php if(get_sub_field('hero_content')) { ?>
  	<div class="hero-content">
	  	<?php if($hero_type = 'full') { ?>
	    	<h1 class="h0"><?php the_sub_field('hero_title'); ?></h1>
	    <?php } elseif ($hero_type = 'half') { ?>
	    	<h1><?php the_sub_field('hero_title'); ?></h1>
	    <?php } elseif ($hero_type = 'two thirds') { ?>
	    	<h1 class="h0"><?php the_sub_field('hero_title'); ?></h1>
	    <?php } ?>
  	</div>
  <?php } ?>
</section>