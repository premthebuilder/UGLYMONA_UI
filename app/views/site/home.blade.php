@extends('master')

@section('masthead')
  <div class="heading row">
    <div class="large-centered large-8 columns">
      <!-- <img src="{{ asset('images/intro.png') }}" alt="Welcome to Uglymona"> -->
        <div class="large-centered large-6 columns">
          <p class="strike"><span class="thin">Welcome to</span></p>
        </div>
      <h2 class="uppercase">Uglymona</h2>
      <p><span class="thin">where who you are</span><span class="thick uppercase"> has never been so hot!</span></p>
    </div>
  </div>
@stop

@section('content')
  <section class="features">
    <div class="row">
        <h2>Register for free &amp; start searching your soulmate now !</h2>
        <div class="large12 columns">
          <div class="orbit-features hide-for-small-only" data-orbit>
            <div>
              <ul class="list medium-block-grid-3 large-block-grid-3">
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-pw.png') }}" alt="Photo Wheel"></a>
                  <p>Photo wheel</p>
                  <a href="#">Click here to see more</a>
                </li>
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-qb.png') }}" alt="Quest Bar"></a>
                  <p>Quest bar</p>
                  <a href="#">Click here to see more</a>
                </li>
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-vr.png') }}" alt="Video Room"></a>
                  <p>Video room</p>
                  <a href="#">Click here to see more</a>
                </li>
              </ul>
            </div>
            <div>
              <ul class="list medium-block-grid-3 large-block-grid-3">
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-pw.png') }}" alt="Photo Wheel"></a>
                  <p>Photo wheel</p>
                  <a href="#">Click here to see more</a>
                </li>
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-qb.png') }}" alt="Quest Bar"></a>
                  <p>Quest bar</p>
                  <a href="#">Click here to see more</a>
                </li>
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-vr.png') }}" alt="Video Room"></a>
                  <p>Video room</p>
                  <a href="#">Click here to see more</a>
                </li>
              </ul>
            </div>
            <div>
              <ul class="list medium-block-grid-3 large-block-grid-3">
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-pw.png') }}" alt="Photo Wheel"></a>
                  <p>Photo wheel</p>
                  <a href="#">Click here to see more</a>
                </li>
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-qb.png') }}" alt="Quest Bar"></a>
                  <p>Quest bar</p>
                  <a href="#">Click here to see more</a>
                </li>
                <li>
                  <a href="#" class="th"><img src="{{ asset('images/mona-vr.png') }}" alt="Video Room"></a>
                  <p>Video room</p>
                  <a href="#">Click here to see more</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </section>
@stop