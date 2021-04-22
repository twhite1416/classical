<?php
/**
 * Job listing in the loop.
 *
 * This template can be overridden by copying it to yourtheme/job_manager/content-job_listing.php.
 *
 * @see         https://wpjobmanager.com/document/template-overrides/
 * @author      Automattic
 * @package     wp-job-manager
 * @category    Template
 * @since       1.0.0
 * @version     1.34.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

global $post;
?>
<li <?php job_listing_class(); ?> data-longitude="<?php echo esc_attr( $post->geolocation_long ); ?>" data-latitude="<?php echo esc_attr( $post->geolocation_lat ); ?>">
  <a href="<?php the_job_permalink(); ?>">
    <?php the_company_logo(); ?>
    <div class="position">
      <div class="company">
        <h2><?php the_company_name( '<strong>', '</strong> ' ); ?></h2>
        <h3><?php wpjm_the_job_title(); ?></h3>
        <?php $desc = wpjm_get_the_job_description(); ?>
        <?= App\trunc($desc, 240)?>
        <div class="row">
          <div class="col">
            <span class="read-more">Read More</span>
          </div>
        </div>
      </div>

      
    </div>
    <ul class="meta">
      <?php do_action( 'job_listing_meta_start' ); ?>
      <li class="job-location">
        <?php the_job_location( false ); ?>
      </li>

      
      <?php $cats = wpjm_get_the_job_categories(); ?>
      <?php if ( ! empty( $cats ) ) : foreach ( $cats as $cat ) : ?>
        <li class="job-category">
          <?php echo esc_html( $cat->name ); ?>
        </li>
      <?php endforeach; endif; ?>
    
      

      <?php if ( get_option( 'job_manager_enable_types' ) ) { ?>
        <?php $types = wpjm_get_the_job_types(); ?>
        <?php if ( ! empty( $types ) ) : foreach ( $types as $type ) : ?>
          <li class="job-type <?php echo esc_attr( sanitize_title( $type->slug ) ); ?>"><?php echo esc_html( $type->name ); ?></li>
        <?php endforeach; endif; ?>
      <?php } ?>

      <li class="date"><?= date("F, Y", strtotime(get_the_job_publish_date())) ?></li>

      <?php do_action( 'job_listing_meta_end' ); ?>
    </ul>
  </a>
</li>
