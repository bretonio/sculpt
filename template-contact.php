<?php
/*
Template Name: Contact Template
*/

  $title = get_field('contact_title');
  $lede = get_field('contact_lede');

  get_header();
?>

<!-- HERO SECTION -->
<section class="workPage container hero u-h_s12">
  <div class="row row--lg">

      <div class="hero-content block s1 xl_s34">
          <h1 class="hero-title"><?php echo $title; ?></h1>
          <h2 class="hero-body"><?php echo $lede; ?></h2>
      </div>

  </div>
</section>

<section class="contactForm-container container pad--lg">
  <div class="row row--med">
    <?php gravity_form( 'contact', false);?>

    <script type="text/javascript">
        var __ss_noform = __ss_noform || [];
        __ss_noform.push(['baseURI', 'https://app-1B4AH0I.sharpspring.com/webforms/receivePostback/MzI2MAcA/']);
        __ss_noform.push(['endpoint', '6ab7c28b-afba-43e8-929a-468cc10d5973']);
    </script>
    <script type="text/javascript" src="https://koi-1B4AH0I.sharpspring.com/client/noform.js?ver=1.0" ></script>
  </div>
</section>

<section class="map container">
  <div class="map-inner">
    <iframe width='100%' height='100%' frameBorder='0' src='https://a.tiles.mapbox.com/v4/estrattonbailey.b04f7265/attribution,zoompan,geocoder.html?access_token=pk.eyJ1IjoiZXN0cmF0dG9uYmFpbGV5IiwiYSI6InZHR0N3ZG8ifQ.pOtxEq--rRcb86-_j3xiAg'></iframe>
  </div>
</section>


<!-- PAGE MODULES -->
<?php
while ( have_posts() ) { the_post();

  // Check if ACF is enabled and the modules field exists
  if ( function_exists('get_field') && get_field('modules') !== null ) {

    // Loop through rows of flexible content field
    while( the_flexible_field('modules') ) {

      // Render module template based on the row layout's name
      $module_name = str_replace('_', '-', get_row_layout());
      // Use "include(locate_template(...))" instead of "get_template_part" to retain scope
      include( locate_template( "/modules/$module_name.php" ) );

      

    }

  } else {

    // Standard post content
    the_title('<h1>', '</h1>');
    the_content();

  }

}
?>

<?php get_footer(); ?>