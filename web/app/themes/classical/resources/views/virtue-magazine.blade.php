{{--
  Template Name: Virtue Magazine
--}}

@include('partials.header')
@include('partials.virtue-header')

<div class="overlay-header">
  <div class="container">
    @include('partials.page-header')
    <main class="main space">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="content">
            <h2>Issue 06 <span class="color-gold">|</span> Pedagogy</h2>
            <p>Each issue of Virtue will have articles and interviews from the nation’s leading intellectuals; profiles of outstanding teachers, alumni, and students; succinct descriptions of classical education—what, how, and why we teach the liberal arts; essays by leading academic scholars, relating their work to classical education; and an assortment of topics to keep us all thinking afresh, as we continue to pursue the classical ideals of truth, goodness, and beauty</p>
          </div>
          <div class="form pt-3">
            <h3>Sign-up today to join our community and receive your first copy.</h3>
            <img class="img-fluid" src="@asset('images/form.jpg')" />
          </div>
        </div>
        <div class="col-lg-4">
          <img class="img-fluid" src="@asset('images/virtue_mag.png')" />
        </div>
    </main>
  </div>
</div>

<div class="single-cards">
  <div class="container">
    <div class="row">
      @include('partials.single-card')
    </div>
  </div>
</div>

@include('partials.profile-module')

@include('partials.footer')
