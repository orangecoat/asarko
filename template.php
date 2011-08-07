<?php

/**
 * Implements hook_theme()
 */
function asarko_theme() {

  return $items = array(
    'html5shim' => array(
      'template' => 'html5shim',
    ),
  );
}

/**
 * Implements hook_css_alter().
 *
 * Clear out everything.
 * We'll put the stuff we need in css/keep for ultra-great-aggregation-purposes
 */
function asarko_css_alter(&$css) {
  $exclude = array(
    // Core
    'misc/vertical-tabs.css'                => FALSE,
    'misc/ui/jquery.ui.core.css'            => FALSE,
    'misc/ui/jquery.ui.theme.css'           => FALSE,
    'modules/aggregator/aggregator.css'     => FALSE,
    'modules/block/block.css'               => FALSE,
    'modules/book/book.css'                 => FALSE,
    'modules/comment/comment.css'           => FALSE,
    'modules/contextual/contextual.css'     => FALSE,
    'modules/dblog/dblog.css'               => FALSE,
    'modules/field/theme/field.css'         => FALSE,
    'modules/file/file.css'                 => FALSE,
    'modules/filter/filter.css'             => FALSE,
    'modules/forum/forum.css'               => FALSE,
    'modules/help/help.css'                 => FALSE,
    'modules/menu/menu.css'                 => FALSE,
    'modules/node/node.css'                 => FALSE,
    'modules/openid/openid.css'             => FALSE,
    'modules/overlay/overlay-parent.css'    => FALSE,
    'modules/poll/poll.css'                 => FALSE,
    'modules/profile/profile.css'           => FALSE,
    'modules/search/search.css'             => FALSE,
    'modules/shortcut/shortcut.css'         => FALSE,
    'modules/statistics/statistics.css'     => FALSE,
    'modules/syslog/syslog.css'             => FALSE,
    'modules/system/admin.css'              => FALSE,
    'modules/system/maintenance.css'        => FALSE,
    'modules/system/system.css'             => FALSE,
    'modules/system/system.admin.css'       => FALSE,
    'modules/system/system.base.css'        => FALSE,
    'modules/system/system.maintenance.css' => FALSE,
    'modules/system/system.menus.css'       => FALSE,
    'modules/system/system.messages.css'    => FALSE,
    'modules/system/system.theme.css'       => FALSE,
    'modules/taxonomy/taxonomy.css'         => FALSE,
    'modules/toolbar/toolbar.css'           => FALSE,
    'modules/tracker/tracker.css'           => FALSE,
    'modules/update/update.css'             => FALSE,
    'modules/user/user.css'                 => FALSE,
    // Contrib
    drupal_get_path('module', 'logintoboggan') . '/logintoboggan.css'                  => FALSE,
    drupal_get_path('module', 'views')         . '/css/views.css'                      => FALSE,
    drupal_get_path('module', 'ctools')        . '/css/ctools.css'                     => FALSE,
    drupal_get_path('module', 'panels')        . '/css/panels.css'                     => FALSE,
    drupal_get_path('module', 'context')       . '/plugins/context_reaction_block.css' => FALSE,
    drupal_get_path('module', 'date')          . '/date_api/date.css'                  => FALSE,
    drupal_get_path('theme',  'boron')         . '/css/layout.css'                     => FALSE,
  );
  $css = array_diff_key($css, $exclude);
}
