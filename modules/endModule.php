<?php
	$size = get_sub_field('endModule_size'); 
	$color = get_sub_field('endModule_color');
	$extra = get_sub_field('endModule_extra');

	$content = get_sub_field('endModule_content');

	$cta = get_sub_field('endModule_cta');
	$cta_url = get_sub_field('endModule_cta_url');
	$cta_ext = get_sub_field('cta_is_external');

	$links = get_sub_field('endModule_links');
	$links_head = get_sub_field('endModule_links_heading');

	$link = get_sub_field('endModule_link_url');
	$link_text = get_sub_field('endModule_link_text');
	$link_icon = get_sub_field('endModule_link_icon');
?>

<section class="endModule container<?php echo $size == 'endModule--large' ? ' pad--xl' : ' pad--lg'; echo ' '.$color; ?>">
	<div class="row row--lg">
		<span class="endModule-content">
			<?php echo apply_filters('the_content', $content); ?>
		</span>

		<?php if ($extra[0] == 'cta') { ?>
			<a href="<?php echo $cta_url; ?>" class="endModule-cta button" <?php echo $cta_ext ? ' target="_blank"' : '' ; ?>>
				<span class="button-left"><?php echo $cta; ?></span>
				<span class="button-right icon-arrow"></span>
			</a>
		<?php } ?>


		<?php if ($extra[0] == 'links' || $extra[1] == 'links') { ?>
			<?php if ( have_rows('endModule_links') ): ?>

				<h3 class="endModule-links-heading"><?php echo $links_head; ?></h3>

				<?php while ( have_rows('endModule_links') ): the_row(); ?>

					<a class="button--alt" href="http://<?php the_sub_field('endModule_link_url'); ?>" target="_blank">
						<span class="button--alt-icon icon-<?php the_sub_field('endModule_link_icon'); ?>"></span>
						<span class="button--alt-text">
							<?php the_sub_field('endModule_link_text'); ?>
						</span>
					</a>

			<?php endwhile; endif; ?>
		<?php } ?>


	</div>
</section>