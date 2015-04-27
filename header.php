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
    $logo = get_field('logo_params');
    $menu_color = get_field('menu_color');
    $menu_slug = get_field('menu_slug');
  ?>

  <div class="bodyOverlay"></div>

  <div class="navContainer">
    <div class="navContainer-scroll">
      <div class="js-menuToggle menuClose">
        <span class="icon-close"></span>
      </div>

      <nav class="mainNav">
        <?php
          $menu = array( 'menu' => 'offcanvas', 'container' => '', 'items_wrap' => '%3$s');

          wp_nav_menu( $menu ); 
        ?>
      </nav>
    </div>
  </div>

  <div class="body-wrapper">

    <div class="mainLogo-mobile">
      <?php if ($logo == 'sculptLogo--light' || $logo == 'sculptLogo--white') { ?>
        <svg class="sculptMark" viewBox="0 0 100 100">
          <use xlink:href="#sculptMark--white"></use>
        </svg>
      <?php } elseif ($logo == 'sculptLogo--orange' || $logo == 'sculptLogo') { ?>
        <svg class="sculptMark" viewBox="0 0 100 100">
          <use xlink:href="#sculptMark--orange"></use>
        </svg>
      <?php } else { ?>
        <svg class="sculptMark" viewBox="0 0 100 100">
          <use xlink:href="#sculptMark--orange"></use>
        </svg>
      <?php } ?>
    </div>

    <header class="header container">

      <nav class="header-desktop-inner<?php echo ' '.$menu_color; ?> row">

        <div class="mainLogo">
          <h1>
            <a href="/">
              Sculpt

              <?php if ($logo == 'sculptLogo--light') { ?>
                <svg class="sculptLogo" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo--light"></use>
                </svg>
                <svg class="sculptLogo-fallback" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo"></use>
                </svg>
              <?php } elseif ($logo == 'sculptLogo--white') { ?>
                <svg class="sculptLogo" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo--white"></use>
                </svg>
                <svg class="sculptLogo-fallback" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo"></use>
                </svg>
              <?php } elseif ($logo == 'sculptLogo--orange') { ?>
                <svg class="sculptLogo" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo--orange"></use>
                </svg>
                <svg class="sculptLogo-fallback" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo"></use>
                </svg>
              <?php } elseif ($logo == 'sculptLogo') { ?>
                <!-- default -->
                <svg class="sculptLogo" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo"></use>
                </svg>
                <svg class="sculptLogo-fallback" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo"></use>
                </svg>
              <?php } else { ?>
                <!-- default -->
                <svg class="sculptLogo" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo"></use>
                </svg>
                <svg class="sculptLogo-fallback" viewBox="0 0 300 100">
                  <use xlink:href="#sculptLogo"></use>
                </svg>
              <?php } ?>
            </a>
          </h1>
        </div>

        <?php
          if (is_front_page()) {
            $menu = array( 'theme_location' => 'homepage', 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          } elseif (is_page_template( 'template-about.php' )) {
            $menu = array( 'theme_location' => 'about', 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          } elseif (is_page_template( 'template-work.php' )) {
            $menu = array( 'theme_location' => 'work', 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          } elseif (is_page_template( 'template-contact.php' )) {
            $menu = array( 'theme_location' => 'contact', 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          } elseif (is_page_template( 'single-post.php' )) {
            $menu = array( 'theme_location' => 'post', 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          } elseif (is_page_template( 'single-project.php' )) {
            $menu = array( 'theme_location' => 'project', 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          } elseif (is_page_template( 'single-team.php' )) {
            $menu = array( 'theme_location' => 'team', 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          } else {
            $menu = array( 'menu' => $menu_slug, 'container' => '', 'items_wrap' => '%3$s', 'depth' => 0);
              wp_nav_menu( $menu ); 
          }
        ?>

        <li class="js-menuToggle menuToggle">
          <span class="icon-menu"></span>
        </li>

      </nav>

    </header>







