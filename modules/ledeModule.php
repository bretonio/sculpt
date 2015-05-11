<?php
	$layout = get_sub_field('ledeModule_layout');
	$color = get_sub_field('ledeModule_color');
	$title = get_sub_field('ledeModule_title');
	$lede = get_sub_field('ledeModule_lede');
	$body = get_sub_field('ledeModule_body');
	$cta = get_sub_field('ledeModule_cta');
	$cta_text = get_sub_field('ledeModule_cta_text');
	$cta_url = get_sub_field('ledeModule_cta_url');
	$cta_ext = get_sub_field('cta_is_external');

	$col_1_title = get_sub_field('ledeModule_col_1_title');
	$col_2_title = get_sub_field('ledeModule_col_2_title');
	$col_3_title = get_sub_field('ledeModule_col_3_title');
	$col_4_title = get_sub_field('ledeModule_col_4_title');

	$col_1_url = get_sub_field('ledeModule_col_1_url');
	$col_2_url = get_sub_field('ledeModule_col_2_url');
	$col_3_url = get_sub_field('ledeModule_col_3_url');
	$col_4_url = get_sub_field('ledeModule_col_4_url');

	$col_1_body = get_sub_field('ledeModule_col_1_body');
	$col_2_body = get_sub_field('ledeModule_col_2_body');
	$col_3_body = get_sub_field('ledeModule_col_3_body');
	$col_4_body = get_sub_field('ledeModule_col_4_body');
?>

<section class="rte ledeModule container pad--lg<?php echo ' '.$color; ?>">
	<div class="row row--lg inline">
		<div class="block s1">

			<?php if ($title != '') { ?>
				<h3 class="ledeModule-title"><?php echo $title; ?></h3>
			<?php } ?>

			<h2 class="ledeModule-lede"><?php echo $lede; ?></h2>

			<?php if ($layout == 'lede_body') { ?>
				<div class="ledeModule-body">
					<?php echo apply_filters('the_content', $body); ?>
				</div>
		 	<?php } ?>

			<?php if ($cta == true) { ?>
				<a href="<?php echo $cta_url; ?>" class="button"<?php echo $cta_ext ? ' target="_blank"' : '' ; ?>>
					<span class="button-left"><?php echo $cta_text; ?></span>
					<span class="button-right icon-arrow"></span>
				</a>
			<?php } ?>

		</div>

	<!-- COLUMN 1 -->
	<?php if ($layout == 'lede_threeUp') { ?>
		<div class="textModule-block block s1 med_s13">
			<?php if ($col_1_url) { ?>
				<a href="<?php echo $col_1_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_1_title; ?></h3>
				</a>
			<?php } elseif ($col_1_title) { ?>
				<h3 class="textModule-title"><?php echo $col_1_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_1_body); ?>
		</div>
	<?php } elseif ($layout == 'lede_fourUp') { ?>
		<div class="textModule-block block s1 med_s12 xl_s14">
			<?php if ($col_1_url) { ?>
				<a href="<?php echo $col_1_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_1_title; ?></h3>
				</a>
			<?php } elseif ($col_1_title) { ?>
				<h3 class="textModule-title"><?php echo $col_1_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_1_body); ?>
		</div>
	<?php } elseif ($layout == 'lede_twoUp') { ?>
		<div class="textModule-block block s1 med_s12">
			<?php if ($col_1_url) { ?>
				<a href="<?php echo $col_1_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_1_title; ?></h3>
				</a>
			<?php } elseif ($col_1_title) { ?>
				<h3 class="textModule-title"><?php echo $col_1_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_1_body); ?>
		</div>
	<?php } ?>


	<!-- COLUMN 2 -->
	<?php if ($layout == 'lede_threeUp') { ?>
		<div class="textModule-block block s1 med_s13">
			<?php if ($col_2_url) { ?>
				<a href="<?php echo $col_2_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_2_title; ?></h3>
				</a>
			<?php } elseif ($col_2_title) { ?>
				<h3 class="textModule-title"><?php echo $col_2_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_2_body); ?>
		</div>
	<?php } elseif ($layout == 'lede_fourUp') { ?>
		<div class="textModule-block block s1 med_s12 xl_s14">
			<?php if ($col_2_url) { ?>
				<a href="<?php echo $col_2_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_2_title; ?></h3>
				</a>
			<?php } elseif ($col_2_title) { ?>
				<h3 class="textModule-title"><?php echo $col_2_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_2_body); ?>
		</div>
	<?php } elseif ($layout == 'lede_twoUp') { ?>
		<div class="textModule-block block s1 med_s12">
			<?php if ($col_2_url) { ?>
				<a href="<?php echo $col_2_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_2_title; ?></h3>
				</a>
			<?php } elseif ($col_2_title) { ?>
				<h3 class="textModule-title"><?php echo $col_2_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_2_body); ?>
		</div>
	<?php } ?>

	<!-- COLUMN 3 -->
	<?php if ($layout == 'lede_threeUp') { ?>
		<div class="textModule-block block s1 med_s13">
			<?php if ($col_3_url) { ?>
				<a href="<?php echo $col_3_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_3_title; ?></h3>
				</a>
			<?php } elseif ($col_3_title) { ?>
				<h3 class="textModule-title"><?php echo $col_3_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_3_body); ?>
		</div>
	<?php } elseif ($layout == 'lede_fourUp') { ?>
		<div class="textModule-block block s1 med_s12 xl_s14">
			<?php if ($col_3_url) { ?>
				<a href="<?php echo $col_3_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_3_title; ?></h3>
				</a>
			<?php } elseif ($col_3_title) { ?>
				<h3 class="textModule-title"><?php echo $col_3_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_3_body); ?>
		</div>
	<?php } ?>

	<!-- COLUMN 4 -->
	<?php if ($layout == 'lede_fourUp') { ?>
		<div class="textModule-block block s1 med_s12 xl_s14">
			<?php if ($col_4_url) { ?>
				<a href="<?php echo $col_4_url; ?>" class="textModule-block-link">
					<h3 class="textModule-title"><?php echo $col_4_title; ?></h3>
				</a>
			<?php } elseif ($col_4_title) { ?>
				<h3 class="textModule-title"><?php echo $col_4_title; ?></h3>
			<?php } ?>
			<?php echo apply_filters('the_content', $col_4_body); ?>
		</div>
	<?php } ?>

	</div>
</section>