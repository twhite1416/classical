<article @php(post_class())>
  <div class="card mb-5 single-card horizontal-card">
    <div class="row no-gutters">
      @hasfield('featured_image')
      <div class="col-md-4 card-image">
        @include('partials.content-single-image')
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <a href="@permalink"><h5 class="card-title">@title</h5></a>
          @include('partials.entry-meta')
          <p class="card-text">{!! get_the_excerpt() !!} <a style="white-space: nowrap" href="@permalink">Read more</a></p>
        </div>
      </div>
      @else
      <div class="col">
        <div class="card-body">
          <a href="@permalink"><h5 class="card-title">@title</h5></a>
          @include('partials.entry-meta')
          <p class="card-text">{!! get_the_excerpt() !!} <a style="white-space: nowrap" href="@permalink">Read more</a></p>
        </div>
      </div>
      @endfield
    </div>
  </div>  
</article>
