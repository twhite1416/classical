@if(get_field('author'))
<img class="rounded-circle img-fluid" src="@php( the_field('image', get_field('author')->ID))" alt="@title( get_field('author')->ID)" class="img-fluid" style="object-fit: cover" />
@elseif(get_field('custom_author_entry'))
  @group('custom_author_entry')
    @hassub('custom_image')
    <img class="rounded-circle img-fluid" src="@sub('custom_image')" alt="@sub('custom_name')" class="img-fluid" style="object-fit: cover" />
    @endsub
  @endgroup
@endif
