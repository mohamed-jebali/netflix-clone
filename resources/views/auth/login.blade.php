@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-4">
            <div class="card bg-transparent">
                <div class="card-header ps-5">{{ __('Accedi') }}</div>

                <div class="card-body card-login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-3" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-5 justify-content-center">

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control bg-form @error('password') is-invalid @enderror p-3" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-10">
                                <button type="submit" class="btn button-netflix size-button-login">
                                    {{ __('Accedi') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-5 justify-content-center">
                            <div class="col-md-10">
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
                            <div class="col-md-10">
                            @if (Route::has('register'))
                                <li class="nav-item" style="list-style-type: none; padding:0;">
                                    <a class="nav-link" href="{{ route('register') }}">Prima Volta su Netflix? {{ __('Registrati') }}</a>
                                </li>
                            @endif
                            </div>
                        </div>

                        <div class="row justify-content-center pb-5">
                            <div class="col-md-10">
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
