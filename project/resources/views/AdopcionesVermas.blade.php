<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de Adopción</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="{{ asset ('css/style-adopcionesvermas.css')}}" rel="stylesheet">
</head>
<body>
  <!-- Navegador -->
  <header>
    <div class="logo">
      <img src="{{ asset ( 'img/Variaciones logo.png')}}" alt="Logo de la página" />
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

  <!-- Formulario de adopción -->
  <main>
    <section class="formulario-adopcion">
      <h2>Formulario de Adopción</h2>
      <div class="contenedor-formulario">
      @foreach ($adopciones as $adopcion)
        <!-- Cuadro izquierdo: Imagen de la mascota -->
        <div class="cuadro-imagen">
          <img src="{{ asset ( 'img/Animales/perro1.jpeg')}}" alt="Imagen de la mascota" />
        </div>
        <!-- Cuadro derecho: Información de la mascota -->
        <div class="cuadro-info">
          <p><strong>Nombre: </strong>{{$adopcion->name}}</p>
          <p><strong>Especie: </strong>{{$adopcion->species}}</p>
          <p><strong>Raza: </strong> {{$adopcion->animal_race}}</p>
          <p><strong>Sexo: </strong>{{$adopcion->sex_animal}}</p>
          <p><strong>Edad: </strong>{{$adopcion->age_animal}}</p>
          <p><strong>localizado: </strong>{{$adopcion->location_addres}}</p>
          <p><strong>Descripción: </strong>{{$adopcion->descriptions_animals}}</p>
        </div>
      </div>
      @endforeach
      <!-- Botón de adopción -->
      <div class="boton-adopcion">
         <a href="/FormularioAdopciones" class="btn"><button>Adoptar</button></a>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
  </footer>

  <script src="script.js"></script>
</body>
