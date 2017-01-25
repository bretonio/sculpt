<?php

namespace Component;

function LedeModule($props){
  extract($props);

	$layout = $ledeModule_layout;

  if ($layout == 'lede_twoUp') {
    $cols = 2;
  } elseif ($layout == 'lede_threeUp') {
    $cols = 3;
  } elseif ($layout == 'lede_fourUp') {
    $cols = 4;
  }

  $columnClass = "grid-${cols}";

  $columns = array();

  for ($i = 1; $i <= $cols; $i++) {
    array_push($columns, array(
      'title' => $props['ledeModule_col_'.$i.'_title'],
      'url' => $props['ledeModule_col_'.$i.'_url'],
      'body' => $props['ledeModule_col_'.$i.'_body'],
    ));
  };

  $Column = function($column){
    $Title = h('h3')(['class' => 'textModule-title'])($column['title']);

    return h('div')(['class' => 'lede__column ph05'])([
      $column['url'] ? (
        $column['title'] ? (
          h('a')([
            'href' => $column['url']
          ])($Title)
        ) : (
          null
        )
      ) : (
        $Title
      ),
      h('div')(['class' => 'wysiwyg'])(apply_filters('the_content', $column['body']))
    ]);
  };

  return \Component\Outer(['class' => 'lede pv2 scale1'])([
    h('div')(['class' => 'fill-h scale0'])([
      \Lib\check($ledeModule_title)(h('h2')(['class' => 'lede__title h3 pb05 dark opacity025'])(
        $ledeModule_title
      )),
      h('p')(['class' => 'lede__lede h2'])($ledeModule_lede),
      \Lib\check($layout == 'lede_body')(
        h('div')(['class' => 'lede__body wysiwyg'])(
          apply_filters('the_content', $ledeModule_body)
        )
      ),
      \Lib\check($ledeModule_cta && ($layout == 'lede' || $layout == 'lede_body'))(
        \Component\Button($ledeModule_cta_text, [
          'url' => $ledeModule_cta_url,
          'class' => 'mt025',
          'target' => $cta_is_external ? '_blank' : ''
        ])
      )
    ]),
    h('div')(['class' => 'mhn05 mt1'])(
      h('div')(['class' => \Lib\classname('lede__columns flex flex-items-start flex-wrap', $columnClass)])(
        array_map($Column, $columns)
      )
    )
  ]);
}
