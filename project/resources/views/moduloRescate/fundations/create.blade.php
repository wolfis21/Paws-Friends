@extends('layouts.dashboard')
@section('title', 'Registrar Fundación')
@section('content')
<h1>Registrar Fundación</h1>
    <p>Sección de registro de fundaciones de mascotas. Aquí puedes agregar información sobre organizaciones dedicadas al bienestar animal</p>
    <form method="POST" action="{{ route('fundations.store') }}">
        @csrf
        @php

            $isEdit = false;
        @endphp
        
        @include('moduloRescate.fundations.form')

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