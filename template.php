<?php
/*
 * Implements hook_preprocess_page().
 */
function aeon5_preprocess_page(&$variables) {

  // initialise theme settings
  $max_width = theme_get_setting('max_width');
  drupal_add_css('@media all and (min-width: 851px) { .layout { max-width: ' . $max_width . 'px;}}', array('group' => CSS_THEME, 'type' => 'inline'));
}

