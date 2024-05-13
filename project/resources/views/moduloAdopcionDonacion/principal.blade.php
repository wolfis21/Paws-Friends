
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
    <link href="{{ asset ('css/moduloAdopcionDonacion/style-Nosotros.css')}}" rel="stylesheet">
  </head>
  <body>
     <!-- navegado-->
    <header> {{-- ESTO NO VA --}}
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

    <main>

      <section class="Informacion">
        <img src="{{URL::asset('/img/perritos,mascotas png (4).png') }}" alt="Perro">
      </section>

      <section class="Informacion-contenido">
        <h1>Bienvenido a</h1>
        <h2>Adopciones y Donaciones</h2>
        <p>Nuestro sitio se dedica a conectar personas interesadas en adoptar mascotas y organizaciones que promueven la adopción y el cuidado de animales. Ofrecemos información sobre mascotas disponibles, eventos de adopción y facilitamos donaciones para apoyar a refugios y centros de adopción.</p>
      
        <a href="/donar/formulario"> Adopte AQUI</a>
        <a href="/adoptar/formulario">Done AQUI</a>
      </section>

    </main>

    <script src="/project/public/script-adopciones.js"></script>
    <footer>
      <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>
