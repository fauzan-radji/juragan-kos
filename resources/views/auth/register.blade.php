@extends('layouts.auth')

@section('title', 'Register')

@section('content')
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" action="{{ route('register') }}" method="post">
              @csrf

              <div class="form-group">
                <input class="form-control form-control-user @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>

                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <input class="form-control form-control-user @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input class="form-control form-control-user @error('password') is-invalid @enderror" id="password" name="password" type="password" placeholder="Password" required autocomplete="new-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="col-sm-6">
                  <input class="form-control form-control-user @error('password_confirmation') is-invalid @enderror" id="repeatPassword" name="password_confirmation" type="password" placeholder="Repeat Password" required>

                  @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <button class="btn btn-primary btn-user btn-block" type="submit">
                Register Account
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="forgot-password.html">Forgot Password?</a>
            </div>
            <div class="text-center">
              <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
