@extends('layouts.example')

@section('content')
    <h1>Editar Vets</h1>
    <form method="POST" action="{{ route('vets.update',  $veterinarian->id) }}"  role="form" enctype="multipart/form-data">
        {{ method_field('PUT') }}
        @csrf

        @include('vets.form')

    </form>
    
@endsection