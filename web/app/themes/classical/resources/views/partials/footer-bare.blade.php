<footer class="content-info site-footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3 pb-3">
        @svg('images/ice_logo_footer.svg', 'img-fluid')
      </div>
      <div class="col-lg-4 pb-3 social-media">
        @hasoption('accounts')
          @options('accounts')
            <a href="@sub('home_url')" target="_blank">
              @hassub('account')
                  <i class="fab fa-2x mx-2 fa-@sub('account')"></i>
              @endsub
            </a>
          @endoptions
      @endoption
      </div>
      <div class="col-lg-4">
        @svg('images/gh_footer_logo.svg', 'img-fluid')
      </div>
  </div>
</footer>
