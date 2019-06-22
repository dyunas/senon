@extends('layouts.app')

@section('content')
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
  <div class="text-center">
    <a href="{{ route('login') }}" class="logo" style="font-size:28px!important;"><span>Senon Insurance<span><br/>Adjusters &amp; Appraisers</span></span></a>
  </div>
  <div class="m-t-40 card-box">
    <div class="text-center">
      <h4 class="text-uppercase font-bold mb-0">Sign In</h4>
    </div>
    <div class="p-20">
      <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="post" id="loginForm">
        @csrf
        <div class="form-group">
          <div class="col-xs-12">
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" required data-parsley-required-message="Username is required" autocomplete="username" autofocus>

            @error('username')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required data-parsley-required-message="Password is required" autocomplete="current-password">

            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>

        <div class="form-group ">
          <div class="col-xs-12">
            <div class="checkbox checkbox-custom">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember me
              </label>
            </div>
          </div>
        </div>

        <div class="form-group text-center m-t-30">
          <div class="col-xs-12">
            <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>

            @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
            @endif
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- end card-box-->
</div>
<!-- end wrapper page -->

<!-- jQuery  -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/waves.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/jquery.core.js') }}"></script>
<script src="{{ asset('js/jquery.app.js') }}"></script>

<!-- Validation js (Parsleyjs) -->
<script type="text/javascript" src="{{ asset('plugins/parsleyjs/dist/parsley.min.js') }}"></script>
{{-- <script type="text/javascript" src="js/pages/login.js"></script> --}}
@endsection
