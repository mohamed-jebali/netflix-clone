@extends('layouts.app')


@section('header')
<nav class="navbar border-bottom bg-white navbar-expand-md navbar-transparent register-wrapper">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://www.logo.wine/a/logo/Netflix/Netflix-Logo.wine.svg" class="align-text-top pb-5 pb-md-0 full-logo">
                </a>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold fs-5 pe-4 color-grey-netflix pb-5 pb-md-0" href="{{ route('login') }}">
                                        {{ __('Accedi') }}
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

@endsection


@section('content')
<div class="register-wrapper bg-white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 mt-4">
            <div class="card">
                <div class="card-header bg-transparent text-black">
                    <p class="fs-6 fw-normal">PASSAGGIO <span class="fw-semibold">1</span>  DI <span class="fw-semibold">3</span></p>
                    <h1 class="fw-semibold">
                        Crea una password per iniziare l'abbonamento
                    </h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                          <p class="fs-5">
                            Mancano solo alcuni passaggi! <br>
                                Anche noi detestiamo la burocrazia.
                            </p>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-container">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror p-3" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label for="email">{{ __('Email') }}</label>
                                </div>
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-12">
                                <div class="form-container">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror p-3" name="password" value="{{ old('password') }}" required autocomplete="new-password">
                                    <label for="password">{{ __('Password') }}</label>
                                </div>
                                

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12">
                                <button type="submit" class="btn button-netflix w-100 p-3 fs-5">
                                    {{ __('Continua') }}
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
