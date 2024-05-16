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
    <link href="{{ asset ('css/styleformulariodonaciones.css')}}" rel="stylesheet">
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
          <li><a href="./home">Inicio</a></li>
          <li><a href="./Adopciones">Adopciones</a></li>
          <li><a href="./Donaciones">Donaciones</a></li>
          <li><a href="./HistoriaA">Historial de adopciones</a></li>
          <li><a href="./HistoriaD">Historial de Donaciones</a></li>
          <li><a href="./Nosotros">Nosotros</a></li>
        </ul>
      </nav>
      <a href="#iniciar" class="btn"></a>
    </header>

  <!-- Formulario de donaciones -->
    <main>
      <section class="formulario-donaciones">
        <h2>Formulario de Donaciones</h2>
        <form action="" method="post" enctype="multipart/form-data" id="formulario-donaciones">
          {{csrf_field()}}
        <!-- Área para subir fotos -->
        <div class="subir-fotos">
          <input
            type="file"
            id="fotos-donacion"
            name="fotos-donacion"
            accept="image/*"
            multiple
            required
          />
          <label for="fotos-donacion" >Subir fotos de la donación </label>
        </div>

        <!-- Campo desplegable para seleccionar el destino de la donación -->
        <div class="destino-donacion">
          <p>¿Para quién va dirigido?</p>
          <select id="destino" name="destino">
            <option value="refugio">Refugio de animales</option>
            <option value="centro-adopcion">Centro de adopción</option>
            <option value="otro">Otros</option>
          </select>
        </div>

          <div class="destino-donacion">
          <p>Tipo de Donaciones</p>
          <select id="tipos" name="tipos">
            <option value="alimentos">Donaciones de alimentos</option>
            <option value="alimentos">Donaciones de suministros</option>
            <option value="Medicina">Donaciones de medicamentos</option>
            <option value="otro">Otros</option>
          </select>
        </div>

        <!-- Botón para finalizar -->
        <div class="form-group">
          <button type="submit">Finalizar</button>
        </div>
        </form>
      </section>
    </main>

    <footer>
      <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
    </footer>

    <script src="/donaciones/asset/js/scriptfomu.js"></script>
  </body>
</html>
