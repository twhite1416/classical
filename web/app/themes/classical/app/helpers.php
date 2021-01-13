<?php

/**
 * Theme helpers.
 */

namespace App;
use Illuminate\Support\Str;

function trunc($text, $length = 120) {
  $truncated = Str::limit($text, $length, '...');

  return $truncated;
}
