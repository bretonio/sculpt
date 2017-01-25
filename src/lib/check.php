<?php

namespace Lib;

function check($bool){
  return $bool ? function($cb){ return $cb; } : function(){ return null; };
}
