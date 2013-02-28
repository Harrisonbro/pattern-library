<?php 

// Direct access protection
if( !isset($root) ) die( 'Direct access is not allowed' ); 

// Includes
include_once('functions.php'); 

// Parse URL
$url = parse_url( currentPageURL() ); 
$url_pieces = explode("/", $url['path']); 
echo'<pre>'.print_r($url_pieces,1).'</pre>';