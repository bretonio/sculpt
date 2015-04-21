<?php
	$layout = get_sub_field('hero_layout');
	$color = get_sub_field('hero_color');
	$bg_img = get_sub_field('hero_bg_img');
	
	$content_enabled = get_sub_field('hero_content_enabled');
	$title = get_sub_field('hero_title');
	$body = get_sub_field('hero_body');

	$cta_enabled = get_sub_field('hero_cta_enabled');
	$cta = get_sub_field('hero_cta');
	$cta_url = get_sub_field('hero_cta_url');

	/*
	 * The hero type and size
	 */
	if ($layout == 'hero_primary') {
		$hero_size = 'u-h_s1';
	} elseif ($layout == 'hero_tertiary') {
		$hero_size = 'u-h_s12';
	} elseif ($layout == 'hero_secondary') {
		$hero_size = 'u-h_s23';
	}
?>

<section class="container hero<?php echo ' '.$hero_size; ?><?php echo ' '.$color; ?>" style="background-image: url('<?php echo $bg_img['sizes']['high_res']; ?>');">
	<div class="row row--lg">

	  <?php if($content_enabled == true) { ?>
	  	<div class="hero-content block s1 xl_s34">
		  	<?php if($layout == 'hero_primary' || $layout == 'hero_secondary') { ?>
		    	<h1 class="h0 hero-title"><?php echo $title; ?></h1>
		    	<h2 class="hero-body"><?php echo $body; ?></h2>
		    <?php } elseif ($layout == 'hero_tertiary') { ?>
		    	<h1 class="hero-title"><?php echo $title; ?></h1>
		    	<h4 class="hero-body"><?php echo $body; ?></h4>
		    <?php } ?>

		    <?php if ($cta_enabled == true) { ?>
				<a href="<?php echo $cta_url; ?>" class="button hero-cta">
					<span class="button-left"><?php echo $cta; ?></span>
					<span class="button-right icon-arrow"></span>
				</a>
			<?php } ?>
	  	</div>
	  <?php } ?>

  </div>
</section>