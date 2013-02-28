<?php 

// Definitions
$root = dirname(__FILE__); 
$root_site = $root . '/site'; 
$root_patterns = $root . '/patterns'; 

// Try to load system
if( !file_exists($root_site . '/system.php') ) {
  die( 'Could not load system.php' ); 
}

require_once( $root_site . '/system.php' ); 