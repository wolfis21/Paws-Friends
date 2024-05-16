<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de Adopción</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="{{ asset ('css/moduloAdopcionDonacion/style-adopcionesvermas.css')}}" rel="stylesheet">
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
        <!-- Cuadro izquierdo: Imagen de la mascota -->
        <div class="cuadro-imagen">
          <img src="{{ asset ( 'img/Animales/perro1.jpeg')}}" alt="Imagen de la mascota" />
        </div>
        <!-- Cuadro derecho: Información de la mascota -->
        <div class="cuadro-info">
          <p><strong>Nombre:</strong> Max</p>
          <p><strong>Especie:</strong> Perro</p>
          <p><strong>Raza:</strong> Labrador</p>
          <p><strong>Sexo:</strong> Masculino</p>
          <p><strong>Edad:</strong> 3 año</p>
          <p><strong>localizado</strong> Centro de rescate</p>
          <p><strong>Descripción:</strong> Un perro amigable y cariñoso.</p>
        </div>
      </div>
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
