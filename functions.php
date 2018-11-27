<?php

// Shortening the excerpt to a # of words
add_filter( 'excerpt_length', function($length) {
    return 48;
} );

// Removing the [...] ellipses from blog posts
function new_excerpt_more() {
    return '&#46;&#46;&#46;';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
