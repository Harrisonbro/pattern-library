<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width">
  
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/styles/all.css'); ?>
  <?php echo css('assets/styles/prettify.css'); ?>
  <?php echo css('assets/styles/prettify.solarized.css'); ?>
  <?php echo css('http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic'); ?>

</head>

<body>

  <header>
    <h1>AblosMedia Pattern Library</h1>
  </header>