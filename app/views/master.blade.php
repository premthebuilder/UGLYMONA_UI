<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Uglymona</title>
        <meta name="description" content="Meta content here">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

        <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

        <link rel="stylesheet" href="http://www.google.com/fonts#UsePlace:use/Collection:Lato:100,300,400,700,900|Open+Sans:400,300,600,700,800">
        @if(!Auth::check())
          <link rel="stylesheet" href="{{ asset('styles/styles.css') }}">
        @else
          <link rel="stylesheet" href="{{ asset('styles/app.css') }}">
        @endif
        <script src="{{ asset('scripts/modernizr.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container {{ Request::is('/') ? 'home' : '' }}">
          <header>
            <nav class="navbar row">
              <section class="logo">
                <h1><a href="{{ route('site.home') }}">Uglymona</a></h1>
              </section>
              <!-- logo ends -->

              <section class="navigation clearfix">
                <ul class="nav left">
                  <li class="active"><a href="{{ route('site.home') }}">Home</a></li>
                  <li class="has-dropdown">
                    <a href="#">Mona's Rooms</a>
                    <ul class="dropdown">
                      <li><a href="#">Photo wheel</a></li>
                      <li><a href="#">Quest bar</a></li>
                      <li><a href="#">Advice room</a></li>
                      <li><a href="#">Wish room</a></li>
                      <li><a href="#">Video room</a></li>
                    </ul>
                  </li>
                  <li><a href="#">About</a></li>
                  <!-- <li><a href="{{ route('site.contact') }}">Contact</a></li> -->
                </ul><!-- left nav ends -->

                @if(!Auth::check())
                  <ul class="nav right">
                    <li><a href="{{ route('session.create') }}">Login</a></li>
                    <li><a href="{{ route('session.new') }}">Register</a></li>
                    <li class="has-dropdown">
                      <a href="#">Change language</a>
                      <ul class="dropdown">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Espanol</a></li>
                      </ul>
                    </li>
                  </ul>
                @else
                  <ul class="nav right">
                    <li class="has-dropdown">
                      <a href="#">Welcome {{ Auth::user()->email }}</a>
                      <ul class="dropdown">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Account settings</a></li>
                        <li><a href="#">Privacy settings</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="{{ route('session.logout') }}">Logout</a></li>
                      </ul>
                    </li>
                  </ul><!-- right nav ends -->
                @endif
              </section>
            </nav>

            <section class="masthead">
              @yield('masthead')
            </section>
          </header>
          <!-- header ends -->


          <section class="content">
            @yield('content')
          </section>
          <!-- content ends -->

          <footer>
            <div class="row">
              <div class="large-12 columns">
                <p class="copyright left">&copy; UglyMona, Inc.copyright 2013 English, U.S.</p>
                <ul class="footlinks inline-list right">
                  <li><a href="#">Photo wheel</a></li>
                  <li><a href="#">Quest bar</a></li>
                  <li><a href="#">Advice room</a></li>
                  <li><a href="#">Wish room</a></li>
                  <li><a href="#">Video room</a></li>
                  <li><a href="#">Terms</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </footer>
          <!-- footer ends -->

        </div>
        <!-- main container ends -->

        <script src="{{ asset('scripts/structure.js') }}"></script>
        <script src="{{ asset('scripts/app.js') }}"></script>
    </body>
</html>