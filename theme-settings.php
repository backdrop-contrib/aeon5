<?php

/**
 * @file
 * Theme settings file for Aeon5.
 *
 */

require_once DRUPAL_ROOT . '/' . drupal_get_path('theme', 'aeon5') . '/includes/settings.inc';

$form['max_width'] = array(
  '#type' => 'select',
  '#title' => t('Theme max width'),
  '#default_value' => theme_get_setting('max_width'),
  '#options' => backdrop_map_assoc(array('780', '960')),
  '#description' => t('Set the css max width (px) for the theme. 780px is the original Aeon5 width.'),
);

$form['color_scheme'] = array(
  '#type' => 'select',
  '#title' => t('Color scheme'),
  '#default_value' => theme_get_setting('color_scheme'),
  '#options' => backdrop_map_assoc(array_keys(_aeon5_color_schemes())),
  '#description' => t('Set color scheme preset (does not require color module).'),
);


