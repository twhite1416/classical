{{--
  Template Name: Fellows & Advisors Template
--}}
@php
  $data = [
    'name' => 'Mark Bauerlein, Ph.D.', 
    'title' => 'Department of English', 
    'location' => 'Emory University', 
    'text' => 'Mark Bauerlein earned his doctorate in English at UCLA in 1988. He has taught at Emory since 1989, with a two-and-a-half year break in 2003-05 to serve as the Director, Office of Research and Analysis, at the National Endowment for the Arts.'
  ];
@endphp

@extends('layouts.app')

@section('custom-header')
  @include('partials.color-header')
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    <nav id="fellows-advisors-nav">
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <a class="nav-link active col-5 space" id="nav-advisors-tab" data-toggle="tab" href="#nav-advisors" role="tab" aria-controls="nav-advisors" aria-selected="true">
          <h2>Advisory Council</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam sunt eveniet hic id atque sapiente et, dicta assumenda recusandae, illo voluptatem illum, ratione officia doloremque dolorem tempore.</p>
        </a>
        <a class="nav-link col-5 space" id="nav-fellows-tab" data-toggle="tab" href="#nav-fellows" role="tab" aria-controls="nav-fellows" aria-selected="false">
          <h2>Fellows</h2>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam sunt eveniet hic id atque sapiente et, dicta assumenda recusandae, illo voluptatem illum, ratione officia doloremque dolorem tempore. Similique, aliquid sed!</p>
        </a>
      </div>
    </nav>
    <div class="tab-content" id="fellows-advisors-tabContent">
      <div class="tab-pane fade show active" id="nav-advisors" role="tabpanel" aria-labelledby="nav-advisors-tab">
        <div class="row align-items-stretch">
          @include('partials.advisor-card', $data)
          @include('partials.advisor-card', $data)
          @include('partials.advisor-card', $data)
          @include('partials.advisor-card', $data)
        </div>
      </div>
      <div class="tab-pane fade" id="nav-fellows" role="tabpanel" aria-labelledby="nav-fellows-tab">
        <div class="row">
          @include('partials.advisor-card', $data)
          @include('partials.advisor-card', $data)
        </div>
      </div>
    </div>
    @include('partials.content-page')
  @endwhile
@endsection
