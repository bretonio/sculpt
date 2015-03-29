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

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link href="style.css" media="screen, projector, print" rel="stylesheet" type="text/css" />

        <!--    Fonts from TypeKit-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,800' rel='stylesheet' type='text/css'>

        <!--    FontAwesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sculpt' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'sculpt' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">







