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
    <div class="row justify-content-end">
      <div class="col-auto col-xs-6">
        <a href="/post-a-job" class="btn btn-outline-white" role="button">Post a Job</a>
      </div>
      <div class="col-auto col-xs-6">
        <a href="/job-dashboard" class="btn btn-outline-white" role="button">Remove or Update a Job</a>
      </div>
    </div>
  </div>
</div>

<div class="job-listings-container-bg">
  <div class="container job-listings-container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <ul class="job_listings">

