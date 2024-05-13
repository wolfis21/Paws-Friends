@extends('layouts.dashboard')
@section('title', 'Registrar Donacion')
@section('content')
<h1>Crear Veterinario</h1>
    <form method="POST" action="{{ route('donaciones.store') }}" enctype="multipart/form-data" >
        {{ method_field('POST') }}
        @csrf
        
        @include('moduloAdopcionDonacion.donations.admin.form')

    </form>
@endsection