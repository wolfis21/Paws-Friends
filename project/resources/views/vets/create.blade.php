@extends('layouts.example')

@section('content')
<h1>Crear Vets</h1>
    <form method="POST" action="{{ route('vets.store') }}">  
        @csrf
        @php

            $isEdit = false;
        @endphp
        
        @include('vets.form')

    </form>
@endsection