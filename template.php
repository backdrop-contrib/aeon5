<?php

/**
 * @file
 * Theme function overrides and template preprocess functions for Aeon5.
 */

/*
 * Implements hook_preprocess_page().
 */
function aeon5_preprocess_page(&$variables) {
  // initialise theme settings
  require_once DRUPAL_ROOT . '/' . drupal_get_path('theme', 'aeon5') . '/includes/settings.inc';
  $color_schemes = _aeon5_color_schemes();
  $color_scheme = theme_get_setting('color_scheme');
  $link = '#' . $color_schemes[$color_scheme]['link'];
  $from = '#' . $color_schemes[$color_scheme]['from'];
  $to = '#' . $color_schemes[$color_scheme]['to'];

  $css = '';
  $css .= 'a {color: ' . $link . ';}';
  $css .= '.l-header, h2 {';
  $css .= '  background: ' . $from . ';';
  $css .= '  background: -moz-linear-gradient(top, ' . $from . ' 0%, ' . $to . ' 100%);';
  $css .= '  background: -webkit-gradient(left top, left bottom, color-stop(0%, ' . $from . '), color-stop(100%, ' . $to . '));';
  $css .= '  background: -webkit-linear-gradient(top, ' . $from . ' 0%, ' . $to . ' 100%);';
  $css .= '  background: -ms-linear-gradient(top, ' . $from . ' 0%, ' . $to . ' 100%);';
  $css .= '  background: linear-gradient(to bottom, ' . $from . ' 0%, ' . $to . ' 100%);';
  $css .= '}';

  $max_width = theme_get_setting('max_width');
  $css .= '@media all and (min-width: 851px) { .layout { max-width: ' . $max_width . 'px;}}';

  drupal_add_css($css, array('group' => CSS_THEME, 'type' => 'inline'));
}

