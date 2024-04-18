@extends('layouts.example')
@section('title', 'Create Veterinarian')
@section('content')
<h1>Crear Vets</h1>
    <form method="POST" action="{{ route('vets.store') }}" enctype="multipart/form-data" >
        @csrf
        @php

            $isEdit = false;
        @endphp
        
        @include('vets.form')

    </form>
@endsection