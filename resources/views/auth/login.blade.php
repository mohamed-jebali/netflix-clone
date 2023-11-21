@extends('layouts.app')


@section('content')
<div class="container-fluid login-section bg-login">

<nav class="navbar navbar-expand-md navbar-transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
        <img src="https://www.logo.wine/a/logo/Netflix/Netflix-Logo.wine.svg" class="align-text-top full-logo">
        </a>
    </div>
</nav>


    <div class="row justify-content-center">
        <div class="col-md-4 card-wrapper mt-2">
            <div class="card">
                <div class="card-header">{{ __('Accedi') }}</div>

                <div class="card-body card-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-11">
                                <div class="form-container">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="email">Email</label>
                                </div>
                               

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5 justify-content-center">

                            <div class="col-md-11">
                                <div class="form-container">
                                <input id="password" type="password" class="form-control bg-form @error('password') is-invalid @enderror p-3" name="password" required autocomplete="current-password">
                                <label for="password">Password</label>
                                </div>
                                

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-11">
                                <button type="submit" class="btn button-netflix size-button-login">
                                    {{ __('Accedi') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-5 justify-content-center">
                            <div class="col-md-11">
                                <div class="form-check d-flex justify-content-between">
                                    <div>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" checked>
                                        {{ __('Ricordami') }}
                                    </label>

                                    </div>
                                    <p>
                                        <a class="text-decoration-none" href="#">Serve Aiuto?</a>
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-center mb-3">
                            <div class="col-md-11">
                            @if (Route::has('register'))
                                <li class="nav-item" style="list-style-type: none; padding:0;">
                                    <a class="nav-link text-white" href="{{ route('register') }}"> <span class="card-login">Prima Volta su Netflix? </span> {{ __('Registrati') }}</a>
                                </li>
                            @endif
                            </div>
                        </div>

                        <div class="row justify-content-center pb-5">
                            <div class="col-md-11">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}" style="padding:0;">
                                        {{ __('Hai Dimenticato la Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
