@extends('layouts.headerNav')
@vite('resources/css/moduloRescate/servicio.css')
@section('content')

     <!--SECCION ACERCA DE NOSOTROS-->

  <div class="ba">
        <div class="container-fluid">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                    <img src="{{ URL::asset ('../imagenes/rescate.png')}}" class="foto-pequena" alt="rescate"/>
                    </div>
                    <div class="col-sm-8">
                        <h2 class="nosotros">Módulo Brigada Rescate</h2>
                        <p class="informa">
                             Rescatamos a los animales en situación de calle, recién abandonados o maltratados. 
                             Si has visto un animal en una situación similar, nuestra sección registra tus denuncias y las gestiona para encontrar una solución pronta.
                             ¡Únete a nuestra familia y ayúdanos a proteger a los seres indefensos!

                        </p>
                        <a class="boton-ir" href="#ir">Más Información</a>
                    </div>
                </div>

            </div>
        </div>
  </div>
    <div class="b" id="ir">

        <!-- Contenido de la página principal del modulo 2. Lo que ve el Usuario al presionar el boton del menu: servicios -->

        <div class="container-fluid">

            
        <div class="container text-center">
            <!-- SECCION UNO BAJO DE NAVBAR -->
            <div class="row">

                <div class="col-md-8">
                    <h1 class="bienvenido">BIENVENIDO A RESCATE</h1>
                </div>
                <div class="boton">
                   <!--BOTONES-->

                    <a class="btn btn-light " href="{{route('registrodemanda.create')}}">Crear denuncia</a> 
                    <a class="btn btn-light " href="{{route('historial_user.index')}}">Historial</a> 
                </div>
                
            </div>

            <div>
                <p class="letras">
                    ¡¡ Brindemosle una segunda oportunidad a los animales abandonados !! 
                </p>


            </div>
            

            <!--FIN DE CONTAINER FLUID-->
        </div>
        <!--FIN SECCION-->
    </div>

@endsection