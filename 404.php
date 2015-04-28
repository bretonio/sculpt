<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package sculpt
 */

get_header('404'); ?>

<section class="fourOhFour container">
	<div class="fourOhFour-inner row row--lg">
		<h1>Congrats! You've reached the end of the internet!</h1>
		<h2>Oh shit, Shia LeBouf is here too!</h2>
		<a href="<?php echo site_url(); ?>" class="button">
			<span class="button-left">RUN AWAY</span>
			<span class="button-right icon-arrow"></span>
		</a>
	</div>
</section>

<?php get_footer('404'); ?>
