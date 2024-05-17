@extends('layouts.headerNav')
@section('title', 'Donaciones')
@vite('resources/css/moduloAdopcionesDonaciones/donaciones.css')
@section('content')
    <div class="container-form">
        <div class="title-conatainer">
            <h1 class="title">Donaciones</h1>
        </div>
        <div class="buscador">
            <input type="text" placeholder="Buscar" id="nombreAdopcion">
        </div>
        <div class="content">
          <form action="" class="form">
              <div class="title-form form-group">
                  <h2 class="title-form-h2">Formulario de donaciones</h2>
              </div>
              <div class="fecha-entrega form-group">
                  <label for="fecha-entrega">Fecha de entrega</label>
                  <input type="date" name="fecha-entrega" id="fecha-entrega">
              </div>
              <div class="subir-fotos form-group">
                  <input type="file" id="fotos-donacion" name="photo_ref" accept="image/*" />
                  <label for="fotos-donacion">Subir fotos de la donación </label>
              </div>
              <div class="donacion-destino form-group">
                  <p>¿Para quién va dirigido?</p>
                  <select id="destino" name="destino">
                      <option value="refugio">Refugio de animales</option>
                      <option value="centro-adopcion">Centro de adopción</option>
                      <option value="otro">Otros</option>
                  </select>
              </div>
              <div class="tipos-donacion form-group">
                  <p>Tipo de Donaciones</p>
                  <select id="tipos" name="tipos">
                      <option value="alimentos">Donaciones de alimentos y suministros</option>
                      <option value="Medicina">Donaciones de medicamentos:</option>
                      <option value="otro">Otros</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="cantidad-donar">Cantidad a donar</label>
                <input type="number" name="cantidad-donar" id="cantidad-donar">
              </div>
              <div class="form-group">
                <button class="btn-finally" value="Finalizar"></button>
              </div>
              <div class="descripcion-donacion form-group"></div>
          </form>
          <div class="donaciones">

          </div>
        </div>
    </div>
@endsection
