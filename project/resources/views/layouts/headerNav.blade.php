<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styleMain.css') }}" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/icono.ico') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <title>Paws & Friends</title>
</head>

<body>
    <nav class="container-nav">
        <div class="container-title">
            <h1 id="title">
                <a href="/">
                    <img id="logoNav" src="{{ URL::asset('imagenes/Variaciones-logo.png') }}" alt="logo" />
                </a>
            </h1>
        </div>
        <div class="container-menu">
            <ul id="MainNavBar">
                <li><a href="/">Inicio</a></li>
                <li><a class="link-none">Modulos</a>
                    <ul class="mostrar-secciones">
                        <li class="azul"><a href="{{ route('serviceModel') }}" class="link-modulos">Modulo de
                                servicios</a></li>
                        <li class="naranja"><a href="/" class="link-modulos">Modulo de rescate</a></li>
                        <li class="rojo"><a href="/" class="link-modulos">Modulo de adopcion y
                                donacion</a></li>
                        <li class="verde"><a href="/" class="link-modulos">Tienda</a></li>
                    </ul>
                </li>
                <li><a href="#ShowcaseQuienes">Nosotros</a></li>
                <li><a href="#">Promociones</a></li>
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
                    <li>
                        <a id="usuario">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="options" style="display: none">
                            <li><a href="{{ route('user.profile', Auth::user()->id) }}">Ver perfil</a></li>
                            <li><a style="color: #fff">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="logout-link" type="submit">Logout</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
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
                <img class="logo-footer" src="{{ URL::asset('imagenes/Variaciones-logo.png') }}" alt="logo" />
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
        // TODO JS USUARIO
    </script>
    <script>
        const botonUsuario = document.getElementById("usuario");
        const options = document.querySelector(".options");
        let isOpen = false;
        botonUsuario.addEventListener("click", function() {
            if (isOpen) {
                options.style.display = "none";
                options.classList.remove("user-options");
                isOpen = false;
            } else {
                options.style.display = "block";
                options.classList.add("user-options");
                isOpen = true;
            }
        });
    </script>

    <!--MODULO 2-->

    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script> --}}
</body>

</html>
