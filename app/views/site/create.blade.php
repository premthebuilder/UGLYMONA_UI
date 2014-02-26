@extends('master')

@section('masthead')
  <div class="heading row">
    <div class=" large-centered large-6 columns">
      <!-- <img src="{{ asset('images/session.png') }}" alt="Register now"> -->
      <h2 class="strike"><span>Register now</span></h2>
      <p><span class="thin">You'll Be Glad</span><span class="thick"> That You Did!</span></p>
    </div>
  </div>
@stop

@section('content')
  <section class="session">
    <div class="row collapse">
      <h2 class="pstate">Login / Registration</h2>
      <div class="session-form row">
        <div class="session-form-inside logb large-6 columns">
          <h4>Already a member? <span>Login Now!</span></h4>
          @if(Session::has('login_error'))
            <div class="alert-box alert">
              Invalid Username or Password
            </div>
          @endif
          {{ Form::open(['route' => 'session.create', 'autocomplete' => 'off', 'novalidate' => '']) }}

            <div class="row collapse">
              <div class="large-12 columns">
                {{ Form::text('email', Input::old('email'), ['placeholder' => 'Email address', 'class' => $errors->first('email') ? 'error form-input' : 'form-input']) }}
                @if($errors->first('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                @endif
              </div>
            </div>

            <div class="row collapse">
              <div class="large-12 columns">
                {{ Form::password('password', ['placeholder' => 'Password', 'class' => $errors->first('password') ? 'error form-input' : 'form-input']) }}
                @if($errors->first('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                @endif
              </div>
            </div>

            <div class="row collapse">
              <div class="large-12 columns">
                {{ Form::submit('Login', ['class' => 'form-button button radius expand']) }}
              </div>
            </div>

            <div class="row collapse">
              <div class="left large-6 columns">
                {{ Form::checkbox('remember', 1, false, ['id' => 'remember']) }}
                <label for="remember" class="form-label">Remember me</label>
              </div>
              <div class="right large-6 columns">
                <a href="#" class="form-link">Forgot your password ?</a>
              </div>
            </div>

          {{ Form::close() }}
        </div>
        <div class="session-form-inside regbt large-6 columns">
          <h4>Not a member yet? <span>Join Now!</span></h4>
          <div class="row collapse">
            <div class="large-12 columns">
              <p>
                Everyday hundreds of people join Uglymona - the leading community for singles. Our easy features, thousands of members, and countless success stories make this the place to meet someone special.
              </p>
              <p class="connect">Connect with hundreds of thousands of singles around the world</p>
              <a href="{{ route('session.new') }}" class="form-button button radius expand">Click to continue</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop