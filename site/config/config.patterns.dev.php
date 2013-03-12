<?php 

if( is_dir('/Users/Harrison/Sites/- Repos/pattern-library [Harrisonbro]') ) {
  $path = '/Users/Harrison/Sites/- Repos/pattern-library [Harrisonbro]'; 
} else {
  $path = '/Users/Harrison/Sites/- External Libraries/pattern-library [Harrisonbro]'; 
}

c::set( 'SITE_PATH', $path );
c::set('rewrite', false);

