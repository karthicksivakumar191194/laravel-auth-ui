<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'LaraSnap') }}</title>
      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/larasnap-auth/vendor/bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/larasnap-auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/larasnap-auth/css/util.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('vendor/larasnap-auth/css/main.css') }}">
   </head>
   <body class="larasnap {{ $class ?? '' }}">
      <div class="limiter">
         @auth
         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">
               {{ config('app.name', 'LaraSnap') }}
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           {{ __('Logout') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                           </form>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         @endauth
         <div class="container-login100">
            @yield('content')
         </div>
      </div>
      <!-- Scripts -->
      <script src="{{ asset('vendor/larasnap-auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
      <script src="{{ asset('vendor/larasnap-auth/vendor/bootstrap/js/popper.js') }}"></script>
      <script src="{{ asset('vendor/larasnap-auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('vendor/larasnap-auth/vendor/tilt/tilt.jquery.min.js') }}"></script>
      <script >
         $('.js-tilt').tilt({
         	scale: 1.1
         })
      </script>
      <script src="{{ asset('vendor/larasnap-auth/js/main.js') }}"></script>
   </body>
</html>