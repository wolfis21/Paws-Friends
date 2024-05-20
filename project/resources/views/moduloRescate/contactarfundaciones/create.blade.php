@extends('layouts.dashboard')
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

@endsection