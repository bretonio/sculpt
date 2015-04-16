<?php 
	$color = get_sub_field('rte_color');
	$content = get_sub_field('rte_content');
?>

<section class="rte container pad--med<?php echo ' '.$color; ?>">
	<div class="row row--sm">
		<?php echo apply_filters('the_content', $content); ?>
	</div>
</section>