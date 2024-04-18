<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('includes.head')
</head>
<body class="b">

    <header>
        @include('includes.header')
    </header>

    <main class="m">

        <!-- Contenido de la página principal del modulo 2. Lo que ve el Usuario al presionar el boton del menu: servicios -->

        <div class="container-fluid">

            
        <div class="container text-center">
            <!-- SECCION UNO BAJO DE NAVBAR -->
            <div class="row">
                <div class="col-md-8">
                    <h1 class="bienvenido">BIENVENIDO A RESCATE</h1>
                </div>
                <div class="col-6 col-md-4">
                <img src="{{ URL::asset ('imagenes/rescate.png')}}" class="d-block w-100 foto-pequena" alt="hombre"> </div>
                </div>

                <!--BOTONES-->

                <a class="btn btn-warning" href="{{route('registrodemanda')}}">CREAR DENUNCIA</a>
                
        </div>


        <!--FIN DE CONTAINER FLUID-->
        </div>

    </main>
    


    <footer>
        @include('includes.footer')
    </footer>
    

</body>
</html>