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
            <h2>Issue 06 <span class="color-gold">|</span> Pedagogy</h2>
            <p>Each issue of Virtue will have articles and interviews from the nation’s leading intellectuals; profiles of outstanding teachers, alumni, and students; succinct descriptions of classical education—what, how, and why we teach the liberal arts; essays by leading academic scholars, relating their work to classical education; and an assortment of topics to keep us all thinking afresh, as we continue to pursue the classical ideals of truth, goodness, and beauty</p>
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
