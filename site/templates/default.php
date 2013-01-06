<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->description()) ?>
    <?php 
      function has_pattern_file( $filename = null, $page = null ) {
        if( !$filename || !$page ) { return false; } // Check for required inputs
        if( !$file ) { return false; } // If no file found
      } // END has_pattern_file()
      
      function get_pattern( $filename = null, $page = null ) {
        if( !$filename || !$page ) { return false; } // Check for required inputs
        if( !has_pattern_file( $filename, $page ) ) { return false; } // Check input file exists
        $file = $page->files()->find( $filename );
        else { return file_get_contents( $file->root() ); }
      } // END get_pattern_file()
      
      if( has_pattern_file('php.php', $page) ) { echo get_pattern('php.php', $page); }
      if( has_pattern_file('html.html', $page) ) { echo get_pattern('html.html', $page); }
      if( has_pattern_file('css.css', $page) ) { echo get_pattern('css.css', $page); }

    ?>
  </article>

</section>

<?php snippet('footer') ?>