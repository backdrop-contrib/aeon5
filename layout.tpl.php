<?php
/**
 * @file
 * Template for a single column layout.
 *
 * Variables:
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: Status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links: Array of actions local to the page, such as 'Add menu' on
 *   the menu administration interface.
 * - $classes: Array of classes to be added to the layout wrapper.
 * - $attributes: Additional attributes to be added to the layout wrapper.
 * - $content: An array of content, each item in the array is keyed to one
 *   region of the layout. This layout supports the following sections:
 *   - $content['header']
 *   - $content['top']
 *   - $content['content']
 *   - $content['footer']
 */
?>
<div class="layout--one-column <?php print implode(' ', $classes); ?>"<?php print backdrop_attributes($attributes); ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>

  <?php if ($content['header']): ?>
    <header class="l-header" role="banner" aria-label="<?php print t('Site header'); ?>"><div class="section clearfix">
      <?php print $content['header']; ?>
    </header>
  <?php endif; ?>

  <div class="l-container">
    <main class="l-content" role="main">
      <a id="main-content"></a>

      <?php if ($content['top']): ?>
        <div class="l-top">
          <?php print $content['top']; ?>
        </div>
      <?php endif; ?>

      <?php if ($messages): ?>
        <section class="l-messages">
          <?php print $messages; ?>
        </section>
      <?php endif; ?>

      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print $tabs; ?>
        </div>
      <?php endif; ?>

      <?php print $action_links; ?>
      <?php print $content['content']; ?>
    </main>

    <?php if ($content['footer']): ?>
      <div class="l-footer">
        <?php print $content['footer']; ?>
      </div>
    <?php endif; ?>
  </div>

</div>
