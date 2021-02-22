{{--
  Template Name: Fellows & Advisors Template
--}}
@extends('layouts.app')

@section('custom-header')
  @include('partials.color-header')
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
  <nav id="fellows-advisors-nav">
    <div class="nav nav-tabs justify-content-center flex-column flex-lg-row" id="nav-tab" role="tablist">
      @group('advisory_council_tab')
      <a class="nav-link active col-lg-5 space" id="nav-advisors-tab" data-toggle="tab" href="#nav-advisors" role="tab" aria-controls="nav-advisors" aria-selected="true">
        <h2>@sub('tab_title')</h2>
        <p class="nav-content">@sub('tab_description')</p>
      </a>
      @endgroup

      @group('fellows_tab')
      <a class="nav-link col-lg-5 space" id="nav-fellows-tab" data-toggle="tab" href="#nav-fellows" role="tab" aria-controls="nav-fellows" aria-selected="false">
        <h2>@sub('tab_title')</h2>
        <p class="nav-content">@sub('tab_description')</p>
      </a>
      @endgroup
    </div>
  </nav>
  <div class="tab-content" id="fellows-advisors-tabContent">
    <div class="tab-pane fade show active" id="nav-advisors" role="tabpanel" aria-labelledby="nav-advisors-tab">
      <div class="row align-items-stretch">
        @query([
          'post_type' => 'advisory_council',
          'posts_per_page' => -1,
          'post_status' => 'publish'
        ])

        @posts
          @include('partials.advisor-card')  
        @endposts
      </div>
    </div>
    <div class="tab-pane fade" id="nav-fellows" role="tabpanel" aria-labelledby="nav-fellows-tab">
      <div class="row">
        @query([
          'post_type' => 'fellows',
          'posts_per_page' => -1,
          'post_status' => 'publish'
        ])

        @posts
          @include('partials.advisor-card')  
        @endposts
      </div>
    </div>
  </div>
  @endwhile
@endsection
