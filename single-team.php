<?php
/*
Template Name: Sculptron
*/

/*
User Field Type Returns

[ID]
[user_firstname]
[user_lastname]
[nickname]
[user_nicename]
[display_name]
[user_email]
[user_url]
[user_registered]
[user_description]
[user_avatar]

Image Returns


<?php echo get_avatar($user[ID], 512);?>
*/

	$user = get_field('sculptron_user');
	$name = get_field('sculptron_name');
	$subtitle = get_field('sculptron_subtitle');

	$pic = get_field('sculptron_pic');
	$pic_url = $pic['url'];

get_header();

?>

<section class="teamPage container hero u-h_s12">
	<div class="row row--lg">

	  	<div class="hero-content block s1 xl_s34">
	    	<h1 class="h0 hero-title"><?php echo $name; ?></h1>
	    	<h2 class="hero-body"><?php echo $subtitle; ?></h2>
	    	<div class="teamPage-social">
		    	<h3>Follow <?php the_title(); ?>:</h3>
	    		

	    		<?php if (have_rows('sculptron_links')):
						while (have_rows('sculptron_links')): the_row(); ?>

							<a class="icon-<?php the_sub_field('icon'); ?>" href="<?php the_sub_field('url'); ?>" target="_blank"></a>

						<?php endwhile; 
					endif; ?>

		    </div>
	  	</div>

  </div>
</section>



<?php
while ( have_posts() ): the_post();

  // Check if ACF is enabled and the modules field exists
  if ( function_exists('get_field') && get_field('modules') !== null ):

    // Loop through rows of flexible content field
    while( the_flexible_field('modules') ):

      // Render module template based on the row layout's name
      $module_name = str_replace('_', '-', get_row_layout());
      // Use "include(locate_template(...))" instead of "get_template_part" to retain scope
      include( locate_template( "/modules/$module_name.php" ) );

    endwhile;

  else:

    // Standard post content
    the_title('<h1>', '</h1>');
    the_content();

  endif; 

endwhile;

// "View All" Link
$viewAll = get_field('viewAll_team', 'option');
// $viewAll_classes = ''; // string of optional classnames
include( locate_template( "/partials/viewAll.php" ) );

get_footer('secondary'); ?>