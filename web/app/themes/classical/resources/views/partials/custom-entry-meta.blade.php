<p class="byline author vcard">
  <span>{{ __('By', 'sage') }}</span>
    @if(get_field('author'))
      @title( get_field('author')->ID)
    @elseif(get_field('custom_name'))
      @group('custom_author_entry')
        @sub('custom_name')
      @endgroup
    @else
      @author()
    @endif
  |
  <time class="updated" datetime="{{ get_post_time('c', true) }}">
  {{ get_the_date() }}
</time>  
</p>
