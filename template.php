<?php

/**
 * @file
 * Theme function overrides and template preprocess functions for Aeon5.
 */

/*
 * Implements hook_preprocess_page().
 */
function aeon5_preprocess_page(&$variables) {
  $max_width = theme_get_setting('max_width');
  $css = '@media all and (min-width: 851px) { .layout { max-width: ' . $max_width . 'px;}}';
  drupal_add_css($css, array('group' => CSS_THEME, 'type' => 'inline'));
}

