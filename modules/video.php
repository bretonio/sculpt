<?php
	$layout = get_sub_field('video_layout');

	$video_1_id = get_sub_field('video_1_id');
	$video_1_id = $video_1_id ? $video_1_id : '';
	$video_1_img = get_sub_field('video_1_img');
	$video_1_img = $video_1_img ? $video_1_img['sizes']['high_res'] : '';

	$video_2_id = get_sub_field('video_2_id');
	$video_2_id = $video_2_id ? $video_2_id : '';
	$video_2_img = get_sub_field('video_2_img');
	$video_2_img = $video_2_img ? $video_2_img['sizes']['high_res'] : '';

	$video_3_id = get_sub_field('video_3_id');
	$video_3_id = $video_3_id ? $video_3_id : '';
	$video_3_img = get_sub_field('video_3_img');
	$video_3_img = $video_3_img ? $video_3_img['sizes']['high_res'] : '';

	$video_4_id = get_sub_field('video_4_id');
	$video_4_id = $video_4_id ? $video_4_id : '';
	$video_4_img = get_sub_field('video_4_img');
	$video_4_img = $video_4_img ? $video_4_img['sizes']['high_res'] : '';

	if ($layout == 'video_full') {
		$size = 'full';
	} else if ($layout == 'video_two_up') {
		$size = 'photoModule--full';
	} else if ($layout == 'video_three_up') {
		$size = 'h-photoModule--small';
	} else if ($layout == 'video_four_up') {
		$size = '';
	}
?>

<section class="container videoModule">
	<!-- Wistia API -->
	<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js"></script>

	<div class="row">

		<?php if ($layout == 'video_full') { ?>

			<div class="js-videoEmbed videoEmbed block s1" style="background-image: url('<?php echo $video_1_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_1_id; ?>" data-src="<?php echo $video_1_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

		<?php } else if ($layout == 'video_two_up') { ?>

			<div class="js-videoEmbed videoEmbed block s1 med_s12" style="background-image: url('<?php echo $video_1_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_1_id; ?>" data-src="<?php echo $video_1_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

			<div class="js-videoEmbed videoEmbed block s1 med_s12" style="background-image: url('<?php echo $video_2_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_2_id; ?>" data-src="<?php echo $video_2_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

		<?php } else if ($layout == 'video_three_up') { ?>

			<div class="js-videoEmbed videoEmbed block s1 lg_s13" style="background-image: url('<?php echo $video_1_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_1_id; ?>" data-src="<?php echo $video_1_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

			<div class="js-videoEmbed videoEmbed block s1 lg_s13" style="background-image: url('<?php echo $video_2_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_2_id; ?>" data-src="<?php echo $video_2_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

			<div class="js-videoEmbed videoEmbed block s1 lg_s13" style="background-image: url('<?php echo $video_3_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_3_id; ?>" data-src="<?php echo $video_3_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

		<?php } else if ($layout == 'video_four_up') { ?>

			<div class="js-videoEmbed videoEmbed block s1 med_s12 xl_s14" style="background-image: url('<?php echo $video_1_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_1_id; ?>" data-src="<?php echo $video_1_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

			<div class="js-videoEmbed videoEmbed block s1 med_s12 xl_s14" style="background-image: url('<?php echo $video_2_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_2_id; ?>" data-src="<?php echo $video_2_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

			<div class="js-videoEmbed videoEmbed block s1 med_s12 xl_s14" style="background-image: url('<?php echo $video_3_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_3_id; ?>" data-src="<?php echo $video_3_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

			<div class="js-videoEmbed videoEmbed block s1 med_s12 xl_s14" style="background-image: url('<?php echo $video_4_img; ?>');">
				<div class="js-video-play video-play"></div>
				<div class="js-player-container videoEmbed-inner">
					<div id="wistia_<?php echo $video_4_id; ?>" data-src="<?php echo $video_4_id; ?>" class="js-player video-player"></div>
				</div>
			</div>

		<?php } ?>

	</div>
</section>