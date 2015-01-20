<?php

/**
 * @file
 * Theme settings file for Aeon5.
 *
 */

$form['max_width'] = array(
  '#type' => 'select',
  '#title' => t('Theme max width'),
  '#default_value' => theme_get_setting('max_width'),
  '#options' => array('780' => '780px', '960' => '960px'),
  '#description' => t('Set the css max width (px) for the theme. 780px is the original Aeon5 width.'),
);

