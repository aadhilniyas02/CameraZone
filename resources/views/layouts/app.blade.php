<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Camera Zone</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- @vite('resources/css/app.css') -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-red-600 shadow-sm">
            <div class="container">
                <a class="navbar-brand text-white ml-4 lg:ml-8 xl:ml-12" href="{{ route('home') }}">
                    Camera Zone
                </a>
                <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class=" navbar-collapse" id="navbarSupportedContent">
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                                <a class="nav-link d-flex align-items-center text-white hover:underline" href="{{ route('products') }}">
                                <img src="{{ asset('images/productsIcon.png') }}" alt="Products Icon" class="h-4 w-4 me-2 ">
                                {{ __('Products') }}
                                </a>
                        </li>
                            
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center text-white hover:underline" href="{{ route('login') }}">
                                    <img src="{{ asset('images/loginIcon.png') }}" alt="Login Icon" class="h-4 w-4 me-2 "> 
                                        {{ __('Login') }}
                                    </a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center text-white hover:underline" href="{{ route('register') }}">
                                    <img src="{{ asset('images/registerIcon.png') }}" alt="Login Icon" class="h-4 w-4 me-2 "> 
                                    {{ __('Register') }}
                                    </a>
                                </li>
                            @endif

                            <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center text-white hover:underline" href="">
                                    <img src="{{ asset('images/callIcon.png') }}" alt="Login Icon" class="h-4 w-4 me-2 ">
                                        0778957364
                                    </a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end text-white" aria-labelledby="navbarDropdown">
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

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>