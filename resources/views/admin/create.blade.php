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

        <div class="container create-container">
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-8 col-lg-5">
                     <form action="{{ route('admin.store') }}" method="POST" class="form">
                       @csrf

                            <p id="heading">Create New Content</p>

                            @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                            @endif

                            <div class="field">
                                <input autocomplete="off" placeholder="name_content" name="name_content" class="input-field" type="text">
                            </div>
                            <div class="field mb-2">
                                <input placeholder="content_charged" name="content_charged" class="input-field" type="text">
                            </div>
                            <div class="field mb-2">
                                <input placeholder="image_charged" name="image_charged" class="input-field" type="text">
                            </div>
                            <p class="text-white ps-2">Is This Content Arrived</p>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="is_arrived" id="yes" value="1">
                                <label class="btn btn-outline-danger" for="yes">Yes</label>

                                <input type="radio" class="btn-check" name="is_arrived" id="no" value="0">
                                <label class="btn btn-outline-danger" for="no">No</label>
                            </div>
                            <div class="field">
                                <input placeholder="duration" name="duration" class="input-field" type="number">
                            </div>
                            <div class="btn-wrapper">
                                <button class="button-reset">Reset</button>
                                <button type="submit" class="button-create">Create</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
            
        @endsection