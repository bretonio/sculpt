<?php

namespace Component;

function Hero($props){
  extract($props);

  $largeTitle = $hero_layout == 'hero_primary' || $hero_layout == 'hero_secondary';
  $layout = str_replace('_', '--', $hero_layout);

  return \Component\Outer([
    'class' => \Lib\classname('hero flex fill-v u-bg-cv', $layout, $hero_color),
    'style' => "background-image: url({$hero_bg_img['sizes']['high_res']})",
  ])(
    \Lib\check($hero_content_enabled)(
      h('div')(['class' => 'flex-auto pb2 flex-align-bottom'])([

        h('h1')([
          'class' => \Lib\classname(['hero-title', $largeTitle ? 'h0' : '']),
        ])($hero_title),

        h('h2')(['class' => 'hero-body'])($hero_body),

        \Lib\check($hero_cta_enabled)(
          \Component\Button($hero_cta, [
            'url' => $hero_cta_url,
            'class' => 'hero-cta',
            'target' => $cta_is_external ? '_blank' : ''
          ])
        )
      ])
    )
  );
}
