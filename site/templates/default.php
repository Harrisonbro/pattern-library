<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <h2><?php echo html($page->title()); ?></h2>
  <?php echo kirbytext($page->description()); ?>
  <p>Jump to:
    <ul class="jump">
      <? if( has_pattern_file('php.php', $page) ) { echo "<li><a href='#php'>PHP</a></li>"; } ?>
      <? if( has_pattern_file('html.html', $page) ) { echo "<li><a href='#html'>HTML</a></li>"; } ?>
      <? if( has_pattern_file('css.css', $page) ) { echo "<li><a href='#css'>CSS</a></li>"; } ?>
      <? if( has_pattern_file('js.js', $page) ) { echo "<li><a href='#js'>JavaScript</a></li>"; } ?>
    </ul><!-- .jump -->
  </p>
  
  <?php if( has_pattern_file('php.php', $page) ) : ?>
    <pre id="php" class="pattern-code"><?php echo get_pattern('php.php', $page); ?></pre><!-- #php -->
  <?php endif; ?>
  
  <?php if( has_pattern_file('html.html', $page) ) : ?>
    <pre id="html" class="pattern-code"><?php echo get_pattern('html.html', $page); ?></pre><!-- #html -->
  <?php endif; ?>
  
  <?php if( has_pattern_file('css.css', $page) ) : ?>
    <pre id="css" class="pattern-code"><?php echo get_pattern('css.css', $page); ?></pre><!-- #css -->
  <?php endif; ?>
  
  <?php if( has_pattern_file('js.js', $page) ) : ?>
    <pre id="js" class="pattern-code"><?php echo get_pattern('js.js', $page); ?></pre><!-- #js -->
  <?php endif; ?>

</section>

<?php snippet('footer') ?>