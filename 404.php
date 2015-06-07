<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sculpt
 */

get_header('404'); ?>

<section class="fourOhFour container" style="background-image: url('<?php the_field('404_background_placeholder', 'option'); ?>');">
	<div class="fourOhFour-img" style="background-image: url('<?php the_field('404_background', 'option'); ?>');"></div>
	<div class="fourOhFour-inner row row--lg">
		<h1><?php the_field('404_title', 'option'); ?></h1>
		<h2><?php the_field('404_copy', 'option'); ?></h2>
		<a href="<?php echo site_url(); ?>" class="button" onClick="history.go(-1);return true;">
			<span class="backArrow button-right icon-arrow"></span>
			<span class="button-left"><?php the_field('404_cta', 'option'); ?></span>
		</a>
	</div>
</section>

<?php get_footer('404'); ?>
