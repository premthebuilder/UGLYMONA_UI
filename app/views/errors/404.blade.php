@extends('master')

@section('masthead')
  <div class="heading row">
    <div class="large-centered large-6 columns">
      <h2><span class="strike">Not Found</span></h2>
      <p><span class="thin">The page has been</span><span class="thick"> moved or removed!</span></p>
    </div>
  </div>
@stop

@section('content')
  <section class="missing">
      <div class="row">
        <h2 class="pstate">Uh oh, that page couldn't be found</h2>
        <div class="message row">
          <div class="large-centered large-6 columns">
            <p>Try checking your URL for typos or go back to the home page and try again.</p>
          </div>
        </div>
      </div>
  </section>
  <!-- contact page ends -->
@stop