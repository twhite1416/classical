<?php
/**
 * Content shown before job listings in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-listings-start.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @version     1.15.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="blue-bar">
  <div class="container">
    <div class="row">
      <div class="col text-right">
        <a href="/post-a-job" class="btn btn-outline-white" role="button">Post a Job</a>
      </div>
    </div>
  </div>
</div>

<div class="container job-listings-container">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <ul class="job_listings">

