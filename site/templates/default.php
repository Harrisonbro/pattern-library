<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <h2><?php echo html($page->title()); ?></h2>
  <?php echo kirbytext($page->description()); ?>
  
  <?php if( has_pattern_file('php.php', $page) ) : ?>
    <pre id="php" class="pattern-code"><?php echo get_pattern('php.php', $page); ?></pre><!-- #php -->
  <?php endif; ?>
  
  <?php if( has_pattern_file('html.html', $page) ) : ?>
    <pre id="html" class="pattern-code"><?php echo get_pattern('html.html', $page); ?></pre><!-- #html -->
  <?php endif; ?>
  
  <?php if( has_pattern_file('css.css', $page) ) : ?>
    <pre id="css" class="pattern-code"><?php echo get_pattern('css.css', $page); ?></pre><!-- #css -->
  <?php endif; ?>

</section>

<?php snippet('footer') ?>