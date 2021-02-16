<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
      <a class="navbar-brand" href="{{ home_url('/') }}">@svg('images/ice_logo.svg')</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-primary ml-auto"  id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav ml-auto navbar-right']) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
