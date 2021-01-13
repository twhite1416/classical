@include('partials.header')
@yield('custom-header')

<div class="container">
  <main class="main">
    @yield('content')
  </main>
</div>

@include('partials.footer')
