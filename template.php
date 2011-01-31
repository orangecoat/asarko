<?php

function asarko_preprocess_html(&$vars) {
  $vars['classes_array'][] = 'asarko';
}

function asarko_preprocess_page(&$vars) {
  $vars['content_tag'] = isset($vars['node']) ? 'article' : 'section';
}
