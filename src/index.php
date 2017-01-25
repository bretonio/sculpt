<?php

require('lib/h0.php');
require('lib/classnames.php');
require('lib/check.php');

require('components/index.php');

$theme = wp_get_theme();
$version = $theme->version;

function assets(){
  wp_enqueue_style('new',
    get_template_directory_uri().'/public/styles.css',
    $version
  );

  wp_enqueue_script('new',
    get_template_directory_uri().'/public/index.js',
    $theme_ver,
    true
  );
}

function init(){
  add_action('wp_enqueue_scripts', 'assets');
}

call_user_func('init');
