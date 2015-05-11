<!DOCTYPE html>
<head>
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.png"/>

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

  <script type="text/javascript">(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
      var fbds = document.createElement('script');
      fbds.async = true;
      fbds.src = '//connect.facebook.net/en_US/fbds.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(fbds, s);
      _fbq.loaded = true;
    }
    _fbq.push(['addPixelId', '446026215541124']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
  </script>
  <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=446026215541124&amp;ev=PixelInitialized" /></noscript>

  <script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-1B4AH0I.sharpspring.com/net']);
    _ss.push(['_setAccount', 'KOI-1LYC7MY']);
    _ss.push(['_trackPageView']);
    (function() {
        var ss = document.createElement('script');
        ss.type = 'text/javascript'; ss.async = true;
        ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-1B4AH0I.sharpspring.com/client/ss.js?ver=1.1.1';
        var scr = document.getElementsByTagName('script')[0];
        scr.parentNode.insertBefore(ss, scr);
    })();
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-29264598-1', 'auto');
    ga('send', 'pageview');
  </script>

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







