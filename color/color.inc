<?php
/**
 * @file
 */

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'base' => t('Base color'),
    'link' => t('Link color'),
    'top' => t('Header top'),
    'bottom' => t('Header bottom'),
    'text' => t('Text color'),
  ),
  // Pre-defined color schemes
  'schemes' => array(
    'default' => array(
      'title' => t('Aeon5 (Default)'),
      'colors' => array(
        'base' => '#eaeaea',
        'link' => '#0071b3',
        'top' => '#a8d0d4',
        'bottom' => '#7a9aa8',
        'text' => '#777777',
      ),
    ),
    'stellar' => array(
      'title' => t('Stellar Blue'),
      'colors' => array(
        'base' => '#eaeaea',
        'link' => '#2f427f',
        'top' => '#8598d5',
        'bottom' => '#2f427f',
        'text' => '#777777',
      ),
    ),
    'tomato' => array(
      'title' => t('Tasty Tomato'),
      'colors' => array(
        'base' => '#eaeaea',
        'link' => '#b55254',
        'top' => '#cd7b7b',
        'bottom' => '#b55254',
        'text' => '#777777',
      ),
    ),
  ),
  // Images to copy over.
  'copy' => array(),
  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),
  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('top', 'bottom'),
    ),
  ),
  // Color areas to fill (x, y, width, height).
  'fill' => array(),
  // Coordinates of all the theme slices (x, y, width, height)
  // with their filename as used in the stylesheet.
  'slices' => array(),
  // Reference color used for blending. Matches the base.png's colors.
  'blend_target' => '#ffffff',
  // Preview files
  'preview_image' => 'color/preview.png',
  'preview_css' => 'color/preview.css',
  // Base file for image generation
  'base_image' => 'color/base.png',
);

