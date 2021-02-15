<article @php(post_class('first-article'))>
  <div class="card mb-5 single-card-first horizontal-card">
    <div class="row">
      @hasfield('featured_image')
      <div class="col-md-6 col-sm-12 card-image">
        @include('partials.content-single-image')
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="card-body">
          <a href="@permalink"><h5 class="card-title">@title</h5></a>
          @include('partials.entry-meta')
          <p class="card-text">@excerpt</p>
        </div>
      </div>
      @else
      <div class="col">
        <div class="card-body">
          <a href="@permalink"><h5 class="card-title">@title</h5></a>
          @include('partials.entry-meta')
          <p class="card-text">@excerpt</p>
        </div>
      </div>
      @endfield
    </div>
  </div>  
</article>
