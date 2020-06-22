@extends('layouts.app', ['class' => 'confirm'])
@section('content')
<div class="row justify-content-center">
<span class="login100-form-title">
{{ __('Confirm Password') }}
</span>
<div class="col-md-8">
   <div class="card">
      <div class="card-body">
         {{ __('Please confirm your password before continuing.') }}
         <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
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
            <div class="form-group row mb-0">
               <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                  {{ __('Confirm Password') }}
                  </button>
                  @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                  </a>
                  @endif
               </div>
            </div>
         </form>
         </di
      </div>
   </div>
</div>
@endsection