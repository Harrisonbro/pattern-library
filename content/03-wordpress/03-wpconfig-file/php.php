<?php

/* 
 * Unified variables
 */
$db_charset = 'utf8'; 
$db_collate = ''; 

/*
 * Variables that change based on environment
 */
if( stristr($_SERVER['HTTP_HOST'], 'domain.com') ) {
  $db_name = ''; 
  $db_username = ''; 
  $db_password = ''; 
  $db_host = ''; 
} elseif ( stristr($_SERVER['HTTP_HOST'], 'domain.dev') ) {
  $db_name = ''; 
  $db_username = 'root'; 
  $db_password = 'password'; 
  $db_host = 'localhost';
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $db_name);

/** MySQL database username */
define('DB_USER', $db_username);

/** MySQL database password */
define('DB_PASSWORD', $db_password);

/** MySQL hostname */
define('DB_HOST', $db_host);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', $db_collate);