@extends('layouts.app')

@section('content')
<body class="login-page" style="min-height: 496.391px;">
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ url('/') }}"><b>Mac</b>ster</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">{{ __('Login') }}</p>
    
          <form action="{{ route('login') }} " method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="email" class="form-control @error('passowrd') is-invalid @enderror" placeholder="Email" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <span data-nordpass-uid="o0ynq1wgm79" style="width: 24px; min-width: 24px; height: 24px; background-image: url(&quot;chrome-extension://fooolghllnmhmmndgjiamiiodkpenpbb/icons/icon.svg&quot;); background-repeat: no-repeat; background-position: left center; background-size: auto; border: none; display: inline; visibility: visible; position: absolute; cursor: pointer; z-index: 1001; padding: 0px; transition: none 0s ease 0s; pointer-events: all; left: 234px; top: 6px;"></span></div>
            <div class="input-group mb-3">
              <input type="password" class="form-control @error('passowrd') is-invalid @enderror" placeholder="Password" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
              @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            <span data-nordpass-uid="xgvp9jwr90r" style="width: 24px; min-width: 24px; height: 24px; background-image: url(&quot;chrome-extension://fooolghllnmhmmndgjiamiiodkpenpbb/icons/icon.svg&quot;); background-repeat: no-repeat; background-position: left center; background-size: auto; border: none; display: inline; visibility: visible; position: absolute; cursor: pointer; z-index: 1001; padding: 0px; transition: none 0s ease 0s; pointer-events: all; left: 236px; top: 6px;"></span></div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                  <label for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
       
    
          <p class="mb-1">
            <a href="{{ route('password.request') }}">{{ __('Forgot your password') }}</a>
          </p>
          <p class="mb-0">
            <a href="{{ route('register') }} " class="text-center">{{ __('Create new account') }}</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    
    
    </body>
@endsection