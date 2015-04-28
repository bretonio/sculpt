<!DOCTYPE html>
<head>
  <link rel="icon" type="image/ico" href="assets/favicon.ico"/>

  <meta charset="UTF-8"/>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta name="author" content="Eric Bailey">
	<meta name="viewport" content="width=320, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta name="keywords" content="SASS, project template, SUIT CSS"/>
	<meta name="description" content="Basic starter templates SASS projects."/>

        <!-- Open Graph data -->
	<meta prefix="og: http://ogp.me/ns#" property="og:description" content="Basic starter templates SASS projects."/>
	<meta prefix="og: http://ogp.me/ns#" property="og:site_name" content="SVBSTRATE"/>
  <meta prefix="og: http://ogp.me/ns#" property="og:title" content="SVBSTRATE" />
  <meta prefix="og: http://ogp.me/ns#" property="og:image" content="http://svbstrate.io/resources/images/ogImg.png" />
  <meta prefix="og: http://ogp.me/ns#" property="og:url" content="http://svbstrate.io/" />

      <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="http://svbstrate.io">
  <meta name="twitter:title" content="SVBSTRATE">
  <meta name="twitter:description" content="Basic starter templates SASS projects.">
  <meta name="twitter:creator" content="@estrattonbailey">
  <meta name="twitter:image:src" content="http://svbstrate.io/resources/images/ogImg.png">

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

      <!--    Fonts from TypeKit-->
  <script src="//use.typekit.net/hxi4ugl.js" onload="try{Typekit.load();}catch(e){}" async></script>
    <!--[if IE 9]>
    <script>try{Typekit.load();}catch(e){}</script>
    <![endif]-->

  <title><?php wp_title('|','true','right'); ?></title>

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







