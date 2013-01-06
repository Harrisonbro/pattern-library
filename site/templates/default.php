<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <h2><?php echo html($page->title()); ?></h2>
  <?php echo kirbytext($page->description()); ?>
  
  <?php if( has_pattern_file('php.php', $page) ) : ?>
  <div id="php" class="pattern-code">
    <pre><?php echo get_pattern('php.php', $page); ?></pre>
  </div><!-- #php -->
  <?php endif; ?>
  
  <?php if( has_pattern_file('html.html', $page) ) : ?>
  <div id="html" class="pattern-code">
    <pre><?php echo get_pattern('html.html', $page); ?></pre>
  </div><!-- #html -->
  <?php endif; ?>
  
  <?php if( has_pattern_file('css.css', $page) ) : ?>
  <div id="css" class="pattern-code">
    <pre><?php echo get_pattern('css.css', $page); ?></pre>
  </div><!-- #css -->
  <?php endif; ?>

</section>

<?php snippet('footer') ?>