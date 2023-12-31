@extends('layouts.app')


@section('header')
<nav class="navbar bg-dark navbar-expand-md navbar-transparent register-wrapper">
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



        <!-- DASHBOARD-CONTENT -->
        <div class="dashboard-wrapper">
            <div class="container">
                <div class="row justify-content-between pt-5">
                    <h1 class="text-center text-white mb-4">
                        Contenuti Caricati
                    </h1>

                    @if(session ('delete'))
                        <div class="col-12 col-md-10 col-lg-11 alert alert-warning">
                            Il Contenuto {{ session('delete') }}  è stato eliminato
                        </div>
                    @elseif(session('update'))
                        <div class="col-12 col-md-10 col-lg-11 alert alert-primary">
                            Il Contenuto {{ session('update') }}   è stato aggiornato
                        </div>
                    @elseif(session('created'))
                        <div class="col-12 col-md-10 col-lg-11 alert alert-success">
                            Il Contenuto {{ session('created') }}  è stato creato con successo
                        </div>
                    @endif
                <div>

                <div class="row justify-content-center mb-5">
                    @foreach($contents as $content)
                        <div class="col-12 col-md-6 col-lg-2 box-preview">
                            <img class="box-content" style="height:100%; width:100%;" src="{{ $content->content_image }}" alt="name_content">
                            <h4 class="text-white">
                                {{ $content->name_content }}
                            </h4>
                            <p class="text-white">
                                {{ $content->content_charged }}
                            </p>
                        </div>
                    @endforeach
                </div>


                <div class="row justify-content-center">
                        <div class="col-12 col-md-5">
                            <button class="button-netflix">
                                <a class="text-white text-decoration-none" href="{{ route('admin.create') }}">
                                    Aggiungi
                                </a>
                            </button>
                        </div>
                </div>
            </div>
        </div>
            
        @endsection