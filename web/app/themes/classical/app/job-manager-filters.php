<?php

/**
 * Remove the preview step. Code goes in theme functions.php or custom plugin.
 * @param  array $steps
 * @return array
 */

function custom_submit_job_steps( $steps ) {
  unset( $steps['preview'] );
  return $steps;
}
add_filter( 'submit_job_steps', 'custom_submit_job_steps' );

/**
 * Change button text (won't work until v1.16.2)
 */
function change_preview_text() {
  return __( 'Submit Job' );
}
add_filter( 'submit_job_form_submit_button_text', 'change_preview_text' );

/**
 * Since we removed the preview step and it's handler, we need to manually publish jobs
 * @param  int $job_id
 */
function done_publish_job( $job_id ) {
  $job = get_post( $job_id );

  if ( in_array( $job->post_status, array( 'preview', 'expired' ) ) ) {
    // Reset expirey
    delete_post_meta( $job->ID, '_job_expires' );

    // Update job listing
    $update_job                  = array();
    $update_job['ID']            = $job->ID;
    $update_job['post_status']   = get_option( 'job_manager_submission_requires_approval' ) ? 'pending' : 'publish';
    $update_job['post_date']     = current_time( 'mysql' );
    $update_job['post_date_gmt'] = current_time( 'mysql', 1 );
    wp_update_post( $update_job );
  }
}
add_action( 'job_manager_job_submitted', 'done_publish_job' );
