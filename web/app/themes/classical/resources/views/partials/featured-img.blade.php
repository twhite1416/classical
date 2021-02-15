@hasfield('featured_image')
  <img src="@field('featured_image')" alt="@title" class="@php($class) img-fluid" />
@else
  <img src="@asset('images/post_image.jpg')" alt="@title" class="@php($class) img-fluid" />
@endfield
