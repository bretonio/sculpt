<?php

namespace Component;

function Button($children, $props){
  return h('a')([
    'href' => $props['url'],
    'class' => \lib\classname('button', $props['class']),
    'target' => $props['target'] || '',
  ])([
    h('span')(['class' => 'button-left'])($children),
    h('span')(['class' => 'button-right icon-arrow'])(''),
  ]);
}
