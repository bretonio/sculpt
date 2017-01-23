<?php

namespace component;

function Hero($props){
  $layout = $props['hero_layout'];

  if (!$layout) {
    echo 'No layout passed';
  }

  $color = $props['hero_color'];
  $img = $props['hero_bg_img'];
  $bg_img = $img ? 'background-image: url('.$img['sizes']['high_res'].');' : '';

  $content_enabled = $props['hero_content_enabled'];
  $title = $props['hero_title'];
  $body = $props['hero_body'];

  $cta_enabled = $props['hero_cta_enabled'];
  $cta = $props['hero_cta'];
  $cta_url = $props['hero_cta_url'];
  $cta_ext = $props['cta_is_external'];

  /*
   * The hero type and size
   */
  if ($layout == 'hero_primary') {
    $hero_size = 'u-h_s1';
  } elseif ($layout == 'hero_tertiary') {
    $hero_size = 'u-h_s12';
  } elseif ($layout == 'hero_secondary') {
    $hero_size = 'u-h_s23';
  }

  $hero_primary = $layout == 'hero_primary' || $layout == 'hero_secondary';

  return h('section')([
    'class' => \lib\classname(['container hero', $hero_size, $color]),
    'style' => $bg_img,
  ])(
    h('div')(['class' => 'row row--lg'])(
      $content_enabled ? (
        h('div')(['class' => 'hero-content block s1 xs_s34'])([
          h('h1')([
            'class' => \lib\classname(['hero-title', $hero_primary ? 'h0' : '']),
          ])($title),
          h('h2')(['class' => 'hero-body'])($body),
          \component\Button($cta, [
            'url' => $cta_url,
            'class' => 'hero-cta'
          ])
        ])
      ) : (
        null
      )
    )
  );
}
