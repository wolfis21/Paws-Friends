@extends('layouts.headerNav')
@section('content')

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historial</title>
    <link rel="stylesheet" type="text/css" href="/public/css/stylehc.css">
</head>

<body>
    <main class="table" id="HISTORIAL">
        <section class="table__header">
            <h1>HISTORIAL</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="/public/imagenes/imghc/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="/public/imagenes/imghc/pdf.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Usuario <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Demanda <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Raza <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Sexo <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Motivo</th> <!-- Movido al lado de Edad -->
                        <th>Edad <span class="icon-arrow">&UpArrow;</span></th> <!-- Movido después de Motivo -->
                        <th>Status de la Demanda</th>
                        <th>Status Fundación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><img src="/public/imagenes/imghc/Zinzu Chan Lee.jpg" alt="">Lee Chan</td>
                        <td>Descripción de la demanda 1</td>
                        <td>Raza 1</td>
                        <td>Macho</td>
                        <td>Motivo 1</td> <!-- Movido al lado de Edad -->
                        <td>2 años</td> <!-- Movido después de Motivo -->
                        <td>En espera</td>
                        <td>En espera</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="/public/imagenes/imghc/Alson GC.jpg" alt="">Alson G</td>
                        <td>Descripción de la demanda 2</td>
                        <td>Raza 2</td>
                        <td>Hembra</td>
                        <td>Motivo 2</td> <!-- Movido al lado de Edad -->
                        <td>3 años</td> <!-- Movido después de Motivo -->
                        <td>En proceso</td>
                        <td>En proceso</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="/public/imagenes/imghc/Alex Gonley.jpg" alt="">Alex G</td>
                        <td>Descripción de la demanda 3</td>
                        <td>Raza 3</td>
                        <td>Macho</td>
                        <td>Motivo 3</td> 
                        <td>1 año</td> 
                        <td>Aceptada</td>
                        <td>En espera</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    <script src="/resources/js/script.js"></script>

</body>

</html>
    
@endsection