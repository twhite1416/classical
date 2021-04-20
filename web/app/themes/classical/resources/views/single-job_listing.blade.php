@extends('layouts.app')

@section('custom-header')
  @include('partials.color-header')
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-single-image-header')
    <div class="row content-bg">
      <div class="col-lg-8 mx-auto">
        <article @php(post_class())>
          <header>
            <h1 class="entry-title">
              @title
            </h1>
          </header>

          <div class="entry-content">
            @php(the_content())
          </div>         
        </article>
      </div>
    </div>
  @endwhile
@endsection
