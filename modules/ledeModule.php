<?php
	$type = get_sub_field('ledeModule_type');
	$bg = get_sub_field('ledeModule_bg_color');
	$title = get_sub_field('ledeModule_title');
	$lede = get_sub_field('ledeModule_lede');
	$body = get_sub_field('ledeModule_body');
	$cta = get_sub_field('ledeModule_cta');
	$cta_text = get_sub_field('ledeModule_cta_text');
	$cta_url = get_sub_field('ledeModule_cta_url');
?>

<section class="container ledeModule" style="background-color:<?php echo $bg; ?>">
	<div class="row row--lg">
		<div class="block s1 xl_s34">

			<h3 class="ledeModule-title"><?php echo $title; ?></h3>

			<h2><?php echo $lede; ?></h2>

			<?php if ($type == 'lede_body') { ?>
				<h2><?php echo $body; ?></h2>
			<?php } ?>

			<?php if ($cta == true) { ?>
				<a href="<?php echo $cta_url; ?>" class="button">
					<span class="button-left"><?php echo $cta_text; ?></span>
					<span class="button-right icon-arrow"></span>
				</a>
			<?php } ?>

		</div>
	</div>
</section>