@extends('layouts.headerNav')
@section('content')


    <form method="POST" action="{{ route('registrodemanda.store') }}" enctype="multipart/form-data">
        @csrf
        @php

             $isEdit = false;
        @endphp
    
        @include('moduloRescate.registrodemanda.form')

    </form>
@endsection