<?php

  // Adding post thumbnail
  add_theme_support( 'post-thumbnails' );

  // Shortening the excerpt to a # of words
  add_filter( 'excerpt_length', function($length) {
      return 48;
  } );

  // Removing the [...] ellipses from blog posts
  function new_excerpt_more() {
      return '&#46;&#46;&#46;';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
  
  /* Widen the Gutenberg Editor */
  add_theme_support('editor-styles');
  function custom_gutenberg_styles() {
  wp_enqueue_style('custom-gutenberg', get_theme_file_uri( '/css/gutenberg.css' ), false, '1.0', 'all');
  }
  add_action('enqueue_block_editor_assets', 'custom_gutenberg_styles');
?>
