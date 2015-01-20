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

/**
 * Helper function
 *
 * @return array
 *   Aeon5 color schemes array
 */
function _aeon5_color_schemes() {
  return array(
    'Original Teal' => array('link' => '688494', 'from' => 'a8d0d4', 'to' => '7a9aa8'),
    'Stellar Blue' => array('link' => '2f427f', 'from' => '8598d5', 'to' => '2f427f'),
    'Tasty Tomato' => array('link' => 'b55254', 'from' => 'cd7b7b', 'to' => 'b55254'),
    'Blue Sky' => array('link' => '5a95cf', 'from' => '63abdb', 'to' => '5a95cf'),
    'Silver Gray' => array('link' => '688494', 'from' => 'c0c0c0', 'to' => 'a3a3a3'),
    'Midnight' => array('link' => '688494', 'from' => '3f3f3f', 'to' => '3d3d3d'),
    'Funky Purple' => array('link' => '763673', 'from' => 'A0789D', 'to' => '763673'),
    'Mint' => array('link' => '688c6e', 'from' => '86af8d', 'to' => '688c6e'),
    'Orange' => array('link' => 'f27334', 'from' => 'ff9764', 'to' => 'f27334'),
    'Cappuccino' => array('link' => '88664a', 'from' => '98826e', 'to' => '88664a'),
  );
}

