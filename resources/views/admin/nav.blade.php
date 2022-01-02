<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Script --}}
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
        @yield('style');
    </style>
</head>
<body>
    <div id="app">

        {{-- NavBar --}}
        <nav class="navbar navbar-expand-lg navbar-light border bg-white" style="">
            <div class="container">
            <a class="navbar-brand" href="#">Nijamati</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </li> --}}
                </ul>
                <ul class="ms-auto navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item dropdown my-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://aliyahnorthington.com/oozmakappa/images/meet-mike.jpg" alt="asdf" class="me-2" style="width: 32px; border-radius: 50%;">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Setting</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></a></li>
                        </ul>
                    </li>
                </ul>

            </div>
            </div>
        </nav>


        <div class="d-flex">

            {{-- Sidebar --}}
            <div class="d-flex flex-column flex-shrink-0 p-3 border me-4" style="width: 280px; background: white; height: 100vh; margin-top: -66px;">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none" style="margin-top: 64px;">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Dashboard</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active text-dark fw-bold" aria-current="page" style="">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('galleryType.index') }}" class="nav-link link-dark fw-bold" style="color: #000000">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    Gallery
                    </a>
                </li>
                <li>
                    <a href="{{ route('information.index') }}" class="nav-link link-dark fw-bold">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                        Information
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark fw-bold">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    Products
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark fw-bold">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    Customers
                    </a>
                </li>
                </ul>
                <hr>
                <div class="div">
                    <a href="" class="text-decoration-none text-dark fs-6 fw-bold">
                        copyright © 2022 – Rastriya Kitabkhana (Nijamati)
                    </a>
                </div>
            </div>

            {{-- Main Content --}}
            <main class="py-4 container">
                @yield('content')
            </main>
        </div>



    </div>

    <script> @yield('script'); </script>
</body>
</html>
