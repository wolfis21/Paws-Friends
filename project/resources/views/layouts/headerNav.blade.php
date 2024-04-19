<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/styleMain.css')}}"  type="text/css"/> 
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}"  type="text/css"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Paws & Friends</title>
</head>
<body>
    <nav class="nav-main-home">
        <div class="container">
            <ul id="MainNavBar">
                <h1><img id="logoNav" src="{{ URL::asset ('imagenes/Variaciones logo.png')}}" alt="logo"/></h1>

                <li><a>Inicio</a></li>
                <li><a>Nosotros</a></li>
                <li><a>Servicios</a></li>
                <li><a>Promociones</a></li>

               {{--  <li><a href="{{ route('register') }}" id="registro">Registrate</a></li>
                <li><a href="{{ route('login') }}" id="ingreso">Iniciar Sesion</a></li> --}}

                @guest
                @if (Route::has('login'))
                    <li>
                        <a id="registro" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li>
                        <a id="ingreso" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        <p>aaaaaaaaaaaaaaaaaa</p>
    </footer>
    </body>
</html>