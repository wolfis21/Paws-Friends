@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h3 class="page__heading">Dashboard</h3>
@stop

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">

                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <h5>Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $cant_usuarios = User::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-users f-left"></i><span>{{ $cant_usuarios }}</span></h2>
                                            <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <h5>Veterinarios</h5>
                                            @php
                                                use App\Models\moduloServicios\Veterinarian;
                                                $cant_Vets = Veterinarian::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-dog f-left"></i><span>{{ $cant_Vets }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/admin/Veterinarians"
                                                    class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-pink order-card">
                                        <div class="card-block">
                                            <h5>Alojamientos</h5>
                                            @php
                                                use App\Models\moduloServicios\Housing;
                                                $cant_Housing = Housing::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-home f-left"></i><span>{{ $cant_Housing }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/admin/housingsAdmin"
                                                    class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-orange order-card">
                                        <div class="card-block">
                                            <h5>Peluquerias</h5>
                                            @php
                                                use App\Models\moduloServicios\Dog_groomer;
                                                $cant_Peluqueria = Dog_groomer::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-paw f-left"></i><span>{{ $cant_Peluqueria }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/admin/DogGroomersAdmin" class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-purple order-card">
                                        <div class="card-block">
                                            <h5>Comentarios</h5>
                                            @php
                                                use App\Models\moduloServicios\Comment;
                                                $cant_Comentarios = Comment::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-comment f-left"></i><span>{{ $cant_Comentarios }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><ico class="text-black"></ico></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    @vite(['resources/css/moduloServicios/admin/index.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css">
    {{-- @vite('resources/css/moduloServicios/admin/dataTables/bootstrap.min.css', 'resources/css/moduloServicios/admin/dataTables/dataTables.bootstrap5.min.css') --}}
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.js"></script>
    @vite(['moduloServicios/js/admin/dataTables/scriptDatatables.js'])
    {{-- <script src="{{asset('moduloServicios/js/admin/dataTables/jquery-3.7.1.js')}}"></script>
    <script src="{{asset('moduloServicios/js/admin/dataTables/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('moduloServicios/js/admin/dataTables/dataTables.js')}}"></script>
    <script src="{{asset('moduloServicios/js/admin/dataTables/dataTables.bootstrap5.js')}}"></script> --}}
@stop
