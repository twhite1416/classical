<div class="col-12 col-md-6 col-lg-4 my-5">
  <div class="card single-card" style="">
    @if(get_field('featured_image', $post->ID))
      <img src="{{get_field('featured_image', $post->ID)}}" alt="{{get_the_title($post->ID)}}" class="@php($class) img-fluid" />
    @else
      <img src="@asset('images/post_image.jpg')" alt="@php(get_the_title($post->ID)" class="@php($class) img-fluid" />
    @endfield
    <div class="card-body">
      <h3 class="card-title"><a href="{{get_the_permalink($post->ID)}}">{{get_the_title($post->ID)}}</a></h3>
      <p class="author-line">By {{ get_the_author($post->ID)}}</p>
      <p class="card-text">{{App\trunc(strip_tags(get_the_content($post->ID)))}}</p>
    </div>
  </div>
</div>
