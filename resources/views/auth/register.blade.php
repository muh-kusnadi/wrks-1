@extends('layouts.master-login')

@section('content')
<div class="login-box">

    <div class="login-logo">
        <a href="{{URL::to('/')}}"><b>Workshop</b> Web Dev</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">{{ __('Register') }} a new membership</p>

        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="form-group has-feedback @error('name') has-error @enderror">
                <input type="text" class="form-control" placeholder="{{ __('Name') }}" value="{{ old('name') }}" id="name" name="name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @error('name')
                    <span class="help-block">{{ $message }}</span>
                @enderror
            </div>

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

            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" id="password-confirm" name="password_confirmation">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-8"></div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Register') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
        @endif
      <a href="{{ route('login') }}" class="text-center">I already have a membership</a>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
@endsection
