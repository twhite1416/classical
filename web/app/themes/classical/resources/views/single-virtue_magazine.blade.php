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
              <div class="col order-12 text-right">
                @include('partials.virtue-selector')
              </div>
              @while(have_posts()) @php(the_post())
              @set($iid, $post->ID)
              <div class="col">
                <div class="content">
                  <h2>Issue @field('issue_number') <span class="color-gold">|</span> @field('issue_title')</h2>
                  <p>@content</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form pt-3">
                  @shortcode('[hf_form slug="virtue-newsletter-signup"]')
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <img class="img-fluid" src="@field('issue_image')" />
          </div>
          @endwhile
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
            <?php endforeach; wp_reset_postdata(); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>

  @include('partials.profile-module')
</div>

@include('partials.footer')
