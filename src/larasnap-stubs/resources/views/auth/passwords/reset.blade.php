@extends('layouts.app', ['class' => 'reset-password'])
@section('content')
<div class="wrap-login100">
   <div class="login100-pic js-tilt" data-tilt>
      <a href={{ url('/') }}><img src="{{ asset('vendor/larasnap-auth/images/img-01.png') }}" alt="IMG"></a>
   </div>
   <form class="login100-form validate-form reset-password-form" method="POST" action="{{ route('password.update') }}">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">
      <span class="login100-form-title">
      {{ __('Reset Password') }}
      </span>
      <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
         <input class="input100" type="text" name="email" placeholder="Email" value="{{ $email ?? old('email') }}">
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
      <div class="wrap-input100 validate-input" data-validate = "Confirm Password is required">
         <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
         <span class="focus-input100"></span>
         <span class="symbol-input100">
         <i class="fa fa-lock" aria-hidden="true"></i>
         </span>
      </div>
      <div class="container-login100-form-btn">
         <button class="login100-form-btn">
         {{ __('Reset Password') }}
         </button>
      </div>
   </form>
</div>
@endsection