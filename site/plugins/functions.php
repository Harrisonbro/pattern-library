<?php 

function has_pattern_file( $filename = null, $page = null ) {
  if( !$filename || !$page || 'object' != gettype($page) ) { return false; } // Check for required inputs
  $file = $page->files()->find( $filename );
  if( !$file ) { 
    // If no file found
    return false; 
  } else { 
    // If file was found
    return true; 
  } 
} // END has_pattern_file()

function get_pattern( $filename = null, $page = null ) {
  if( !$filename || !$page ) { return false; } // Check for required inputs
  if( !has_pattern_file( $filename, $page ) ) { return false; } // Check input file exists
  else { 
    $file = $page->files()->find( $filename );
    return htmlspecialchars( file_get_contents( $file->root() ) ); 
  }
} // END get_pattern_file()

function compile_less( $input, $output ) {
  
  // Check input file exists
  if( !file_exists($input) ) { exit( $input . ' could not be read. ($input)'); }
  
  require_once( c::get( 'SITE_PATH' ) . c::get( 'LIB_PATH' ) .'/lessphp/lessc.inc.php' );
  
  // Load the cache
  $cache_fname = $input.".cache";
  if( file_exists($cache_fname) ) {
    // if we already have a cache file, read it
    $cache = unserialize(file_get_contents($cache_fname));
  } else {
    // if we don't, set cache to just be input file
    $cache = $input;
  }
	
  try {
  	//$new_cache = lessc::cexecute($cache); // make new cache 
  	$less = new lessc;
  	$less->addImportDir( c::get( 'SITE_PATH' ) . c::get( 'ASSETS_PATH' ) ); // Allow searching of less files in other places, eg. the fonts folder
  	$new_cache = $less->cachedCompile($cache);
  } catch (exception $ex) {
  	echo "lessphp fatal error: " . $ex->getMessage();
  }
	
  // If there was no existing cache file, or if the input files have been updated, write new css
  if( !is_array($cache) || $new_cache['updated'] > $cache['updated'] ) {
  	file_put_contents($cache_fname, serialize($new_cache)); // write new cache file
  	file_put_contents($output, $new_cache['compiled']); // write new css file
  }
  
} // END compile_less()

// Compile LESS stylesheets
$input = c::get( 'SITE_PATH' ) . c::get( 'STYLES_PATH' ) .'/all.less'; 
$output = c::get( 'SITE_PATH' ) . c::get( 'STYLES_PATH' ) .'/all.css'; 
compile_less( $input, $output ); 