@extends('dashboard')
@section('title', 'Crear Veterinario')
@section('content')
<h1>Crear Veterinario</h1>
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data" >
        {{ method_field('PUT') }}
        @csrf
        @php

            $isEdit = false;
        @endphp
        
        @include('veterinarian.admin.form')

    </form>
@endsection