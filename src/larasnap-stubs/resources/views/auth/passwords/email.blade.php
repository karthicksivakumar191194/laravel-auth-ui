@extends('layouts.app', ['class' => 'email-reset-password'])
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
   {{ session('status') }}
</div>
@endif
<div class="wrap-login100">
   <div class="login100-pic js-tilt" data-tilt>
      <a href={{ url('/') }}><img src="{{ asset('vendor/larasnap-auth/images/img-01.png') }}" alt="IMG"></a>
   </div>
   <form class="login100-form validate-form email-reset-password-form" method="POST" action="{{ route('password.email') }}">
      @csrf
      <span class="login100-form-title">
      {{ __('Reset Password') }}
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
      <div class="container-login100-form-btn">
         <button class="login100-form-btn">
         {{ __('Send Password Reset Link') }}
         </button>
      </div>
   </form>
</div>
@endsection