@extends('layouts.navMenu')
@section('title', 'Modulo de servicio')
@vite(['resources/css/moduloServicios/user/index.css'])
@section('content')
    <div class="contenedor">
        <h1>Modulo de servicios</h1>
        <p>Ofrecemos estos servicios</p>
        <div class="cards">
            <div class="card">
                <img src="https://images.pexels.com/photos/6235225/pexels-photo-6235225.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="">
                <div class="pservicio"><a href="{{ route('Veterinario') }}">Veterinario</a></div>
            </div>
            <div class="card">
                <img
                    src="https://images.unsplash.com/photo-1535126320463-c5c1b26b3e66?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="pservicio">Alojamiento</div>
            </div>
            <div class="card">
                <img
                    src="https://plus.unsplash.com/premium_photo-1664297694687-570b7f392906?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="pservicio">Peluqueria</div>
            </div>
        </div>
    </div>
@endsection
