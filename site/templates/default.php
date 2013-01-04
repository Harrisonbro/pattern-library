<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->description()) ?>
    <?php echo kirbytext($page->html()) ?>
    <?php echo kirbytext($page->php()) ?>
    <?php echo kirbytext($page->css()) ?>
  </article>

</section>

<?php snippet('footer') ?>