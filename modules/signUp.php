<?php 
	$layout = get_sub_field('signUp_layout');
	$color = get_sub_field('signUp_color');
	$bg_img = get_sub_field('signUp_bg_image');

	$title = get_sub_field('signUp_title');
	$body = get_sub_field('signUp_body');

	$cta = get_sub_field('signUp_cta');
	$mce_url = get_sub_field('signUp_mce_url');
?>

<?php if ($layout == 'signUp--small') { ?>
	<section class="signUp<?php echo ' '.$layout; ?> container pad--sm<?php echo ' '.$color; ?>">
		<div class="row row--lg">
			<h3 class="signUp-title"><?php echo $title; ?></h3>

			<form data-success="<?php the_field('newsletter_success', 'option'); ?>" data-error="<?php the_field('newsletter_error', 'option'); ?>" class="signUp-form validate" action="<?php echo $mce_url; ?>" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
				<div class="inputGroup mc-field-group">
					<!-- <label for="mce-EMAIL">your email</label> -->
					<input type="email" value="" name="EMAIL" class="signUp-input required email" id="mce-EMAIL" placeholder="your email">
					<button type="submit" class="signUp-submit icon-arrow" name="subscribe" id="mc-embedded-subscribe"></button>
				</div>
				
				<!-- real people should not fill this in and expect good things -->
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_b27ba410d303e0a239c8ba8e5_3568ace95e" tabindex="-1" value=""></div>

				<div id="mce-responses" class="signUp-responses clear">
					<div class="signUp-response response" id="mce-error-response" style="display:none"></div>
					<div class="signUp-response response" id="mce-success-response" style="display:none"></div>
				</div>
			</form>

		</div>
	</section>

<?php } elseif ($layout == 'signUp--large') { ?>
	<section class="signUp<?php echo ' '.$layout; ?>  container pad--xl<?php echo ' '.$color; ?>">
		<div class="row row--lg">
			<h1 class="signUp-title"><?php echo $title; ?></h1>
			<h2 class="signUp-body"><?php echo $body; ?></h2>

			<form data-success="<?php the_field('newsletter_success', 'option'); ?>" data-error="<?php the_field('newsletter_error', 'option'); ?>" class="signUp-form validate" action="<?php echo $mce_url; ?>" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
				<div class="inputGroup mc-field-group">
					<!-- <label for="mce-EMAIL">your email</label> -->
					<input type="email" value="" name="EMAIL" class="signUp-input required email" id="mce-EMAIL" placeholder="your email">
					<button type="submit" class="signUp-submit" name="subscribe" id="mc-embedded-subscribe">
						<?php echo $cta; ?>
					</button>
				</div>

				<!-- real people should not fill this in and expect good things -->
				<div style="position: absolute; left: -5000px;"><input type="text" name="b_b27ba410d303e0a239c8ba8e5_3568ace95e" tabindex="-1" value=""></div>

				<div id="mce-responses" class="signUp-responses clear">
					<div class="signUp-response response" id="mce-error-response"></div>
					<div class="signUp-response response" id="mce-success-response"></div>
				</div>
			</form>

		</div>
	</section>
<?php } ?>
<script src="<?php bloginfo('template_url'); ?>/js/inc/mc-validate.js"></script>
<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<!-- 
<script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-1B4AH0I.sharpspring.com/webforms/receivePostback/MzI2MAcA/']);
    __ss_noform.push(['endpoint', '90e60f21-bf5d-4ad5-ac43-415c433af061']);
</script>
<script type="text/javascript" src="https://koi-1B4AH0I.sharpspring.com/client/noform.js?ver=1.0" ></script> -->