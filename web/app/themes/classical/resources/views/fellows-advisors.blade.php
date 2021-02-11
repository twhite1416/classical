{{--
  Template Name: Fellows & Advisors Template
--}}
@extends('layouts.app')

@section('custom-header')
  @include('partials.color-header')
@endsection

@section('content')
  <nav id="fellows-advisors-nav">
    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
      <a class="nav-link active col-5 space" id="nav-advisors-tab" data-toggle="tab" href="#nav-advisors" role="tab" aria-controls="nav-advisors" aria-selected="true">
        <h2>Advisory Council</h2>
        <p>@field('advisory_council_tab')</p>
      </a>
      <a class="nav-link col-5 space" id="nav-fellows-tab" data-toggle="tab" href="#nav-fellows" role="tab" aria-controls="nav-fellows" aria-selected="false">
        <h2>Fellows</h2>
        <p>@field('fellows_tab')</p>
      </a>
    </div>
  </nav>
  <div class="tab-content" id="fellows-advisors-tabContent">
    <div class="tab-pane fade show active" id="nav-advisors" role="tabpanel" aria-labelledby="nav-advisors-tab">
      <div class="row align-items-stretch">
        @query([
          'post_type' => 'advisory_council'
        ])

        @posts
          @include('partials.advisor-card')  
        @endposts
      </div>
    </div>
    <div class="tab-pane fade" id="nav-fellows" role="tabpanel" aria-labelledby="nav-fellows-tab">
      <div class="row">
        @query([
          'post_type' => 'fellows'
        ])

        @posts
          @include('partials.advisor-card')  
        @endposts
      </div>
    </div>
  </div>
@endsection
