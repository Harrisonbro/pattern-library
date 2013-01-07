<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/all.css'); ?>
  <?php //echo css('site/plugins/lib/snippet/jquery.snippet.css'); ?>
  <?php echo css('site/plugins/lib/prettify/prettify.css'); ?>
  <?php echo css('site/plugins/lib/prettify/prettify.solarized.css'); ?>

</head>

<body>

  <header>
    <h1>AblosMedia Pattern Library</h1>
  </header>