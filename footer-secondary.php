	<section class="footContact container pad--sm">
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

						<a class="icon-<?php the_sub_field('social_network'); ?> footer-social-link" href="<?php the_sub_field('social_url'); ?>"></a>

					<?php endwhile; 
				endif; ?>
			</div>
		</div>
	</section>

	<footer class="footer container">
		<div class="footer-row-one row">
			<div class="block s1 lg_s23">
				<div class="footer-location row inline">
					<div class="footer-location-left block s1 sm_s12">
						<p><strong>Sculpt</strong><br/>
						316 East Court Street, Ste. 2<br/>
						Iowa City, IA 52240
						</p>
					</div>
					<div class="footer-location-right block s1 sm_s12">
						<a href="tel:7077285780"><p><strong>707.728.5780</strong></p></a>
						<a href="mailto:social@wearesculpt.com"><p><strong>social@wearesculpt.com</strong></p></a>
					</div>
				</div>
			</div>
			<div class="footer-social-links block s1 lg_s13">
				<a class="icon-facebook footer-social-link" href="http://facebook.com/wearesculpt"></a>
				<a class="icon-twitter footer-social-link" href="http://twitter.com/wearesculpt"></a>
				<a class="icon-instagram footer-social-link" href="http://instagram.com/wearesculpt"></a>
				<a class="icon-pinterest footer-social-link" href="http://pinterest.com/wearesculpt"></a>
				<a class="icon-linkedin footer-social-link" href="https://www.linkedin.com/company/sculpt-llc"></a>
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
