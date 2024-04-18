
    <div>
        <!-- header.blade.php -->
        <header>    
        <!-- Barra de navegación, logo, menú, etc. -->

        <nav class="nav-main-home">
        <div class="container">
            <ul id="MainNavBar">
                <h1><img src="{{ URL::asset ('imagenes/Variaciones logo.png')}}" alt="logo"/></h1>

                <li><a>Inicio</a></li>
                <li><a>Nosotros</a></li>
                <li><a href="{{ route('servicios') }}">Servicios</a></li> 
                <li><a>Promociones</a></li>
                <li><a href="{{ route('register') }}" id="registro">Registrate</a></li>
                <li><a href="{{ route('login') }}" id="ingreso">Iniciar Sesion</a></li>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto"> {{-- Falta maquetar mejor, correciones para luego --}}
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
            </ul>
        </div>
    </nav>


        </header>

    </div>
    










