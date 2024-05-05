
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros de Mascotas</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link href="{{ asset ('css/style-Nosotros.css')}}" rel="stylesheet">
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
        </ul>
      </nav>
      <a href="#iniciar" class="btn"><button>Foto</button></a>
    </header>
      <!-- Buscador -->
      <div class="container">
        <h1>Adopciones</h1>
        <input type="text" id="nombreMascota" placeholder="     Buscar mascota..." oninput="buscarMascota()"  />
        <div class="buscar">
          <i class="fa fa-search"></i>
      </div>

            <!-- Nosotros -->
        <div id="ShowcaseQuienes">
        <p id="txt-quienes">Paws & Friends es una organizacion comprometida con el bienestar de las mascotas, ofreciendo una
            amplia gama de servicos para satisfacer
            todas las necesidades de tus peludos.
        </p>
    </div>
        </section>
    </main>
    <script src="/project/public/script-adopciones.js"></script>
    <footer>
      <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>
