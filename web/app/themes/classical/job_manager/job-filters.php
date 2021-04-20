<?php
/**
 * Filters in `[jobs]` shortcode.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/job-filters.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @version     1.33.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

wp_enqueue_script( 'wp-job-manager-ajax-filters' );

do_action( 'job_manager_job_filters_before', $atts );
?>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <form id="job_filters_form" class="job_filters magazine-form">
        <?php do_action( 'job_manager_job_filters_start', $atts ); ?>

        <div class="search_jobs">
          <?php do_action( 'job_manager_job_filters_search_jobs_start', $atts ); ?>

          <?php if ( $categories ) : ?>
            <?php foreach ( $categories as $category ) : ?>
              <input type="hidden" name="search_categories[]" value="<?php echo esc_attr( sanitize_title( $category ) ); ?>" />
            <?php endforeach; ?>
          <?php elseif ( $show_categories && ! is_tax( 'job_listing_category' ) && get_terms( [ 'taxonomy' => 'job_listing_category' ] ) ) : ?>
            <div class="search_categories form-group">
              <label for="search_categories"><?php esc_html_e( 'Category', 'wp-job-manager' ); ?></label>
              <?php if ( $show_category_multiselect ) : ?>
                <?php job_manager_dropdown_categories( [ 'placeholder' => 'Sort by Category', 'taxonomy' => 'job_listing_category', 'hierarchical' => 1, 'name' => 'search_categories', 'orderby' => 'name', 'selected' => $selected_category, 'hide_empty' => true ] ); ?>
              <?php else : ?>
                <?php job_manager_dropdown_categories( [ 'taxonomy' => 'job_listing_category', 'hierarchical' => 1, 'show_option_all' => __( 'Any category', 'wp-job-manager' ), 'name' => 'search_categories', 'orderby' => 'name', 'selected' => $selected_category, 'multiple' => false, 'hide_empty' => true ] ); ?>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <div style="clear: both"></div>

          <div class="search_keywords form-group">
            <label for="search_keywords"><?php esc_html_e( 'Keywords', 'wp-job-manager' ); ?></label>
            <input class="form-control" type="text" name="search_keywords" id="search_keywords" placeholder="<?php esc_attr_e( 'Search by Keyword', 'wp-job-manager' ); ?>" value="<?php echo esc_attr( $keywords ); ?>" />
          </div>

          <?php
          /**
           * Show the submit button on the job filters form.
           *
           * @since 1.33.0
           *
           * @param bool $show_submit_button Whether to show the button. Defaults to true.
           * @return bool
           */
          if ( apply_filters( 'job_manager_job_filters_show_submit_button', false ) ) :
          ?>
            <div class="search_submit">
              <input type="submit" value="<?php esc_attr_e( 'Search Jobs', 'wp-job-manager' ); ?>">
            </div>
          <?php endif; ?>

          <?php do_action( 'job_manager_job_filters_search_jobs_end', $atts ); ?>
        </div>

        <?php do_action( 'job_manager_job_filters_end', $atts ); ?>
      </form>
    </div>
  </div>
</div>

<?php do_action( 'job_manager_job_filters_after', $atts ); ?>

<noscript><?php esc_html_e( 'Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.', 'wp-job-manager' ); ?></noscript>
