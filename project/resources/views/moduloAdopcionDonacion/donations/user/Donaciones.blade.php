@extends('layouts.headerNav')
@section('title', 'Donaciones')
@vite('resources/css/moduloAdopcionesDonaciones/donaciones.css')
@section('content')
    <div class="container-formulario">
        <div class="title-container">
            <h1 class="title">Donaciones</h1>
            <a class="link-hover" href="{{route('indexAdoptions')}}">Adopciones</a>
        </div>
        <div class="content">

            <form method="POST" action="{{ route('donaciones.store') }}" enctype="multipart/form-data">
                {{ method_field('POST') }}
                @csrf
                @include('../../../layouts/messageActions')
                <div class="title-form">
                    <h2 class="title-form-h2">Formulario de donaciones</h2>
                </div>
                <input type="hidden" name="direct" value="2">
                <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                <div class="fecha-entrega form-group">
                    <label for="fecha-entrega">Fecha de entrega</label>
                    <input type="date" name="date" id="fecha-entrega" required>
                </div>
                <div class="subir-fotos form-group">
                    <label for="fotos-donacion">Subir fotos de la donación </label>
                    <input type="file" id="fotos-donacion" name="photo_ref" accept="image/*" required/>
                </div>
                <div class="donacion-destino form-group">
                    <p>¿Para quién va dirigido?</p>
                    <select id="destino" name="destino_fundacion" required>
                        <option value="refugio">Refugio de animales</option>
                        <option value="centro-adopcion">Centro de adopción</option>
                        <option value="otro">Otros</option>
                    </select>
                </div>
                <div class="tipos-donacion form-group">
                    <p>Tipo de Donaciones</p>
                    <select id="tipos" name="type_donation" required>
                        <option value="alimentos">Donaciones de alimentos y suministros</option>
                        <option value="Medicina">Donaciones de medicamentos:</option>
                        <option value="otro">Otros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description_ref">Descripcion</label>
                    <input type="text" name="description_ref" id="description_ref" placeholder="Juguete de plastico" required>
                </div>
                <div class="form-group">
                    <label for="cantidad-donar">Cantidad a donar</label>
                    <input type="number" name="qty" id="cantidad-donar" placeholder="12" required>
                </div>
                <div class="form-group">
                    <button class="btn-finally">Finalizar</button>
                </div>
                <div class="descripcion-donacion form-group"></div>
            </form>
            <div class="donaciones">
                @foreach ($donations as $donation)
                    <div class="contenedor-donacion">
                        <div class="foto-donacion">
                            <img class="img-donations" src="{{ asset('storage/moduloDonacion/images/' . $donation->photo_ref) }}"
                                alt="">
                        </div>
                        <div class="descripcion-donacion">
                          <div class="container-p">
                            <p class="texto-bold">Descripción:</p><span class="response">{{ $donation->description_ref }}</span>
                        </div>
                        <div class="container-p">
                            <p class="texto-bold">Tipo de donación:</p><span class="response">{{$donation->type_donation}}</span>
                        </div>
                        <div class="container-p">
                            <p class="texto-bold">Usuario:</p><span class="response">{{ $donation->user->name }}</span>
                        </div>
                        
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
