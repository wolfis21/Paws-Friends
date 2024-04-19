@extends('layouts.headerNav')

@section('content')

<div class="container">
        <div class="content-perfil">
            <p>{{$user->name}}</p>
            <p>{{$user->last_name}}</p>
            <p>{{$user->dni}}</p>
            <p>{{$user->phone}}</p>
            <p>{{$user->address}}</p>
            <p>{{$user->email}}</p>
            <img src="data:image;base64, {{ $img }}" alt="Foto">
        </div>

</div>

@endsection

