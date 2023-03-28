@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center justify-content-center">
    <div class="row">
        <div class="col">
            <div class="card justify-content-center form-color" style="width: 600px; height: 700px">
                <div class="card-body form-label ">
                    <h1 class="card-title card-brand text-center pb-4 pt-4">EcoThread</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label text-md-end my-0">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

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
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class=" form-label text-md-end my-0">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="text-center mb-3">
                          <button type="submit" class="btn btn-success btn-xl px-5 py-3 mx-5 text-uppercase">
                              {{ __('Sign up') }}
                          </button>
                        </div>
                        <div class="align-self-center mb-5 pb-4" style="color: white;">
                          Already have an ccount? <a href="http://127.0.0.1:8000/login">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
