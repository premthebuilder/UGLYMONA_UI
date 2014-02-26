<div class="row clearfix">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name">
        <h1><a href="{{ route('home') }}">Uglymona</a></h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>
    <!-- title area ends -->

    <section class="top-bar-section">
        <ul class="main-nav left">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Rooms</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="main-nav right">
            <li><a href="{{ route('session.create') }}">Login</a></li>
            <li><a href="{{ route('session.create') }}">Register</a></li>
            <li class="has-dropdown">
              <a href="#">Change language</a>
              <ul class="dropdown">
                <li><a href="#">English</a></li>
                <li><a href="#">Espanol</a></li>
              </ul>
            </li>
        </ul>
    </section>
    <!-- topbar section ends -->
  </nav>
  <!-- nav ends -->
</div>