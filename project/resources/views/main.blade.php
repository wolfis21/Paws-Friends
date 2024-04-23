@extends('layouts.headerNav')
@section('content')
    <div id="ShowcaseMain"> 
        <div>
            <a class="btn-main" href="#">Mas Informacion</a>
        </div>
    </div>

    <div id="ShowcaseServicios"> 

        <div class="modulo-box">
            <div>
                <a href="a">
                    <img class="iconosModulos" id="cuidado" src="{{ URL::asset ('imagenes/FRAMES/FRAME B/1.png')}}" alt="Cuidados">
                </a>
            </div>
        </div>

        <div class="modulo-box">
            <div>
                <a href="b"> 
                    <img class="iconosModulos" id="donaciones" src="{{ URL::asset ('imagenes/FRAMES/FRAME B/2.png')}}" alt="Donaciones y Adopciones">
                </a> 
            </div>
        </div>
        <div class="modulo-box">
            <div>
                <a href="c">
                    <img class="iconosModulos" id="rescates" src="{{ URL::asset ('imagenes/FRAMES/FRAME B/3.png')}}" alt="Rescates">
                </a>
            </div>
        </div>
        <div class="modulo-box">
            <div>
                <a href="d">
                    <img class="iconosModulos" id="tienda" src="{{ URL::asset ('imagenes/FRAMES/FRAME B/4.png')}}" alt="Catalogo">
                </a>
            </div>    
        </div>

    </div>

    <div id="ShowcaseQuienes">
        <p id="txt-quienes">Paws & Friends es una organizacion comprometida con el bienestar de las mascotas, ofreciendo una amplia gama de servicos para satisfacer
            todas las necesidades de tus peludos.
        </p>
    </div>

    <div id="ShowcaseEquipo"> 
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ URL::asset ('imagenes/FRAMES/FRAME D/vet 1.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset ('imagenes/FRAMES/FRAME D/vet 2.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset ('imagenes/FRAMES/FRAME D/vet 3.png')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ URL::asset ('imagenes/FRAMES/FRAME D/vet 4.png')}}" alt="Third slide">
                </div>

                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            </div>
            
        </div>
    </div>

@endsection



    
        
