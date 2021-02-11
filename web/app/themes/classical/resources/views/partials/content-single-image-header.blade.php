@hasfield('featured_image')
<div class="row justify-content-center">
  <div class="col-lg-11">
    <img src="@field('featured_image')" alt="@title" class="img-fluid" />
  </div>
</div>
@else
<div class="row justify-content-center">
  <div class="col-lg-11">
    <img src="@asset('images/post_image.jpg')" alt="@title" class="img-fluid" />
  </div>
</div>
@endfield
