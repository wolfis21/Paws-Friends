
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Historia</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <link href="{{ asset ('css/style-historia.css')}}" rel="stylesheet">
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
      <!-- Historial -->

  <main class="table" id="HISTORIAL">
        <section class="table__header">
            <h1>HISTORIAL</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="{{ asset ( 'img/search.png')}}" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label >Export As &nbsp; &#10140;<img src="" alt=""></label>
                    <label for="export-file" id="toPDF">PDF <img src="{{ asset ( 'img/pdf.png')}}" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Usuario <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Mascotas<span class="icon-arrow">&UpArrow;</span></th>
                        <th>Especie <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Raza <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Sexo <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Edad <span class="icon-arrow">&UpArrow;</span></th> 
                        <th>Status adopcion</th>
                        <th>Status donacion</th> 
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset ( 'img/Perfiles/foto perfil 1.jpeg')}}" alt="">Anónimo</td>
                        <td>Nombre 1</td>
                        <td>Especie 1</td>
                        <td>Raza 1</td>
                        <td>Macho</td> <!-- Movido al lado de Edad -->
                        <td>2 años</td> <!-- Movido después de Motivo -->
                        <td>En espera</td>
                        <td>Rechazado</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="{{ asset ( 'img/Perfiles/foto perfil 2.jpeg')}}" alt="">WAYNE</td>
                        <td>Nombre 2</td>
                        <td>Especie 2</td>
                        <td>Raza 2</td>
                        <td>Hembra</td> <!-- Movido al lado de Edad -->
                        <td>4 años</td> <!-- Movido después de Motivo -->
                        <td>En proceso</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="{{ asset ( 'img/Perfiles/foto perfil 3.jpeg')}}" alt="">Paquita</td>
                        <td>Nombre 3</td>
                        <td>Especie 3</td>
                        <td>Raza 3</td>
                        <td>Macho</td> <!-- Movido al lado de Edad -->
                        <td>1 años</td> <!-- Movido después de Motivo -->
                        <td>Aceptada</td>
                        <td>Aceptada</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>




    <script src="{{ asset ('js/sript-historia.js')}}"></script>
    <footer>
      <p>&copy; 2024 Adopciones de Mascotas. Todos los derechos reservados.</p>
    </footer>
  </body>
</html>
