{{--
  Template Name: Leadership Roles
--}}

@extends('layouts.job')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row">
      <div class="col-lg-12 mx-auto">
        <article @php(post_class())>
          <header class="container job-header">
            <div class="row">
              <div class="col-lg-5">
                <h1 class="entry-title">
                  @title
                </h1>
                @php(the_content())
              </div>
              <div class="col-lg-7">
                <div id="vmap" style="width: 100%; height: 400px;"></div>
              </div>
            </div>
          </header>

          <div class="entry-content">
            @shortcode('[jobs]')
          </div>

        </article>
      </div>
    </div>
  @endwhile
@endsection
