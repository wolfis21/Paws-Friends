@extends('layouts.headerNav')
@section('content')

    <div class="fun">
    <div class="container-form">
            <div class="info-form">
                <h2>Registro fundación</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui eligendi est voluptates quae ipsam eius, in quasi odio porro aut vel beatae aperiam.</p>
                <a href="#"><i class="fa fa-phone"></i> +58 426-4866045</a>
                <a href="#"><i class="fa fa-envelope"></i> rescate@gmail.com</a>
                <a href="#"><i class="fa fa-map-marked"></i> Ciudad Guayana, Venezuela</a>
            </div>
            <form action="#" autocomplete="off">
                <input type="text" name="nombre" placeholder="Nombre fundación" class="campo">
                <input type="text" name="telefono" placeholder="Teléfono" class="campo">
                <input type="emal" name="email" placeholder="Email" class="campo">
                <textarea name="mensaje" placeholder="Descripción de la fundación"></textarea>
                <input type="submit" name="enviar" value="Registrarse" class="btn-enviar">
            </form>
        </div>
    </div>
    
@endsection