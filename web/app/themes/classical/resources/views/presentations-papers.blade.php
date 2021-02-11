{{--
  Template Name: Presentations Papers
--}}

@include('partials.header')


<main class="main">
  <div class="wide-row">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 py-5"> 
          @include('partials.page-header')
        </div>
      </div>
    </div>
  </div>
  
  @query([
    'post_type' => 'papers',
    'posts_per_page' => -1,
    'post_status' => 'publish'
  ])
  @posts
    <div class="wide-row py-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-12"> 
            @include('partials.presentations-papers')
          </div>
        </div>
      </div>
    </div>
  @endposts
</main>
@include('partials.footer')



