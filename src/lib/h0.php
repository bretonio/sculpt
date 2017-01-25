<?php

class h0 {
  static function attrs($props){
    $output = '';

    foreach($props as $attr => $val){
      $output .= $output."$attr='$val' ";
    }

    return $output;
  }

  public static function isArray($arg){
    return 'array' === gettype($arg);
  }

  public static function isProps( $arr ){
    $firstVal = array_values($arr)[0];

    return h0::isArray($arr) 
      && 'string' === gettype($firstVal)
      && !preg_match("/<\/|\/>/", $firstVal);
  }

  static function mergeProps($old, $new){
    $arr = [];

    foreach($old as $oldkey => $oldval){
      foreach($new as $newkey => $newval){
        if ($oldkey === $newkey){
          if ($oldkey === 'class' || $oldkey === 'style'){
            $arr[$oldkey] = $oldval.' '.$newval;
          } else {
            $arr[$oldkey] = $newval;
          }
        } else { $arr[$newkey] = $newval;
        }
      }
    }

    return $arr;
  }

  public static function createElement( $tag, $props = false ){
    return function( $args = '' ) use( $tag, $props ){
      if (h0::isArray($args) && h0::isProps($args)){
        $newArgs = h0::mergeProps($props, $args);

        return h0::createElement($tag, $newArgs);
      } else {
        $attrs = $props ? h0::attrs($props) : '';
        $children = '';

        if (h0::isArray($args)){
          foreach($args as $index => $child){
            $children .= $child;
          } 
        } else {
          $children = $args;
        }

        return "<{$tag} {$attrs}>{$children}</${tag}>";
      }
    };
  }

  public static function each( $arr, $cb ){
    return array_reduce($arr, function($children, $child) use($cb){
      $children .= $cb($child);
      return $children;
    }, '');
  }

  public static function open( $tag ){
    return function( $args ) use ( $tag ) {
      if (h0::isArray($args) && h0::isProps($args)) {
        return h0::createElement( $tag, $args );
      } else {
        return h0::createElement( $tag )( $args );
      }
    };
  }
}

function h(){
  return call_user_func_array(array('h0', 'open'), func_get_args());
}
