
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Donaciones de Mascotas</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link href="{{ asset ('css/style-donaciones.css')}}" rel="stylesheet">
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
      <a href="#iniciar" class="btn"><button>Foto</button></a>
    </header>
    <!-- Buscador -->
    <div class="container">
      <h1>Donaciones</h1>
      <input type="text" id="nombreDonadores" placeholder="   Buscar Donadores..." oninput="buscarDonadores()"/>
      <div class="buscar">
      <i class="fa fa-search"></i>
    </div>

        <!-- bolentin  -->
    <main>
      <section class="boletin-informativo">
        <h2>Boletín informativo !</h2>
        <img src="{{URL::asset('imagenes/FRAMES/FRAME A/Frame A1 - Bienvenidos.png') }}" alt="Perro">
        <p>
          Suscríbete a nuestro boletín informativo para recibir las últimas
          noticias sobre Paws & Friends, nuestras mascotas disponibles para
          adopción y eventos especiales.
        </p>
        <form action="/FormularioDonaciones">
          <input type="email" placeholder="Correo electrónico" />
          <a href="/FormularioDonaciones" class="boton"><button>CLICK PARA DONAR</button></a>
        </form>
      </section>

        <!-- Donadores  -->

      <section class="donadores">
        <div class="donador">
          <ul>
            <li>
              <img src="{{ asset ( 'img/Perfiles/foto perfil 1.jpeg')}}" alt="Perro">
              <p>Anónimo</p>
              <span>Ha hecho una donación !</span>
            </li>
          </ul>
        </div>
        
        <div class="donador">
          <ul>
            <li>
              <img src="{{ asset ( 'img/Perfiles/foto perfil 2.jpeg')}}" alt="Perro">
              <p>WAYNE Wayne Enterprises S.A</p>
              <span>Ha hecho una donación !</span>
            </li>
          </ul>
        </div>

        <div class="donador">
          <ul>
            <li>
              <img src="{{ asset ( 'img/Perfiles/foto perfil 3.jpeg')}}" alt="Perro">
              <p>Paquita</p>
              <span>Ha hecho una donación !</span>
            </li>
          </ul>
        </div>
                <div class="donador">
          <ul>
            <li>
              <img src="{{ asset ( 'img/Perfiles/foto perfil 4.jpeg')}}" alt="Perro">
              <p>Paquita</p>
              <span>Ha hecho una donación !</span>
            </li>
          </ul>
        </div>



      </section>
    </main>
    <script src="/project/public/donaciones/asset/js/script.js"></script>
    <footer>
      <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>
