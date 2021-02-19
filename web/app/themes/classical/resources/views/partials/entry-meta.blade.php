{{-- @if(get_field('hide_author') !== true)
  @if(get_field('author'))
    @include('partials.custom-entry-meta')
  @elseif(get_field('custom_author_entry'))
    @include('partials.custom-entry-meta')
  @else
  <p class="byline author vcard">
    <span>{{ __('By', 'sage') }}</span>
      {{ get_the_author_meta('display_name') }}
    |
    <time class="updated" datetime="{{ get_post_time('c', true) }}">
    {{ get_the_date() }}
  </time>  
  </p>
  @endif
@endif --}}

@if(get_field('hide_author') !== true)
  @group('custom_author_entry')
    @set($cname, get_sub_field('custom_name'))
    @set($cimage, get_sub_field('custom_name'))
  @endgroup

  <p class="byline author vcard">
    <span>{{ __('By', 'sage') }}</span>
      @if(get_field('author'))
        @title( get_field('author'))
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
