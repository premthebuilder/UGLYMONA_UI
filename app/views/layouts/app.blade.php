<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Uglymona - Dashboard</title>

  <!-- Meta tags go here -->
  <meta name="description" content="Meta content here">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

  <!-- Scripts and links go here -->
  <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
  <script src="{{ asset('scripts/modernizr.js') }}"></script>
</head>
<body class="app">
  <div class="siteContainer">
    <header>
      @include('partials.header')
    </header>

    <section class="content">
      @yield('content')
    </section>
    <!-- content ends -->


    <footer >
      <div class="row clearfix">
        <div class="large-8 medium-8 columns hide-for-small-only">
          <ul class="footlinks inline-list">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="#">Help &amp; FAQ</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="large-4 medium-4 small-centered columns">
          <p class="copyright text-right">&copy; Uglymona Inc, 2014. All Rights Reserved</p>
        </div>
      </div>
    </footer>
  </div>

  <!-- scripts go here -->
  <script src="{{ asset('scripts/structure.js') }}"></script>
  <script src="{{ asset('scripts/app.js') }}"></script>
  @yield('footer')
  <!-- typekit fonts -->

</body>
</html>
<!-- footer ends -->
