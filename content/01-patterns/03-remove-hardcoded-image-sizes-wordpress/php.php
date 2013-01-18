/**
* Filter out hard-coded width, height attributes on all images images in WordPress. 
* https://gist.github.com/4557917
*
* This version applies the function as a filter to the_content rather than send_to_editor. 
* Changes made by filtering send_to_editor will be lost if you update the image or associated post 
* and you will slowly lose your grip on sanity if you don't know to keep an eye out for it. 
* the_content applies to the content of a post after it is retrieved from the database and is "theme-safe". 
* (i.e., Your changes will not be stored permanently or impact the HTML output in other themes.)
*
* Also, the regex has been updated to catch both double and single quotes, since the output of 
* get_avatar is inconsistent with other WP image functions and uses single quotes for attributes. 
* [insert hate-stare here]
*
*/
function mytheme_remove_img_dimensions($html) {
  $html = preg_replace('/(width|height)=["\']\d*["\']\s?/', "", $html);
    return $html;
}
add_filter('post_thumbnail_html', 'mytheme_remove_img_dimensions', 10);
add_filter('the_content', 'mytheme_remove_img_dimensions', 10);
add_filter('get_avatar','mytheme_remove_img_dimensions', 10);


/**
* Alternative suggested by someone:
*/

$tests = [
    '<img src="mzgd.jpg" width="100%" height="100%"/>',
    '<img src="mzgd.jpg" width="100" height="100"/>',
    '<img src="mzgd.jpg" width=\'100%\' height="100%"/>',
    '<img src="mzgd.jpg" width=100 height=100%/>',
    '<img src="mzgd.jpg" width="100%" height=\'100%\'/>',
    '<img src="mzgd.jpg" width="100%" height="100%"/>',
];

function mytheme_remove_img_dimensions($html) {
    // Loop through all <img> tags
    if (preg_match('/<img[^>]+>/ims', $html, $matches)) {
        foreach ($matches as $match) {
            // Replace all occurences of width/height
            $clean = preg_replace('/(width|height)=["\'\d%\s]+/ims', "", $match);
            // Replace with result within html
            $html = str_replace($match, $clean, $html);
        }
    }
    return $html;
}

$expect = '<img src="mzgd.jpg" />';
foreach ($tests as $num => $test) {
    $result = mytheme_remove_img_dimensions($test);
    if ($result != $expect) {
        echo 'Failed test #' . $num . ': ' . $test . "\n";
        echo 'Expected     : ' . $expect . "\n";
        echo 'Actual result: ' . $result . "\n";
        die();
    }
}