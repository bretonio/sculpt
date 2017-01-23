<?php

namespace lib;

function classname($props){
  $res = '';

  if (!$props || gettype($props) !== 'array') {
    return '';
  }

  foreach($props as $prop){
    if ($prop) {
      $res .= ' '.$prop;
    }
  }

  return $res;
}
