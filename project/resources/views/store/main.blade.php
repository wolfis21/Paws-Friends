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
                <img src="{{ asset('/css/moduloStore/Camaleon.png') }}"
                    alt="">
            </div>
            
            <div class="main-view">

                <h1 class="title-page">Bienvenido al Módulo de Catálogo</h1>
                <div>
                    <p class="text-welcome">Bienvenido a nuestro catálogo de productos para mascotas,
                        acá podrá encontrar información sobre distintos productos 
                        para el cuidado de los pequeños de la casa.</p>
                </div>
            </div>
        </section>

        <section class="module">
            <h2 class="title-prod">Productos Destacados</h2>
            
            <div class="cards">
                <a href="/store/products/{product_id} style="color: black;">
                <div class="card-img2">
                        <img src="https://static.miscota.com/media/1/photos/products/430600/Grature-adult-chicken-cat-6368e5845ef91_g.jpg"
                            alt="">
                            <p class= 'product-desc'> Pienso Light de Pavo para Gatos Adultos por Grature </p>
                            <p class= 'product-prize'>10.77 </p>
                </div>
                </a>

                <a href="/store/products/{product_id}">
                <div class="card-img2">
                    
                        <img
                            src="https://static.miscota.com/media/1/photos/products/430598/Grature-adult-turkey-dog-6368e5b15102c_g.jpg">
                            <p class= 'product-desc'> Pienso Light de Pavo para Perros por Grature </p>
                            <p class= 'product-prize'>10.77 </p>
                </div>
                </a>

                <a href="/store/products/{product_id}">
                <div class="card-img2">
                        <img src="https://static.miscota.com/media/1/photos/products/126684/w2aayeehnkfsopiaz4pp-6368c7830ffd2_g.jpg">
                        <p class= 'product-desc'> Champú de Arbol de Té para Mascotas </p>
                        <p class= 'product-prize'>9.77 </p>
                </div>
                </a>
                
            </div>

        </section>
        <section class="categorias">
        <h2 class="title-cat">Categorías</h2>
 
    <div class="mascotas">
        <div class="checkbox" alt="">   
            <a href="/store/products">
            <img src="https://static.miscota.com/media/1/assets/dog-icon.png">
            <t>Perros<t>
            </a>    
        </div>
        <div class="checkbox" alt=""> 
            <a href="/store/products">
            <img src="https://static.miscota.com/media/1/assets/cat-icon.png">
            <t>Gatos<t>
            </a>
        </div>
        <div class="checkbox" alt="">
            <a href="/store/products">
            <img src="https://static.miscota.com/media/1/assets/rodent-icon.png">
            <t>Roedores<t>
            </a>
        </div>
        <div class="checkbox" alt=""> 
            <a href="/store/products">  
            <img src="https://static.miscota.com/media/1/assets/bird-icon.png">
            <t>Aves<t>
            </a>
        </div>
        <div class="checkbox" alt="">
            <a href="/store/products">
            <img src="https://static.miscota.com/media/1/assets/fish-icon.png">
            <t>Peces<t>
            </a>
        </div>
        <div class="checkbox" alt=""> 
            <a href="/store/products">
            <img src="https://static.miscota.com/media/1/assets/reptile-icon.png">
            <t>Reptiles<t>
            </a>
        </div>
    </div>  
        </section>

        <section class="developer">
            <h2 class="titulo-des">Desarrolladores</h2>
            <div class="cartas">
                <div class="carta">
                    <img class="img-dev" src="{{ asset('/css/moduloStore/jesus.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4>José Vargas</h4>
                        <j><b>BACK-END</b></j>
                    </div>
                </div>
                <div class="carta"> 
                    <img class="img-dev" src="{{ asset('/css/moduloStore/maria.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4>Maria Navarro</h4>
                        <j><b>BACK-END</b></j>
                    </div>
                </div>
                <div class="carta">
                    <img class="img-dev" src="{{ asset('/css/moduloStore/fabiola.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4>Fabiola Fernandez</h4>
                        <j><b>FRONT-END</b></j>
                    </div>
                </div>
                <div class="carta">
                    <img class="img-dev" src="{{ asset('/css/moduloStore/ismael.jpg') }}" alt="">
                    <div class="contenido-texto-card">
                        <h4>Ismael Prado</h4>
                        <j><b>FRONT-END</b></j>
                    </div>
                </div>

            </div>

        </section>
    </div>
</div
@endsection