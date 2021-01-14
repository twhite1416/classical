<footer class="content-info">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-3">
        @svg('images/ice_logo_footer.svg')
      </div>
      <div class="col-3 social-media">
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
      <div class="col-6 text-center">
        @svg('images/gh_footer_logo.svg')
      </div>
  </div>
</footer>
