<?php

// update_option( 'siteurl' , 'http://yoursite.tld' );
// update_option( 'home' , 'http://yoursite.tld' );


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

@include "local_location.php";
defined('SITE_ROOT')    ? null : define('SITE_ROOT', DS."path".DS."to".DS."site");

defined('THEME_PATH')   ? null : define('THEME_PATH', SITE_ROOT.DS."wp-content".DS."themes".DS."_theme_folder");
defined('LIB_PATH')     ? null : define('LIB_PATH', THEME_PATH.DS."functions".DS."lib");
defined('INCLUDES')     ? null : define('INCLUDES', SITE_ROOT.DS."includes");
defined('HOME_URI')     ? null : define('HOME_URI', get_bloginfo('url'));
defined('THEME_URI')    ? null : define('THEME_URI', get_stylesheet_directory_uri());
defined('THEME_STYLES') ? null : define('THEME_STYLES', THEME_URI . '/styles');
defined('THEME_IMAGES') ? null : define('THEME_IMAGES', THEME_URI . '/images');
defined('THEME_JS')     ? null : define('THEME_JS', THEME_URI . '/js');
defined('THEME_FONTS')  ? null : define('THEME_FONTS', THEME_URI . '/fonts');

?>