@extends('master')

@section('masthead')
  <section class="dash-mast">
    <div class="row">
      <div class="large-8 columns">
        <div class="pimage left">
          <img src="http://placehold.it/75x75" alt="Profile image">
        </div>
        <div class="pnamlo left">
          <p>Full membership</p>
          <h3>Martha Johnson, 26 y.o.<br/><span>Cleveland, OH</span></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-8 columns">
        <div class="pinfo">
          <p>Single | Seeking Men (25-35) | High education | For marriage | Non-smoker | Want children</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-8 columns">
        <div class="pabout">
          <h4>About me</h4>
          <p>Real love is not based on romance, candle light dinner and walks along the beach. In fact, is based on respect, compromise, care and trust.! 3 things I want in a relationship: Eyes that wont cry, lips than wont lie, and love that wont die.</p>
        </div>
      </div>
    </div>

    <div class="paction">
      <div class="row sollapse">
        <div class="large-12 columns">
          <ul class="inline-list">
            <li class="dprofile"><a href="#">Profile</a></li>
            <li class="dfriends"><a href="#">Friends</a></li>
            <li class="dcom"><a href="#">Comments</a></li>
            <li class="dlikes"><a href="#">Likes</a></li>
            <li class="dphoto"><a href="#">Photos</a></li>
            <li class="dvideo"><a href="#">Videos</a></li>
            <li class="dmember"><a href="#">Membership</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@stop

@section('content')
<section class="pcontent">
  <div class="row">
    <div class="large-12 columns">
      <h2 class="pstate">My Friends (297)</h2>
    </div>
  </div>
</section>
@stop