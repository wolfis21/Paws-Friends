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

    </div>

@endsection



    
        
