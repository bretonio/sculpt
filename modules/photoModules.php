<?php
	$layout = get_sub_field('photoModule_layout');
	$photo = get_sub_field('photoModule_img_1');
	$photo12 = get_sub_field('photoModule_img_12');
	$photo22 = get_sub_field('photoModule_img_22');
	$photo14 = get_sub_field('photoModule_img_14');
	$photo24 = get_sub_field('photoModule_img_24');
	$photo34 = get_sub_field('photoModule_img_34');
	$photo44 = get_sub_field('photoModule_img_44');

	if ($layout == 'single_large' || $layout == 'twoUp_large') {
		$size = 'photoModule--large';
	}
?>

<section class="container photoModule <?php echo $size ?>">
	<div class="row">

		<?php if ($layout == 'single_large' || $layout == 'single_small') { ?>
			<div class="block photoModule-photo s1" style="background-image: url('<?php echo $photo ?>');"></div>
		<?php } elseif ($layout == 'twoUp_large' || $layout == 'twoUp_small') { ?>
			<div class="block photoModule-photo s12" style="background-image: url('<?php echo $photo12 ?>');"></div>
			<div class="block photoModule-photo s12" style="background-image: url('<?php echo $photo22 ?>');"></div>
		<?php } elseif ($layout == 'fourUp') { ?>
			<div class="block photoModule-photo s12 med_s14" style="background-image: url('<?php echo $photo14 ?>');"></div>
			<div class="block photoModule-photo s12 med_s14" style="background-image: url('<?php echo $photo24 ?>');"></div>
			<div class="block photoModule-photo s12 med_s14" style="background-image: url('<?php echo $photo34 ?>');"></div>
			<div class="block photoModule-photo s12 med_s14" style="background-image: url('<?php echo $photo44 ?>');"></div>
		<?php } ?>
	</div>
</section>