<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Scripts -->

    @yield('CSS')
    
</head>
<body>
    <div id="app">

        <!-- Header estilo UNAB -->
        <header class="py-3" style="background: linear-gradient(to right, #e69500, #f29f05); color: white;">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-dark p-0">
                    <div class="container-fluid px-0 d-flex justify-content-between align-items-center">
        
                        <!-- Logo + texto -->
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('images/logoheader.png') }}" alt="Logo UNAB" style="height: 50px; margin-right: 10px;">
                        </div>
        
                        <!-- Botón hamburguesa -->
                        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <!-- Menú colapsable -->
                        <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
                            <ul class="navbar-nav">
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                        </li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                            </li>
                                        </ul>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Footer global -->
        <footer class="text-center mt-4 mb-4" style="color: #555; font-size: 13px;">
            <div>Universidad Autónoma de Bucaramanga - UNAB © 2025</div>
            <div class="mt-1">© 2024 UNAB Tienda. Todos los derechos reservados.</div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>