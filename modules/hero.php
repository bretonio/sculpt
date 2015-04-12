<?php
	$hero_type = get_sub_field('hero_type');
	$hero_bg_img = get_sub_field('hero_bg_img');
	$hero_bg_color = get_sub_field('hero_bg_color');
	$hero_content = get_sub_field('hero_content');
	$hero_content_color = get_sub_field('hero_content_color');

	/*
	 * The hero type and size
	 */
	if ($hero_type == 'primary') {
		$hero_size = 'u-h_s1';
		$hero_big = 'hero-content-large';
	} elseif ($hero_type == 'tertiary') {
		$hero_size = 'u-h_s2';
	} elseif ($hero_type == 'secondary') {
		$hero_size = 'u-h_s23';
	} elseif ($hero_type == 'cta') {
		$hero_size = 'u-h_s23';
		$hero_cta;
	}

	/*
	 * Set background image/color.
	 */
	if ($hero_bg_img != '' && $hero_bg_color == '') {
		$hero_bg = 'background-image: url('.$hero_bg_img.');' ;
	} elseif ($hero_bg_img == '' && $hero_bg_color != '') {
		$hero_bg = 'background-color: '.$hero_bg_color.';' ;
	} else {
		$hero_bg = 'background-color: '.$hero_bg_color.';background-image:  url('.$hero_bg_img.');' ;
	}
?>

<section class="container hero<?php echo ' '.$hero_size; ?>" style="<?php echo $hero_bg; ?>">
	<div class="row row--lg">
	  <?php if($hero_content != '') { ?>
	  	<div class="hero-content block s1 xl_s34<?php echo ' '.$hero_content_color; ?>">
		  	<?php if($hero_type == 'primary') { ?>
		    	<h1 class="h0"><?php the_sub_field('hero_title'); ?></h1>
		    <?php } elseif ($hero_type == 'tertiary') { ?>
		    	<h1><?php the_sub_field('hero_title'); ?></h1>
		    <?php } elseif ($hero_type == 'secondary') { ?>
		    	<h1 class="h0"><?php the_sub_field('hero_title'); ?></h1>
		    	<h2><?php the_sub_field('hero_copy'); ?></h2>
		    <?php } ?>
	  	</div>
	  <?php } ?>

	  <?php if ($cta == true) { ?>
		<a href="<?php echo $cta_url; ?>" class="button">
			<span class="button-left"><?php echo $cta_text; ?></span>
			<span class="button-right icon-arrow"></span>
		</a>
	<?php } ?>
  </div>
</section>