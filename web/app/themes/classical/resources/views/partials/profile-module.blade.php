<?php
$profile = get_field('profile_article', $iid);
if( $profile ): ?>
  <div class="profile-module py-5">
    <div class="container">
      <?php foreach( $profile as $d ):
    setup_postdata($d); ?>
      <div class="row align-items-center">
        @if(get_field('featured_image', $d->ID))
          <div class="col-lg-4 text-center">
            <img src="{{get_field('featured_image', $d->ID)}}" alt="{{get_the_title($d->ID)}}" class="img-fluid rounded-circle" />
          </div>
        @endif
        <div class="col-lg-8">
          <h2>{{get_the_title($d->ID)}}</h2>
          <p>{{App\trunc(strip_tags(get_the_content($d->ID)))}}</p>
          <a href="{{get_the_permalink($d)}}" class="btn btn-outline-primary" role="button">Read More</a>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div> 
<?php endif; ?>
