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
                  Leadership Roles
                </h1>
                <p>Welcome to the Institute for Classical Education Job Board. In supporting the growth of classical education across the US, we are hosting this resource for the leaders and aspiring leaders of our community to connect.</p>
                
                <p>Please select a state, choose a job category or search by key word to find current classical education positions.</p>

                <p>If you are interested in posting a job to this board select the <a href="/post-a-job">Post a Job</a> button below and follow the instructions.</p>
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
