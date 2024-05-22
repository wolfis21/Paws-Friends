@extends('layouts.dashboard')
@section('title', 'Donaciones')
@vite('resources/css/moduloAdopcionesDonaciones/estilosCrub.css')
@section('content')

    <h4 style="margin-top: 15px">Donaciones admin</h4>
    <div class="card bg-dark">
        <div class="card-body">
            <table id="Donaciones" class="table table-dark table-responsive-md" style="width:100%">
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
