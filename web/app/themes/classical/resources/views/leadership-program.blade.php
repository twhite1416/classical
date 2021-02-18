{{--
  Template Name: Leadership Program
--}}
@include('partials.header')
@while(have_posts()) @php(the_post())
<div class="lp-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        @svg('images/apex_logo.svg')
      </div>
      <div class="col-lg-6">
        <p>@field('header_content')</p>

        @group('registration_url')
        <a href="@sub('link')" class="btn btn-outline-white" role="button">@sub('button_text')</a>
        @endgroup

      </div>
    </div>
  </div>
</div>

<div class="intro">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <p class="large-text border-after">Why APEX?</p>
        <ul>
          <li>The APEX leadership program is designed to help you to realize your leadership potential and to become an Exemplary School Leader.</li>
          <li>APEX offers a unique on-line case-study approach to learning, that combines the profundity of classical wisdom with the power of modern management techniques.</li>
          <li>Unlike standard leadership programs, APEX integrates the nuts and bolts of school management with a virtue-focused, Aristotelian inspired curriculum.</li>
          <li>Actualize your potential and help build the community of classical schools.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-lg-6">
            <p class="medium-text">What will<br>you learn?</p>
            <ul>
              <li>Become an exemplary school leader, combining practical wisdom (phronesis) with managerial competence.</li>
              <li>Learn to build and manage teams and people.</li>
              <li>Acquire the necessary managerial skills needed to run a school.</li>
              <li>Master the fundamentals of strategic marketing, school governance, enrollment, hiring, and community relations.</li>
              <li>Learn how to build and nurture a classically based, virtue-centered school culture.</li>
              <li>Join a network and community of classical school leaders.</li>
            </ul>
          </div>
        
          <div class="col-lg-6">
            <p class="medium-text">Who is<br>APEX for?</p>
            <ul>
              <li>Teachers who aspire to become school leaders</li>
              <li>Current leaders or administrators who want to advance their career</li>
            </ul>
            @group('registration_url')
              <a href="@sub('link')" class="btn btn-outline-primary" role="button">@sub('button_text')</a>
            @endgroup
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="lp-icons">
  <div class="container">
    <div class="row align-items-start justify-content-around">
      <div class="col-lg-3 col-md-6 col-sm-8 col-12">
        <div class="lp-icon">
          <img src="@asset('images/icon_case_study.svg')" />
          <p>Case Study analysis and teaching</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-8 col-12">
        <div class="lp-icon">
          <img src="@asset('images/icon_portfolio.svg')" />
          <p>Professional portfolio — build all the tools you will need to succeed as a school leader</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-8 col-12">
        <div class="lp-icon">
          <img src="@asset('images/icon_network.svg')" />
          <p>Online courses with additional coaching and bi-monthly meetings</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-8 col-12">
        <div class="lp-icon">
          <img src="@asset('images/icon_online_content.svg')" />
          <p>Classical wisdom combined with the power of modern management techniques</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="schedule">
  <div class="container">
    <div class="row">
      @group('schedule_and_registration')
      <div class="col-lg-6">
        <p class="large-text">Schedule and registration</p>
        <h2>@sub('subtitle')</h2>
        <p>@sub('content')</p>
      </div>
      @endgroup
      
      @hasfield('course_schedule')
      <div class="col-lg-6">
        @fields('course_schedule')
        <div class="row">
          <div class="col">
            <h3>@sub('course_number')</h3>
            <p class="course-name">@sub('course_name')</p>
            <p><strong>@sub('start_date')</strong></p>
            <p>@sub('course_description')</p>
          </div>
        </div>
        @endfields
      </div>
      @endfield
    </div>
  </div>
</div>

@hasfield('bottom_registration_banner')
<div class="register-today">
  <div class="container">
    <div class="row justify-content-center">
      @group('bottom_registration_banner')
      <div class="col-lg-7 text-center">
        <h2>@sub('title')</h2>
        <p>@sub('content')</p>
        @group('registration_url')
        <a href="@sub('link')" class="btn btn-outline-white" role="button">@sub('button_text')</a>
        @endgroup
      </div>
      @endgroup
    </div>
  </div>
</div>
@endfield
@endwhile
@include('partials.footer-bare')


