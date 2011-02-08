<?php
// $Id$

function asarko_theme($existing, $type, $theme, $path) {
  return array(); 
}

function asarko_preprocess_block(&$vars) {

  $attr['id'] = "block-{$vars['block']->module}-{$vars['block']->delta}";
  $attr['class'] = 'block';
  $attr['class'] .= " block-{$vars['block']->module}";
  $attr['class'] .= " block-{$vars['block']->region}";

  $vars['attr'] = $attr;
  $vars['empty'] = empty($vars['block']->content);

}

function asarko_preprocess_node(&$vars) {

  $attr['id'] = "node-{$vars['node']->nid}";

  $attr['class'] = "node";
  if ($vars['page']) {
    $attr['class'] .= ' page';
  } else {
    $attr['class'] .= ' teaser';
  }
  if ($vars['node']->sticky) {
    $attr['class'] .= ' sticky';
  }
  if (!$vars['node']->status) {
    $attr['class'] .= ' node-unpublished';
  }
  $attr['class'] .= ' clear-block';

  $vars['attr'] = $attr;
  $vars['empty'] = empty($vars['node']->content);

}

function asarko_preprocess_page(&$vars) {

  // Add modernizr after stylesheets
  $vars['styles'] .= '<script src="' . base_path() .
    drupal_get_path('theme', 'asarko') . '/js/modernizr.min.js"></script>'.
    "\n";

  // If the page is a node page, we want the title to be inside the article tag
  if ($vars['node']) {
    $vars['content_tag'] = 'article';
  } else {
    $vars['content_tag'] = 'section';
  }

  $attr['class'] = $vars['body_classes'] . ' asarko';
  $vars['attr'] = $attr;

}

function asarko_preprocess_comment(&$vars) {

  $attr['class'] =  'comment';
  $attr['class'] .= $comment->new ? ' comment-new' : '';
  $attr['class'] .= ' clear-block';

  $vars['attr'] = $attr;

}
