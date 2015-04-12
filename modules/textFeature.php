<?php
	$color = get_sub_field('textFeature_color');
	$quote = get_sub_field('textFeature_quotation');
	$body = get_sub_field('textFeature_body');
	$by = get_sub_field('textFeature_byline');
?>

<section class="textFeature container pad--xl<?php echo ' '.$color; ?>">
	<div class="row row--lg inline">
		<div class="block s1 med_s23">
			<?php if ($quote == true) { ?>
				<span class="icon-quotation"></span>
				<div class="textFeature-body">
					<?php echo apply_filters('the_content', $body); ?>
				</div>
				<div class="textFeature-byline">
					<?php echo apply_filters('the_content', $by); ?>
				</div>
			<?php } else { ?>
				<div class="textFeature-body">
					<?php echo apply_filters('the_content', $body); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
