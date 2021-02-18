@if(get_field('hide_author') !== true)
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
@endif
