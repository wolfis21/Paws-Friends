@extends('moduloRescate.dashboard')
@section('title', 'Contactar Fundaciones')
@section('content')
<h1>Contactar Fundaciones</h1>
    <p>¡Bienvenido! Rellena el formulario y contacta las fundaciones</p>
    <form method="POST" action="{{ route('contactarfundaciones.store') }}">
        @csrf
        @php

            $isEdit = false;
        @endphp
        
        @include('moduloRescate.contactarfundaciones.form')

    </form>
@endsection