<div class="col-12 col-md-6 col-lg-4 my-5">
  <div class="card single-card" style="">
    @include('partials.featured-img')
    <div class="card-body">
      <h3 class="card-title"><a href="@permalink">@title</a></h3>
      <p class="author-line">By @author()</p>
      <p class="card-text">{{App\trunc(strip_tags(get_the_content()))}}</p>
      
    </div>
  </div>
</div>
