@extends('layouts.dashboard')
@section('title', 'Donaciones')
@section('content')

    <h4 style="margin-top: 15px">Donaciones admin</h4>
    <a href="{{ route('donaciones.create') }}" class="btn bg-cyan" style="margin-bottom: 15px;">Añadir
        Donacion</a> {{-- faltra desarrollar --}}
    <div class="card bg-dark">
        <div class="card-body">


            <table class="table table-dark table-responsive-md" style="width:100%">
                <thead>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tipo de donacion</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Usuario</th>
                </thead>
                <tbody>
                    @foreach ($donations as $donation)
                        <tr>
                            <td>{{ $donation->date }}</td>
                            <td>{{ $donation->type_donation }}</td>
                            <td>{{ $donation->description_ref }}</td>
                            <td>{{ $donation->qty }}</td>
                            <td>{{ $donation->destino_fundacion }}</td>
                            <td>{{ $donation->user->name }} {{ $donation->user->last_name }}</td>

                        </tr>
                        {{-- <td>{{ $donation->img_ref }} 
                            <img style="width: 5%;" src="{{ asset('storage/' . $donation->img_ref) }}" > -- provisional mejorar esto 
                        </td> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
