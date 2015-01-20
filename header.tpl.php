<?php
/**
 * @file
 */
?>
<?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
  </a>
<?php endif; ?>

<?php if ($site_name || $site_slogan): ?>
  <div class="name-and-slogan clearfix">

    <?php if ($site_name): ?>
      <div class="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
      </div>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <div class="site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>
  </div>

<?php endif; ?>

<a class="hamburger" href="#">
  <svg width="20" height="20">
    <path d="M0,2 20,2" stroke="#fff" stroke-width="4"/>
    <path d="M0,10 20,10" stroke="#fff" stroke-width="4"/>
    <path d="M0,18 20,18" stroke="#fff" stroke-width="4"/>
  </svg>
</a>

<?php if ($menu): ?>
  <nav id="nav">
    <?php print $menu; ?>
  </nav>
<?php endif; ?>
