<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->description()) ?>
    <?php 
      function get_pattern_file( $filename = null, $page = null ) {
        if( !$filename || !$page ) { return false; }
        $file = $page->files()->find( $filename );
        if( !$file ) { return false; } // If no file found
        else { return file_get_contents( $file->root() ); }
      }
      
      if( get_pattern_file('php.php', $page) ) { echo get_pattern_file('php.php', $page); }
      if( get_pattern_file('html.html', $page) ) { echo get_pattern_file('html.html', $page); }
      if( get_pattern_file('css.css', $page) ) { echo get_pattern_file('css.css', $page); }

    ?>
  </article>

</section>

<?php snippet('footer') ?>