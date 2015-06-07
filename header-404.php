<!DOCTYPE html>
<head>
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/favicon.png"/>

  <meta charset="UTF-8"/>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta name="author" content="Sculpt, LLC">
  <meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <meta name="keywords" content="social media, social, digital marketing, digital media, digital, media, creative services, design, graphic design, photography, videography, video, photo, photo/video, marketing, advertising"/>

  <?php 
    global $post;
    $img = get_field('featured_img', get_the_id($post));
    $og_img = $img['sizes']['two_up'];
  ?>
  <meta property="og:image" content="<?php echo $og_img; ?>" />

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!--[if lte IE 9]>
  <script src="<?php bloginfo('template_url'); ?>/inc/placeholder/placeholder.js"></script>
  <script>jQuery(function($){$('input, textarea').placeholder();});</script>
  <![endif]-->

  <!--    Fonts from TypeKit-->
  <script src="//use.typekit.net/hxi4ugl.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <!-- messy JS snippets for third-party software and analytics INCLUDING Google Analytics -->
  <?php include_once('partials/head_scripts.php'); ?>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <?php 
    include_once("assets/sculpt_logo.svg"); 
  ?>

  <div class="bodyOverlay"></div>

    <div class="mainLogo-mobile">
      <svg class="sculptMark" viewBox="0 0 100 100">
        <use xlink:href="#sculptMark--white"></use>
      </svg>
    </div>

    <header class="header-404 header container">

      <nav class="header-desktop-inner row">

        <div class="mainLogo">
          <h1>
            <a href="/">
              	Sculpt

	            <svg class="sculptLogo" viewBox="0 0 300 100">
                <use xlink:href="#sculptLogo--white"></use>
              </svg>
	            <svg class="sculptLogo-fallback" viewBox="0 0 300 100">
	              <use xlink:href="#sculptLogo"></use>
	            </svg>
            </a>
          </h1>
        </div>

      </nav>

    </header>







