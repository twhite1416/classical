{{--
  Template Name: Front Page
--}}

@extends('layouts.app')
@section('custom-header')
  @while(have_posts()) @php(the_post())
    @include('partials.home-carousel')

    <div class="columns-bg home-cards">
      <div class="container">
        <div class="row align-items-stretch">
          @query([
            'post_type' => 'post',
            'posts_per_page' => 1,
            'post_status' => 'publish',
            'category_name' => 'blog'
          ])
          @posts
          <div class="col-lg-4">
            <div class="card symposium">
              @hasfield('featured_image')
                @include('partials.content-single-image')
              @endfield
              <div class="card-body">
                <h5 class="card-title"><a href="@permalink">@title</a></h5>
                <span class="author-line">@include('partials.entry-meta')</span>
                <p class="card-text">@excerpt</p>
              </div>
            </div>
          </div>
          @endposts

          @query([
            'post_type' => 'papers',
            'posts_per_page' => 1,
            'post_status' => 'publish'
          ])
          @posts
          <div class="col-lg-4 pt-5 pt-sm-5 pt-md-5 pt-lg-0 pt-xl-0">
            <div class="card leadership">
              @hasfield('featured_image')
                @include('partials.contant-single-image')
              @else
                <img src="@asset('images/leadership.jpg')" class="card-img-top" alt="...">
              @endfield
              <div class="card-body">
                <h5 class="card-title"><a href="@permalink">@title</a></h5>
                <span class="author-line">@include('partials.entry-meta')</span>
                <p class="card-text">@excerpt</p>
              </div>
            </div>
          </div>
          @endposts

          <div class="col-lg-4 pt-5 pt-sm-5 pt-md-5 pt-lg-0 pt-xl-0">
            <div class="card school">
              <img src="@asset('images/school.jpg')" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title"><a href="/find-a-school">Find a Classical Education Academy in your area.</a></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/find-a-school" class="btn btn-outline-gold" role="button">Find a School</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
