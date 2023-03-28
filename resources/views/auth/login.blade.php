@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col">
        <div class="card justify-content-center form-color" style="width: 600px; height: 500px;">
                <div class="card-body form-label">
                    <h1 class="card-title card-brand text-center pb-4 pt-4">EcoThread</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class=" form-label text-md-end my-0"">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class=" form-label text-md-end my-0"">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                              <label class="form-check-label" for="remember">
                                  {{ __('Remember Me') }}
                              </label>
                          </div>
                        </div>

                        <div class="text-center">
                          <button type="submit" class="btn btn-success btn-xl px-5 py-3 mx-5 text-uppercase">
                              {{ __('Login') }}
                          </button>
                        </div>
                        <div class="text-center mb-5 pb-4" style="color: white;">
                          @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                          @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
