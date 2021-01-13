{{--
  Template Name: Find a School
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row">
      <div class="col">
        <iframe src="https://batchgeo.com/map/f0a726285be76dc6dc336e561b0726e6" frameborder="0" width="100%" height="550" sandbox="allow-top-navigation allow-scripts allow-popups allow-same-origin allow-modals allow-forms" style="border:1px solid #aaa;"></iframe>
        <p><small>View <a href="https://batchgeo.com/map/f0a726285be76dc6dc336e561b0726e6">Find a Classical Education Academy</a> in a full screen map</small>
        </p>
      </div>
    </div>
  @endwhile
@endsection
