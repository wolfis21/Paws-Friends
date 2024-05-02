<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/navMenu/styleMain.css', 'resources/css/navMenu/app.css'])
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>@yield('title')</title>
</head>

<body>
    <nav class="nav-main-home">
        <div class="container">
            <ul id="MainNavBar">
                <h1>
                    <a href="/main">
                        <img id="logoNav" src="{{ URL::asset('css/imagesFront/navMenu/Variaciones-logo.png') }}" alt="logo" />
                    </a>
                </h1>

                <li><a href="{{route('homeService')}}">Inicio</a></li>
                <li><a class="link-none">Modulos</a>
                    <ul class="mostrar-secciones">
                        <li class="azul"><a href="{{route('serviceModel')}}" class="link-modulos">Modulo de servicios</a></li>
                        <li class="rojo"><a href="/" class="link-modulos">Modulo de adopcion y donacion</a></li>
                        <li class="naranja"><a href="/" class="link-modulos">Modulo de rescate</a></li>
                        <li class="verde"><a href="/" class="link-modulos">Tienda</a></li>
                    </ul>
                </li>
                <li><a href="#ShowcaseQuienes">Nosotros</a></li>
                <li><a href="#">Promociones</a></li>

                 <li><a href="" id="registro">Registrate</a></li>
                <li><a href="" id="ingreso">Iniciar Sesion</a></li>

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
    @yield('content')
    <footer>
        <div class="container-footer">
            <div class="img-footer">
                <img class="logo-footer" src="{{ URL::asset('css/imagesFront/navMenu/Variaciones-logo.png') }}" alt="logo" />
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
</body>

</html>