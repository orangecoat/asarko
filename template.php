<?php
// $Id$

function asarko_theme($existing, $type, $theme, $path) {
 return array(); 
}

function asarko_preprocess_block($vars) {
  
  $attr['id'] = "block-{$vars['block']->module}-{$vars['block']->delta}";
  $attr['class'] = 'block';
  $attr['class'] .= " block-{$vars['block']->module}";
  $attr['class'] .= " block-{$vars['block']->region}";
  
  $vars['attr'] = $attr;
  $vars['empty'] = empty($vars['block']->content);
  
}