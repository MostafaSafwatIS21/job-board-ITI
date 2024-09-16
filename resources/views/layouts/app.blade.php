<!doctype html>
<html lang="en" style="font-size: 16px;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title')</title>
    <!-- Fonts -->
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif; /* or 'Open Sans', sans-serif */
    }

    .floating-alert {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999; /* Ensure it appears above other elements */
        width: auto;
        padding: 15px;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: inline-block;
    }

    .floating-alert strong {
        color: #155724; /* Success text color */
    }

    .centered-alert {
        position: fixed;
        top: 20px; /* Distance from the top of the viewport */
        left: 50%;
        transform: translateX(-50%); /* Center horizontally */
        z-index: 9999; /* Ensure it appears above other elements */
        max-width: 80%;
        padding: 15px;
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
</style>
@if (session('success'))
    <div class="alert alert-success floating-alert centered-alert">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function () {
            var alert = document.querySelector('.floating-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 5000);
    </script>
@endif
@if(session('failed'))
    <div class="alert alert-danger floating-alert centered-alert">
        {{ session('failed') }}
    </div>
    <script>
        setTimeout(function () {
            var alert = document.querySelector('.floating-alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 5000);
    </script>
@endif
<body>

<div id="app">
    <div class="w-75 mx-auto ">
        <nav
            class="navbar navbar-expand-lg navbar-light bg-light  fixed-top shadow-lg  mb-5 bg-body rounded m-3  "
            style="height: 6rem">
            <div class="container-fluid ">
                <a class="navbar-brand" href="/">
                    <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
                         height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("job.show")}}">Find Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("employers.show")}}">Employers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("candidates.show")}}">Candidates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <div class="flex-column justify-content-between">
                                @if (Route::has('login'))
                                    <button type="button" class="btn btn-primary fw-bold px-4 py-1 rounded ">
                                        <a class="nav-link m-1 text-light"
                                           href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </button>
                                @endif
                                @if (Route::has('register'))
                                    <button type="button" class="btn btn-primary fw-bold px-3 py-1 rounded ">
                                        <a class="nav-link m-1 text-light "
                                           href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </button>
                                @endif
                            </div>
                        @else
                            <li class="nav-item dropdown d-flex align-items-center">
                                <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="mdo" width="60" height="60"
                                     class="rounded-circle">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/profile">Settings</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>
                                </ul>
                            </li>
                            <div class="dropdown">


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest

                    </ul>

                </div>
            </div>
        </nav>
    </div>
    <main class="fs-6" style="padding-top: 9rem !important;">
        @yield('content')
    </main>
    <div class="container ">
        <footer class="py-5">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>
                <div class="col-4 offset-1">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2025 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg>
                        </a></li>
                    <li class="ms-3"><a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg>
                        </a></li>
                    <li class="ms-3"><a class="link-dark" href="#">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
