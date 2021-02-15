{{--
  Template Name: Virtue Magazine
--}}

@include('partials.header')
@while(have_posts()) @php(the_post())
@include('partials.virtue-header')

<div class="overlay-header">
  <div class="container">
    <div class="page-header">
      <h1>VIRTUE</h1>
    </div>
    <main class="main space">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="content">
            <h2>Issue @field('issue_number') <span class="color-gold">|</span> @title</h2>
            <p>@content</p>
          </div>
          <div class="form pt-3">
            @shortcode('[hf_form slug="virtue-newsletter-signup"]')
          </div>
        </div>
        <div class="col-lg-4">
          <img class="img-fluid" src="@asset('images/virtue_mag.png')" />
        </div>
    </main>
  </div>
</div>

<div class="single-cards">
  <div class="container">
    <div class="row">
      @query([
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_parent' => get_the_ID(),
        'post_status' => 'publish'
      ])
      @posts
        @include('partials.single-card')
      @endposts
    </div>
  </div>
</div>
@endwhile

@include('partials.profile-module')

@include('partials.footer')
