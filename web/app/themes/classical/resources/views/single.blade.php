@extends('layouts.app')

@section('custom-header')
  @include('partials.color-header')
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-single-image-header')
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
