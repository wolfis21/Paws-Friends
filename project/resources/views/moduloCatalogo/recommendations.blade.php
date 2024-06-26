@extends('layouts.headerNav')
@vite(['resources/css/moduloCatalogo/recommendations.css'])
@section('content')

<head>
<link href="https://fonts.googleapis.com/css2?family=Itim&family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

</head>

<div class="contenedor">
<section class="categorias">
        <h2 class="title-cat">Tiendas</h2>
 
            <div class="cards">
                <a href="/store/products/{product_id} style="color: black;">
                <div class="card-img2">
                        <img src="https://static.miscota.com/media/1/photos/products/430600/Grature-adult-chicken-cat-6368e5845ef91_g.jpg"
                            alt="">
                            <p class= 'product-desc'> Pienso Light de Pavo para Gatos Adultos por Grature </p>
                            <p class= 'product-prize'>$10.77 </p>
                </div>
                </a>
                <a href="/store/products/{product_id}">
                <div class="card-img2">
                        <img
                            src="https://static.miscota.com/media/1/photos/products/430598/Grature-adult-turkey-dog-6368e5b15102c_g.jpg">
                            <p class= 'product-desc'> Pienso Light de Pavo para Perros por Grature </p>
                            <p class= 'product-prize'>$10.77 </p>
                </div>
                </a>
                <a href="/store/products/{product_id}">
                <div class="card-img2">
                        <img src="https://static.miscota.com/media/1/photos/products/126684/w2aayeehnkfsopiaz4pp-6368c7830ffd2_g.jpg">
                        <p class= 'product-desc'> Champú de Arbol de Té para Mascotas </p>
                        <p class= 'product-prize'>$9.77 </p>
                </div>
                </a>    
            </div>
        </section>

    </div>
</div>
@endsection
