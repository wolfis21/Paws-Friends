@extends('layouts.dashboard')
@section('title', 'Crear Demanda')
@section('content')
<h1>Crear Demanda</h1>
    <p>Sección de registro de demandas de rescate</p>
    <form method="POST" action="{{ route('historial_admin.store') }}" enctype="multipart/form-data">
        @csrf
        @php

            $isEdit = false;
        @endphp
        
        @include('moduloRescate.historial_admin.form')

    </form>
@endsection