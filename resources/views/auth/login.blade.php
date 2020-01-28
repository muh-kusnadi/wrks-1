@extends('layouts.master-login')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Workshop</b> Web Dev</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">{{ __('Login') }} to start your session</p>

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="form-group has-feedback @error('email') has-error @enderror">
          <input type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" id="email" name="email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @error('email')
            <span class="help-block">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group has-feedback @error('password') has-error @enderror">
          <input type="password" class="form-control" placeholder="{{ __('Password') }}" id="password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
            <span class="help-block">{{ $message }}</span>
        @enderror
        </div>

        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
    @endif
      <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
@endsection
