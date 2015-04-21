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
			<div class="block photoModule-photo s1" style="background-image: url('<?php echo $photo[sizes][src] ?>');"></div>
		<?php } elseif ($layout == 'single_large' || $layout == 'single_small') { ?>
			<div class="block photoModule-photo s1" style="background-image: url('<?php echo $photo[sizes][src]  ?>');"></div>
		<?php } elseif ($layout == 'twoUp_large' || $layout == 'twoUp_small') { ?>
			<div class="block photoModule-photo s1 med_s12" style="background-image: url('<?php echo $photo12[sizes][two_up] ?>');"></div>
			<div class="block photoModule-photo s1 med_s12" style="background-image: url('<?php echo $photo22[sizes][two_up] ?>');"></div>
		<?php } elseif ($layout == 'fourUp') { ?>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14" style="background-image: url('<?php echo $photo14[sizes][four_up] ?>');"></div>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14" style="background-image: url('<?php echo $photo24[sizes][four_up] ?>');"></div>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14" style="background-image: url('<?php echo $photo34[sizes][four_up] ?>');"></div>
			<div class="block photoModule-photo photoModule-fourUp s12 lg_s14" style="background-image: url('<?php echo $photo44[sizes][four_up] ?>');"></div>
		<?php } ?>
	</div>
</section>