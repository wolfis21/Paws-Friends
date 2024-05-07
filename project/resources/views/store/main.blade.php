@extends('layouts.headerNav')
@vite(['resources/css/moduloStore/store.css'])
@section('content')
<head>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

</head>

<div class="contenedor">
        <section class="welcome">

            <div class="img">
                <img src="{{ asset('/moduloStore/Camaleon.png') }}"
                    alt="">
            </div>
            
            <div class="main-view">

                <h1 class="title-page">Bienvenido al Módulo de Catálogo</h1>
                <div>
                    <p class="texto-bienvenida">Bienvenido a nuestro catálogo de productos para mascotas,
                        acá podrá encontrar información sobre distintos productos 
                        para el cuidado de los pequeños de la casa.</p>
                </div>
            </div>
        </section>

        <section class="module">
            <h2 class="titulo-prod">Productos Destacados</h2>
            <div class="cards">
                <div class="card-img2">
                        <img src="https://static.miscota.com/media/1/photos/products/430600/Grature-adult-chicken-cat-6368e5845ef91_g.jpg"
                            alt="">
                            <p class= 'product-desc'> Pienso Light de Pavo para Gatos Adultos por Grature </p>
                            <p class= 'product-prize'>10.77 </p>
                </div>
                <div class="card-img2">
                    
                        <img
                            src="https://static.miscota.com/media/1/photos/products/430598/Grature-adult-turkey-dog-6368e5b15102c_g.jpg">
                            <p class= 'product-desc'> Pienso Light de Pavo para Perros por Grature </p>
                            <p class= 'product-prize'>10.77 </p>
                </div>
                <div class="card-img2">
                        <img src="https://static.miscota.com/media/1/photos/products/126684/w2aayeehnkfsopiaz4pp-6368c7830ffd2_g.jpg">
                        <p class= 'product-desc'> Champú de Arbol de Té para Mascotas </p>
                        <p class= 'product-prize'>9.77 </p>
                </div>
            </div>
        </section>
        <section class="categorias">
        <h2 class="titulo-cat">Categorías</h2>
 
    <div class="mascotas">
        <div class="checkbox" alt=""> 
            <img src="https://static.miscota.com/media/1/assets/dog-icon.png">
        </div>
        <div class="checkbox" alt=""> 
            <img src="https://static.miscota.com/media/1/assets/cat-icon.png">
        </div>
        <div class="checkbox" alt="">
            <img src="https://static.miscota.com/media/1/assets/rodent-icon.png">
        </div>
        <div class="checkbox" alt=""> 
            <img src="https://static.miscota.com/media/1/assets/bird-icon.png">
        </div>
        <div class="checkbox" alt="">
            <img src="https://static.miscota.com/media/1/assets/fish-icon.png">
        </div>
        <div class="checkbox" alt=""> 
            <img src="https://static.miscota.com/media/1/assets/reptile-icon.png">
        </div>
    </div>  
        </section>

        <section class="developer">
            <h2 class="titulo-des">Desarrolladores</h2>
            <div class="cartas">
                <div class="carta">
                    <img class="img-dev" src="{{ asset('/moduloStore/jesus.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4>José Vargas</h4>
                        <p><b>BACK-END</b></p>
                    </div>
                </div>

                <div class="carta">
                    <img class="img-dev" src="{{ asset('/moduloStore/ismael.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4>Ismael Prado</h4>
                        <p><b>FRONT-END</b></p>
                    </div>
                </div>

            </div>

        </section>
    </div>

@endsection