{{-- 
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adonaciones de Mascotas</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link href="{{ asset ('css/moduloAdopcionDonacion/style-adopciones.css')}}" rel="stylesheet">
    <script src="{{ asset ('js/moduloAdopcionDonacion/script-adopciones')}}"></script>
  </head>
  <body>
     <!-- navegado-->
    <header>
      <div class="logo">
        <img
          src="{{ asset ( 'img/Variaciones logo.png')}}"
          alt="Logo de la página"
        />
      </div>
      <nav>
        <ul>
          <li><a href="./welcome">Pagina Principal</a></li>
          <li><a href="./Adopciones">Adopciones</a></li>
          <li><a href="./Donaciones">Donaciones</a></li>
          <li><a href="./Nosotros">Nosotros</a></li>
          <li><a href="./Historia">Historial</a></li>
        </ul>
      </nav>
      <a href="#iniciar" class="btn"></a>
    </header>
      <!-- Buscador -->
      <div class="container">
        <h1>Adopciones</h1>
        <input type="text" id="nombreMascota" placeholder="     Buscar mascota..." oninput="buscarMascota()"  />
        <div class="buscar">
          <i class="fa fa-search"></i>
      </div>

            <!-- animales -->
      <main>
        <section class="animales">
            <div class="animal" id="Max">
                <img src="{{ asset ( 'img/Animales/perro1.jpeg')}}" alt="Perro">
                <h2>Max</h2>
                <p>Raza: Labrador</p>
                <p>Edad: 3 años</p>
                <a href="/AdopcionesVermas" class="btn"><button>Ver mas</button></a>
            </div>

            <div class="animal">
                <img src="{{ asset ( 'img/Animales/gato1.jpeg')}}" alt="Gato">
                <h2>Luna</h2>
                <p>Raza: Siames</p>
                <p>Edad: 2 años</p>
                <a href="/AdopcionesVermas" class="btn"><button>Ver mas</button></a>
            </div>

            <div class="animal">
                <img src="{{ asset ( 'img/Animales/perro2.jpeg')}}" alt="Perro">
                <h2>Toby</h2>
                <p>Raza: Labrador</p>
                <p>Edad: 3 años</p>
                <a href="AdopcionesVermas" class="btn"><button>Ver mas</button></a>
            </div>

            <div class="animal">
                <img src="{{ asset ( 'img/Animales/gato2.jpeg')}}" alt="Gato">
                <h2>Rocky</h2>
                <p>Raza: Siames</p>
                <p>Edad: 2 años</p>
                <a href="AdopcionesVermas" class="btn"><button>Ver mas</button></a>
            </div>


            
            <!-- Agrega más animales aquí -->


        </section>
    </main>
    
    <footer>
      <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
    </footer>
  </body>
</html> --}}
@extends('layouts.headerNav')
@section('title','Adopciones')
@section('content')

@endsection