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
				<?php if (have_rows('footer_social_links', 'options')):
					while (have_rows('footer_social_links', 'options')): the_row(); ?>

						<a class="icon-<?php the_sub_field('social_network'); ?> footer-social-link" href="http://<?php the_sub_field('social_url'); ?>" target="_blank"></a>

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
