@extends('master')

@section('masthead')
  <div class="heading row">
    <div class="large-centered large-6 columns">
      <!-- <img src="{{ asset('images/session.png') }}" alt="Register now"> -->
      <h2 class="strike"><span>Register now</span></h2>
      <p><span class="thin">You'll Be Glad</span><span class="thick"> That You Did!</span></p>
    </div>
  </div>
@stop

@section('content')
  <div class="session">
    <div class="row-collapse">
      <section class="session-forms">
        <div class="row collapse">
          <h2 class="pstate">New to Uglymona?</h2>
          <div class="large-12 columns">
            <div class="session-form row">
              <div class="session-form-inside large-centered large-6 columns">
                <h4 class="text-center">Create an account below</h4>
                {{ Form::open(['route' => 'session.new', 'autocomplete' => 'off', 'novalidate' => '']) }}
                  <div class="row collapse">
                    <div class="large-centered large-12 columns">
                      {{ Form::text('username', Input::old('username'), ['placeholder' => 'Username', 'class' => $errors->first('username') ? 'error form-input' : 'form-input']) }}
                      @if($errors->first('username'))
                        <span class="error">{{ $errors->first('username') }}</span>
                      @endif
                    </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-centered large-12 columns">
                      {{ Form::text('email', Input::old('email'), ['placeholder' => 'Email address', 'class' => $errors->first('email') ? 'error form-input' : 'form-input']) }}
                      @if($errors->first('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-centered large-12 columns">
                      {{ Form::password('password', ['placeholder' => 'Password', 'class' => $errors->first('password') ? 'error form-input' : 'form-input']) }}
                      @if($errors->first('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-12 columns">
                      {{ Form::checkbox('agree', 1, false, ['id' => 'agree', 'class' => 'form-input']) }}
                      <label for="agree" class="form-label">I agree to the terms and conditions (subjected to change)</label>
                    </div>
                  </div>

                  <div class="row collapse">
                    <div class="large-12 columns">
                      {{ Form::submit('Create an account', ['class' => 'form-button button radius expand']) }}
                    </div>
                  </div>

                {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
@stop