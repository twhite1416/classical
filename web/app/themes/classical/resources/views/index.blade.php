@extends('layouts.app')
@section('custom-header')
  @include('partials.color-header')
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12 mx-auto">
      @noposts
        <x-alert type="warning">
          {!! __('Sorry, no results were found.', 'sage') !!}
        </x-alert>

        {!! get_search_form(false) !!}
      @endnoposts

      @query([
        'post_type' => 'post',
        'posts_per_page' => 1,
        'post_status' => 'publish'
      ])
      @posts
        @include('partials.content-first')
      @endposts
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8 mx-auto">
      @query([
        'post_type' => 'post',
        'offset' => 1,
        'posts_per_page' => 10,
        'post_status' => 'publish'
      ])
      @posts
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endposts

      @shortcode('[ajax_load_more post_type="post" posts_per_page="10" offset="11" max_pages="2"]')
    </div>
  </div>
@endsection
