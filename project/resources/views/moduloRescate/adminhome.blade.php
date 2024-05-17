@extends('layouts.headerNav')
@section('content')

    <div class="b">

        <!-- Contenido de la página principal del modulo 2. Lo que ve el Usuario al presionar el boton del menu: servicios -->

        <div class="container-fluid">

            
        <div class="container text-center">
            <!-- SECCION UNO BAJO DE NAVBAR -->
            <div class="row">

                <div class="col-md-8">
                    <h1 class="bienvenido">BIENVENIDO ADMINISTRADOR</h1>
                </div>
                <div class="boton">
                   <!--BOTONES-->

                    <a class="btn btn-light " href="{{route('fundations.index')}}">Crear fundación</a> 
                    <a class="btn btn-light " href="#">Historial</a> 
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


@endsection