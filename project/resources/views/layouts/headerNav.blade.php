<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styleMain.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />

    <!--LINK DE CSS DE SERVICIO RESCATE MODULO 2-->
    <link rel="stylesheet" href="{{ asset('css/servicio.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/stylehc.css') }}" type="text/css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!--FONT DE MODULO 2--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!--SCRIPTS FORMULARIO MODULO 2-->
    @vite(['resources/js/formulario.js'])
    @vite(['resources/js/script.js'])


    <title>Paws & Friends</title>
</head>

<body>
    <nav class="nav-main-home">
        <div class="container">
            <ul id="MainNavBar">
                <h1>
                    <a href="/main">
                        <img id="logoNav" src="{{ URL::asset('imagenes/Variaciones logo.png') }}" alt="logo" />
                    </a>
                </h1>

                <li><a href="#">Inicio</a></li>
                <li><a href="#ShowcaseServicios">Servicios</a></li>
                <li><a href="#ShowcaseQuienes">Nosotros</a></li>
                <li><a href="#">Promociones</a></li>

                {{--  <li><a href="{{ route('register') }}" id="registro">Registrate</a></li>
                <li><a href="{{ route('login') }}" id="ingreso">Iniciar Sesion</a></li> --}}

                @guest
                    @if (Route::has('login'))
                        <li>
                            <a id="registro" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li>
                            <a id="ingreso" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="btn btn-sm btn-primary" href="{{ route('user.profile') }}">
                                <i class="fa fa-fw fa-eye"></i> Ver Perfil
                            </a>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>

                        </div>
                    </li>
                @endguest

            </ul>
        </div>
    </nav>
    <div class="containerMainNav">
        @yield('content')
    </div>

    <footer>
        <div class="container-footer">
            <div class="img-footer">
                <img class="logo-footer" src="{{ URL::asset('imagenes/Variaciones logo.png') }}" alt="logo" />
            </div>
            <div class="text-legals">
                <div>©2024 Company Name. All rights reserved UGMA</div>
                <div class="terms-policy">
                    <div> Privacy & Policy</div>
                    <div>Terms & Condition</div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!--MODULO 2-->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</body>

</html>
