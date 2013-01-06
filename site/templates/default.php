<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h2><?php echo html($page->title()); ?></h2>
    <?php echo kirbytext($page->description()); ?>
    <?php 

      if( has_pattern_file('php.php', $page) ) { echo get_pattern('php.php', $page); }
      if( has_pattern_file('html.html', $page) ) { echo get_pattern('html.html', $page); }
      if( has_pattern_file('css.css', $page) ) { echo get_pattern('css.css', $page); }
      
    ?>
  </article>

</section>

<?php snippet('footer') ?>