<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return '';
});

// Changing excerpt length
add_filter( 'excerpt_length', function($length) {
    return 30;
} );

