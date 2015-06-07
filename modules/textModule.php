<?php
	$layout = get_sub_field('textModule_layout');
	$img_pos = get_sub_field('textModule_img_pos');
	$color = get_sub_field('textModule_color');
	$text_color = get_sub_field('textModule_text_color');

	$col_1_img = get_sub_field('textModule_col_1_img');
	$col_2_img = get_sub_field('textModule_col_2_img');

	$col_1_title = get_sub_field('textModule_col_1_title');
	$col_2_title = get_sub_field('textModule_col_2_title');
	$col_3_title = get_sub_field('textModule_col_3_title');
	$col_4_title = get_sub_field('textModule_col_4_title');

	$col_1_url = get_sub_field('textModule_col_1_url');
	$col_2_url = get_sub_field('textModule_col_2_url');
	$col_3_url = get_sub_field('textModule_col_3_url');
	$col_4_url = get_sub_field('textModule_col_4_url');

	$col_1_body = get_sub_field('textModule_col_1_body');
	$col_2_body = get_sub_field('textModule_col_2_body');
	$col_3_body = get_sub_field('textModule_col_3_body');
	$col_4_body = get_sub_field('textModule_col_4_body');
?>

<section class="rte textModule container pad--sm<?php echo ' '.$color; echo $layout == 'twoUp_img' ? ' has-image' : '' ; ?>">
	<div class="row row--lg inline">

	<?php if ($layout == 'twoUp_img' && $img_pos == 'textModule_img_left') { ?>
		<div class="textModule-block block s1 med_s12">
			<img src="<?php echo $col_1_img; ?>" class="textModule-img" alt="image">
		</div>
	<?php } elseif ($layout == 'threeUp') { ?>
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
	<?php } elseif ($layout == 'fourUp') { ?>
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
	<?php } else { ?>
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
	<?php if ($layout == 'twoUp_img' && $img_pos == 'textModule_img_right') { ?>
		<div class="textModule-block block s1 med_s12">
			<img src="<?php echo $col_2_img; ?>" class="textModule-img" alt="image">
		</div>
	<?php } elseif ($layout == 'threeUp') { ?>
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
	<?php } elseif ($layout == 'fourUp') { ?>
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
	<?php } elseif ($col_2_body) { ?>
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
	<?php if ($layout == 'threeUp') { ?>
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
	<?php } elseif ($layout == 'fourUp') { ?>
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
	<?php if ($layout == 'fourUp') { ?>
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