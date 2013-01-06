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
    return file_get_contents( $file->root() ); 
  }
} // END get_pattern_file()

