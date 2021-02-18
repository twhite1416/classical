{{--
  Template Name: Virtue Magazine
  Template Post Type: post, page, virtue_magazine 
--}}

@include('partials.header')

@include('partials.virtue-header')
<div class="page-template-virtue-magazine">
  <div class="overlay-header">
    <div class="container">
      <div class="page-header">
        <h1>VIRTUE</h1>
      </div>
      <main class="main space">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4 order-12 text-right">
                @include('partials.virtue-selector')
              </div>

              @query([
                'post_type' => 'virtue_magazine',
                'posts_per_page' => 1,
                'post_status' => 'publish'
              ])
              @posts
              @set($iid, get_the_ID())
              <div class="col">
                <div class="content">
                  <h2>Issue @field('issue_number') <span class="color-gold">|</span> @field('issue_title')</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p>@content</p>
                <div class="form pt-3">
                  @shortcode('[hf_form slug="virtue-newsletter-signup"]')
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <img class="img-fluid" src="@field('issue_image')" />
          </div>
        </div>
      </main>
    </div>
  </div>

  <div class="single-cards">
    <div class="container">
      <div class="row">
        <?php
          $featured_posts = get_field('articles');
          if( $featured_posts ): ?>
            <?php foreach( $featured_posts as $p ):
              setup_postdata($p); ?>
              @include('partials.single-card', $p)
            <?php endforeach; ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
  <?php
    $profile = get_field('profile_article');
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
</div>
@endposts

@include('partials.donate-module')
@include('partials.footer-bare')
