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
          <div class="col-md-4">
            <div class="card symposium">
              <img src="@asset('images/symposium.jpg')" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Teaching History, Education, and Meaning, With Critical Thinking </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="card leadership">
              <img src="@asset('images/leadership.jpg')" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">The College-Dating Game</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 pt-5 pt-sm-5 pt-md-0 pt-lg-0 pt-xl-0">
            <div class="card school">
              <img src="@asset('images/school.jpg')" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title">Find a Classical Education Academy in your area.</h5>
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
