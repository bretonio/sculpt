<?php

namespace Component;

function LedeModule($props){
  extract($props);

	$col_1_title = get_sub_field('ledeModule_col_1_title');
	$col_2_title = get_sub_field('ledeModule_col_2_title');
	$col_3_title = get_sub_field('ledeModule_col_3_title');
	$col_4_title = get_sub_field('ledeModule_col_4_title');

	$col_1_url = get_sub_field('ledeModule_col_1_url');
	$col_2_url = get_sub_field('ledeModule_col_2_url');
	$col_3_url = get_sub_field('ledeModule_col_3_url');
	$col_4_url = get_sub_field('ledeModule_col_4_url');

	$col_1_body = get_sub_field('ledeModule_col_1_body');
	$col_2_body = get_sub_field('ledeModule_col_2_body');
	$col_3_body = get_sub_field('ledeModule_col_3_body');
	$col_4_body = get_sub_field('ledeModule_col_4_body');

	$layout = $ledeModule_layout;

  if ($layout == 'lede_twoUp') {
    $cols = 2;
  } elseif ($layout == 'lede_threeUp') {
    $cols = 3;
  } elseif ($layout == 'lede_fourUp') {
    $cols = 4;
  }

  $columns = array();

  for ($i = 1; $i <= $cols; $i++) {
    array_push($columns, array(
      'title' => $props['ledeModule_col_'.$i.'_title'],
      'url' => $props['ledeModule_col_'.$i.'_url'],
      'body' => $props['ledeModule_col_'.$i.'_body'],
    ));
  };

  $Column = function($column){
    return h('div')(['class' => 'textModule-block block s1'])([
      $column['url'] ? (
        h('a')([
          'class' => 'textModule-block-link',
          'href' => $column['url']
          ])(
          h('h3')(['class' => 'textModule-title'])(
            $column['title']
          )
        )
      ) : (
        h('h3')(['class' => 'textModule-title'])(
          $column['title']
        )
      ),
      h('div')(['class' => 'p'])(apply_filters('the_content', $column['body']))
    ]);
  };

  return \Component\Outer(['class' => 'lede pv2 scale1'])([
    h('div')(['class' => 'fill-h scale0'])([
      \Lib\check($ledeModule_title)(h('h2')(['class' => 'lede__title h3 pb05 dark opacity025'])(
        $ledeModule_title
      )),
      h('p')(['class' => 'ledeModule-lede h2'])($ledeModule_lede),
      \Lib\check($layout == 'lede_body')(
        h('div')(['class' => 'ledeModule-body'])(
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
    h('div')(['class' => 'flex flex-items-start flex-wrap'])(
      array_map($Column, $columns)
    )
  ]);
}
