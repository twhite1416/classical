<div class="virtue-magazine-module">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-sm-12 space intro">
        <p class="display-4">@option('title_vm')</p>
        <p class="intro-content">@option('description_vm')</p>
        <h3>@option('subtitle_vm')</h3>
      </div>
      <div class="col-lg-4 col-sm-12 space magazine-image text-center">
        @query([
          'post_type' => 'virtue_magazine',
          'post_status' => 'publish',
          'posts_per_page' => 1,
          'orderby' => 'date',
          'order' => 'DESC'
        ])
        @posts
        <img class="img-fluid" alt="VIRTUE Magaizine Issue @field('issue_number')" src="@field('issue_image')" />
        @endposts
      </div>
      <div class="col-lg-4 col-sm-12 space">
        @shortcode('[hf_form slug="virtue-newsletter-signup"]')
      </div>
    </div>
  </div>
</div>
