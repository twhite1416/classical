<article @php(post_class())>
  <div class="row align-items-center justify-content-center">
    @if(get_field('author') || get_field('custom_author_entry'))
    <div class="col-lg-2 col-md-4 col-12 author-image text-center">
      @include('partials.content-author-image')
    </div>
    @endif

    <div class="col-lg-10 col-md-8 col-12">
      <div class="card-body">
        <a href="@permalink"><h5 class="card-title">@title</h5></a>
        @include('partials.custom-entry-meta')
        <p class="card-text">{{ get_the_excerpt()}} <a style="white-space: nowrap" href="@permalink">Read more</a></p>
      </div>
    </div>
  </div>
</article>
