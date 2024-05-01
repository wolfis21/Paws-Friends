@extends('layouts.headerNav')
@section('content')

    <div class="b">

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

                    <a class="btn btn-light " href="{{route('registrodemanda')}}">Crear denuncia</a> 
                    <a class="btn btn-light " href="{{route('historialcliente')}}">Historial</a> 
                </div>
                
            </div>

            <div>
                <p class="letras">
                    ¡¡ Brindemosle una segunda oportunidad a los animales abandonados !! 
                </p>


            </div>
            

            <!--FIN DE CONTAINER FLUID-->
        </div>
        <!--FIN PRIMERA SECCION-->
    </div>

  <!--SECCION ACERCA DE NOSOTROS-->

  <div class="ba">
        <div class="container-fluid">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                    <img src="{{ URL::asset ('../imagenes/rescate.png')}}" class="foto-pequena" alt="rescate"/>
                    </div>
                    <div class="col-sm-8">
                        <h2 class="nosotros">Acerca de nosotros</h2>
                        <p class="informa">

                            Comprometidos con rescatar a los animales en situación de calle, recien abandonados o maltratados. 
                            Somos tu mejor opción de ayuda, no dudes en contactarnos. Forma parte de nuestra familia y rescata aquellos 
                            seres indefensos.

                        </p>
                    </div>
                </div>

            </div>
        </div>
  </div>
  
@endsection