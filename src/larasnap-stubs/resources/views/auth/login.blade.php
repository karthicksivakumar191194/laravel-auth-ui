@extends('layouts.app', ['class' => 'login'])
@section('content')
<div class="wrap-login100">
   <div class="login100-pic js-tilt" data-tilt>
      <a href={{ url('/') }}><img src="{{ asset('vendor/larasnap-auth/images/img-01.png') }}" alt="IMG"></a>
   </div>
   <form class="login100-form validate-form login-form" method="POST" action="{{ route('login') }}">
      @csrf
      @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
      @endif
      <span class="login100-form-title">
      {{ __('Login') }}
      </span>
      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
         <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
         <span class="focus-input100"></span>
         <span class="symbol-input100">
         <i class="fa fa-envelope" aria-hidden="true"></i>
         </span>
      </div>
      @error('email')
      <p class="invalid-feedback d-block mt-10 validation-error">{{ $message }}</p>
      @enderror
      <div class="wrap-input100 validate-input" data-validate = "Password is required">
         <input class="input100" type="password" name="password" placeholder="Password">
         <span class="focus-input100"></span>
         <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
         </span>
      </div>
      @error('password')
      <p class="invalid-feedback d-block mt-10 validation-error">{{ $message }}</p>
      @enderror
      <div class="contact100-form-checkbox">
         <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
         <label class="label-checkbox100" for="ckb1">
         {{ __('Remember me') }}
         </label>
      </div>
      <div class="container-login100-form-btn">
         <button class="login100-form-btn">
         {{ __('Login') }}
         </button>
      </div>
      @if (Route::has('password.request'))
      <div class="text-center p-t-12">
         <span class="txt1">
         {{ __('Forgot') }}
         </span>
         <a class="txt2" href="{{ route('password.request') }}">
         {{ __('Username / Password?') }}
         </a>
      </div>
      @endif
      @if (Route::has('register'))
      <div class="text-center p-t-12">
         <a class="txt2" href="{{ route('register') }}">
         {{ __('Create your Account') }}
         <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
         </a>
      </div>
      @endif
   </form>
</div>
@endsection