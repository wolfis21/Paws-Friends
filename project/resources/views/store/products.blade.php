@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
        <li><a href="{{route('store.products.details', 1)}}"> 1 </a></li>
        <li><a href="{{route('store.products.details', 2)}}"> 2 </a></li>
        <li><a href="{{route('store.products.details', 3)}}"> 3 </a></li>
        <li><a href="{{route('store.products.details', 4)}}"> 4 </a></li>
    </ul>
</div>

<li><a href="#productos">Productos</a></li>

<section id="productos">
        <h2>Nuestros Productos</h2>
        <div class="producto">
            <img src="imagen1.jpg" alt="Producto 1">
            <h3>Producto 1</h3>
            <p>Descripción del producto 1.</p>
            <p>Precio: $XX.XX</p>
        </div>
        <div class="producto">
            <img src="gatoxd.png" alt="Producto 2">
            <h3>Producto 2</h3>
            <p>Descripción del producto 2.</p>
            <p>Precio: $XX.XX</p>
        </div>
        <!-- Añade más productos aquí -->
    </section>
@endsection
