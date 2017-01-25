<?php

namespace Component;

function Outer($children){
  return h('section')(['class' => \lib\classname('outer', $props['class'])])($children);
}
