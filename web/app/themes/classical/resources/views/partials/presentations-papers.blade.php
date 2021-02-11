<article @php(post_class())>
  <div class="row align-items-center">
    @hasfield('author')
    <div class="col-md-2 author-image">
      @include('partials.content-author-image')
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <a href="@permalink"><h5 class="card-title">@title</h5></a>
        @include('partials/entry-meta')
        <p class="card-text">@excerpt</p>
      </div>
    </div>
    @else
    <div class="col">
      <div class="card-body">
        <a href="@permalink"><h5 class="card-title">@title</h5></a>
        @include('partials/entry-meta')
        <p class="card-text">@excerpt</p>
      </div>
    </div>
    @endfield
  </div>
</article>
