	<section class="footContact container pad--sm">
		<div class="row row--lg">
			<h2 class="footContact-title"><?php the_field('footer_secondary_copy', 'option'); ?></h2>

			<a href="<?php echo site_url().the_field('footer_secondary_copy', 'option'); ?>" class="button button--dark footContact-cta">
				<span class="button-left"><?php the_field('footer_secondary_cta', 'option'); ?></span>
				<span class="button-right icon-arrow"></span>
			</a>

		</div>
	</section>

	<footer class="footer container">
		<div class="footer-row-one row">
			<div class="block s1 lg_s23">
				<div class="footer-location row inline">
					<div class="footer-location-left block s1 sm_s12">
						<?php the_field('footer_address', 'option'); ?>
					</div>
					<div class="footer-location-right block s1 sm_s12">
						<?php the_field('footer_contact_info', 'option'); ?>
					</div>
				</div>
			</div>
			<div class="footer-social-links block s1 lg_s13">
				<?php if (have_rows('footer_social_links', 'option')):
					while (have_rows('footer_social_links', 'option')): the_row(); ?>

						<a class="icon-<?php the_sub_field('social_network'); ?> footer-social-link" href="<?php the_sub_field('social_url'); ?>" target="_blank"></a>

					<?php endwhile; 
				endif; ?>
			</div>
		</div>
		<nav class="footer-nav row inline">
			<?php
	          $menu = array( 'menu' => 'footer', 'container' => '', 'items_wrap' => '%3$s', 'depth' => -1);

	          wp_nav_menu( $menu ); 
	        ?>
		</nav>
		<div class="footer-colophon row">
			<h6>Made in Iowa</h6>
		</div>
	</footer>


	</div>
	<!-- end .body-wrapper -->
	<?php wp_footer(); ?>

</body>
</html>
