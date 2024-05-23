@extends('layouts.dashboard')
@section('title', 'Donaciones')
@vite('resources/css/moduloAdopcionesDonaciones/crub.css')
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
                    <th scope="col">Acciones</th>
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
                            <td>
                                <button type="button" class="btn bg-purple" data-bs-toggle="modal"
                                data-bs-target="#viewProfile{{ $donation->id }}">Ver
                                donacion</button>
                            </td>
                        </tr>
                        @include('moduloAdopcionDonacion.donations.admin.ModalViewProfile')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
