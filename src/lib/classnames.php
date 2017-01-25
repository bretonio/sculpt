<?php

namespace Lib;

function classname(){
  $names = func_get_args();
  $names = gettype($names[0]) === 'array' ? $names[0] : $names;

  if (!$names || gettype($names) !== 'array') {
    return '';
  }

  return array_reduce($names, function($res, $name){
    $res .= $name ? ' '.$name : '';
    return $res;
  });
}
