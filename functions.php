<?php

// Shortening the excerpt to 96 words
add_filter( 'excerpt_length', function($length) {
    return 80;
} );

// Removing the [...] ellipses
function new_excerpt_more() {
    return '&#46;&#46;&#46;';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
