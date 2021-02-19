<div class="col-12 col-md-6 col-lg-4 my-5">
  <div class="card single-card" style="">
    @if(get_field('featured_image', $post->ID))
      <img src="{{get_field('featured_image', $post->ID)}}" alt="{{get_the_title($post->ID)}}" class="@php($class) img-fluid" />
    @endfield
    <div class="card-body">
      <h3 class="card-title"><a href="{{get_the_permalink($post->ID)}}">{!! get_the_title($post->ID) !!}</a></h3>
        @if(get_field('hide_author') !== true)
          @group('custom_author_entry', $post->ID)
            @set($cname, get_sub_field('custom_name'))
          @endgroup

          <p class="byline author vcard">
            <span>{{ __('By', 'sage') }}</span>
              @if(get_field('author', $post->ID))
                @title( get_field('author', $post->ID))
              @elseif(isset($cname) && !empty($cname))
                {{$cname}}
              @else
                @author()
              @endif
            |
            <time class="updated" datetime="{{ get_post_time('c', true) }}">
            {{ get_the_date() }}
          </time>  
          </p>
        @endif
      <p class="card-text">{{App\trunc(strip_tags(get_the_content($post->ID)))}} <a style="white-space: nowrap" href="{{get_the_permalink($post->ID)}}">Read more</a></p>
    </div>
  </div>
</div>
