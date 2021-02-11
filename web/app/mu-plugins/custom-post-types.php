<?php
/**
 * Plugin Name:  Custom Post Types
 * Plugin URI:   https://github.com/johnbillion/extended-cpts
 * Description:  Extended CPTs is a library which provides extended functionality to WordPress custom post types and taxonomies. This allows developers to quickly build post types and taxonomies without having to write the same code again and again.
 * Version:      4.5.0
 * Author:       John Blackbourn
 * Author URI:   https://github.com/johnbillion
 * License:      MIT License
 */

add_action( 'init', function() {
  register_extended_post_type( 'advisory_council', array(
    # Add the post type to the site's main RSS feed:
    'show_in_feed' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'custom-fields',
      'thumbnail',
      'page-attributes'
    ),
    'taxonomies' => 'category',
    'rewrite'   => array( 'slug' => 'advisors' )

  ), array(
    # Override the base names used for labels:
    'singular' => 'Advisor',
    'plural'   => 'Advisory Council',
    'slug'     => 'advisors'

  ) );

} );

add_action( 'init', function() {
  register_extended_post_type( 'fellows', array(
    # Add the post type to the site's main RSS feed:
    'show_in_feed' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'custom-fields',
      'thumbnail',
      'page-attributes'
    ),
    'taxonomies' => 'category',
    'rewrite'   => array( 'slug' => 'fellows' )
  ), array(
    # Override the base names used for labels:
    'singular' => 'Fellow',
    'plural'   => 'Fellows',
    'slug'     => 'fellows'

  ) );

} );

add_action( 'init', function() {
  register_extended_post_type( 'papers', array(
    # Add the post type to the site's main RSS feed:
    'show_in_feed' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'custom-fields',
      'thumbnail',
      'page-attributes'
    ),
    'taxonomies' => 'category',
    'rewrite'   => array( 'slug' => 'papers' )
  ), array(
    # Override the base names used for labels:
    'singular' => 'Scholarly Paper',
    'plural'   => 'Scholarly Papers',
    'slug'     => 'papers'

  ) );

});
