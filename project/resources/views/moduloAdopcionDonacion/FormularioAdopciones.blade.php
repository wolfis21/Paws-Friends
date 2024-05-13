<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario de Adopción</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link href="{{ asset ('css/moduloAdopcionDonacion/styleformularioadopciones.css')}}" rel="stylesheet">
  </head>
  <body>
    <!-- Navegador -->
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

    <!-- Formulario de adopción -->
    <main>
      <section class="formulario-adopcion">
        <h2>Formulario de Adopción</h2>
        <form  action="" method="post" enctype="multipart/form-data"    id="formulario-adopcion"> {{csrf_field()}}
          <!-- Campo para el nombre -->
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input
              type="text"
              id="nombre"
              name="nombre"
              placeholder="Ingrese su nombre"
              required
            />
          </div>

          <!-- Campo para el apellido -->
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input
              type="text"
              id="apellido"
              name="apellido"
              placeholder="Ingrese su apellido"
              required
            />
          </div>
          
          <!-- Campo para el número de teléfono -->
          <div class="form-group">
            <label for="telefono">Número de teléfono</label>
            <input
              type="text"
              id="telefono"
              name="telefono"
              placeholder="Ingrese su número de teléfono"
              required
            />
          </div>

          <!-- Campo para el DNI -->
{{--           <div class="form-group">
            <label for="dni">Rif (C.I)</label>
            <input
              type="file"
              id="dni"
              name="dni"
              required
            />
          </div> --}}



          <!-- Botón de envío -->
          <div class="form-group">
            <button type="submit">Solicitar</button>
          </div>
          
        </form>
      </section>
    </main>
    <script src="/adopciones/asset/js/scriptfom.js"></script>
        <footer>
      <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>
