<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg" role="navigation">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ home_url('/') }}">@svg('images/ice_logo.svg')</a>
      <div class="collapse navbar-collapse nav-primary ml-auto"  id="navbarSupportedContent">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'navbar-nav nav ml-auto']) !!}
        @endif
      </div>
      <!-- <form class="form-inline collapse navbar-collapse pull-right">
      <button class="btn btn-outline-success" type="button">Main button</button>
      </form> -->
    </nav>
  </div>
</header>
