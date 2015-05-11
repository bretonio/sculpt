<?php
	$layout = get_sub_field('photoModule_layout');

	$photo = get_sub_field('photoModule_img_1');
	$photo = $photo ? $photo['sizes']['high_res'] : '';

	$photo12 = get_sub_field('photoModule_img_12');
	$photo12 = $photo12 ? $photo12['sizes']['two_up'] : '';

	$photo22 = get_sub_field('photoModule_img_22');
	$photo22 = $photo22 ? $photo22['sizes']['two_up'] : '';

	$photo14 = get_sub_field('photoModule_img_14');
	$photo14 = $photo14 ? $photo14['sizes']['four_up'] : '';

	$photo24 = get_sub_field('photoModule_img_24');
	$photo24 = $photo24 ? $photo24['sizes']['four_up'] : '';

	$photo34 = get_sub_field('photoModule_img_34');
	$photo34 = $photo34 ? $photo34['sizes']['four_up'] : '';

	$photo44 = get_sub_field('photoModule_img_44');
	$photo44 = $photo44 ? $photo44['sizes']['four_up'] : '';


	if ($layout == 'single_large' || $layout == 'twoUp_large') {
		$size = 'photoModule--large';
	} else if ($layout == 'single_full') {
		$size = 'photoModule--full';
	} else if ($layout == 'single_small' || $layout == 'twoUp_small') {
		$size = 'h-photoModule--small';
	} else if ($layout == 'fourUp') {
		$size = '';
	}
?>

<section class="container photoModule<?php echo ' '.$size ?>">
	<div class="row">

		<?php if ($layout == 'single_full') { ?>
			<div class="block photoModule-photo s1 js-lazy" data-original="<?php echo $photo; ?>"><div class="loader"></div></div>
		<?php } elseif ($layout == 'single_large' || $layout == 'single_small') { ?>
			<div class="block photoModule-photo s1 js-lazy" data-original="<?php echo $photo; ?>"><div class="loader"></div></div>
		<?php } elseif ($layout == 'twoUp_large' || $layout == 'twoUp_small') { ?>
			<div class="block photoModule-photo s1 med_s12 js-lazy" data-original="<?php echo $photo12; ?>"><div class="loader"></div></div>
			<div class="block photoModule-photo s1 med_s12 js-lazy" data-original="<?php echo $photo22; ?>"><div class="loader"></div></div>
		<?php } elseif ($layout == 'fourUp') { ?>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14 js-lazy" data-original="<?php echo $photo14; ?>"><div class="loader"></div></div>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14 js-lazy" data-original="<?php echo $photo24; ?>"><div class="loader"></div></div>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14 js-lazy" data-original="<?php echo $photo34; ?>"><div class="loader"></div></div>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14 js-lazy" data-original="<?php echo $photo44; ?>"><div class="loader"></div></div>
		<?php } ?>
	</div>
</section>