<footer class="content-info site-footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-3 pb-3">
        <img alt="Institute for Classical Education" src="@asset('images/ice_logo_footer.svg')" class="img-fluid" />
      </div>
      <div class="col-lg-4 pb-3 social-media">
        @hasoption('accounts')
          @options('accounts')
            <a href="@sub('home_url')" target="_blank">
              @hassub('account')
                  <i alt="@sub('account')" class="fab fa-2x mx-2 fa-@sub('account')"></i>
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
