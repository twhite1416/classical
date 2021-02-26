<div class="virtue-magazine-module">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 col-sm-12 space intro">
        <p class="display-4">VIRTUE</p>
        <p class="intro-content">Virtue is the flagship publication of the Institute for Classical Education. It disseminates stories, ideas, research and experiences in classical education to readers across the nation, helping them pursue the classical ideals of truth, goodness, and beauty.</p>
        <h3>Subscribing to VIRTUE's mailing list is absolutely free.</h3>
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
        <img class="img-fluid" alt="Virtue Magaizine Issue @field('issue_number')" src="@field('issue_image')" />
        @endposts
      </div>
      <div class="col-lg-4 col-sm-12 space">
        @shortcode('[hf_form slug="virtue-newsletter-signup"]')
      </div>
    </div>
  </div>
</div>
