<?php
	// $post_id = $post->ID;
	// $post_title = get_field('hero_title', $post_id);

	$type = get_sub_field('featuredPost_type');
	$blog = get_sub_field('featuredPost_blog');
	$project = get_sub_field('featuredPost_project');

	if ($type == 'blog') {
		$post = $blog;
		$title = 'read this next';
		$link_url = site_url().'/blog';
		$link = 'see all blog posts';
	} elseif ($type == 'project') {
		$post = $project;
		$title = 'next project';
		$link_url = site_url().'/work';
		$link = 'see all projects';
	}
	setup_postdata($post);

	$post_id = $post->ID;
	$img = get_field('featured_img', $post_id);
?>

<section class="featPost container" style="<?php echo 'background-image: url('.$img['sizes']['src'].');' ?>">
		<div class="featPost-footLink">
			<div class="row row--lg">
				<a class="footLink-link" href="<?php echo $link_url ?>"><?php echo $link; ?></a>
			</div>
		</div>
		<a href="<?php the_permalink(); ?>">
			<div class="featPost-inner">
				<div class="featPost-overlay"></div>
				<div class="row row--lg">
					<h4><?php echo $title ?></h4>
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</a>
</section>

<?php wp_reset_postdata(); ?>