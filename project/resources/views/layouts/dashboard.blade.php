@extends('adminlte::page')

@section('title', 'Dashboard')

<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('content_header')

@stop

@section('content')
    {{-- TODO MODULO DE SERVICIOS --}}
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="row">
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
                                            <p class="m-b-0 text-right"><a href="/adminPWFS/Veterinarians"
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
                                            <p class="m-b-0 text-right"><a href="/adminPWFS/housingsAdmin"
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
                                            <p class="m-b-0 text-right"><a href="/adminPWFS/DogGroomersAdmin"
                                                    class="text-white">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-cyan order-card">
                                        <div class="card-block">
                                            <h5>Modulo de Servicios</h5>
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
    {{-- TODO FIN MODULO DE SERVICIOS --}}
    
    {{-- TODO MODULO DE RESCATE --}}
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <h5>Reubicacion</h5>
                                            {{-- @php
                                                use App\Models\moduloServicios\Veterinarian;
                                                $cant_Vets = Veterinarian::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-location f-left"></i><span>{{ $cant_Vets }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/admin/Veterinarians"
                                                    class="text-white">Ver más</a></p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-pink order-card">
                                        <div class="card-block">
                                            <h5>Situacion de calle</h5>
                                            {{-- @php
                                                use App\Models\moduloServicios\Housing;
                                                $cant_Housing = Housing::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-shield-dog f-left"></i><span>{{ $cant_Housing }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/admin/housingsAdmin"
                                                    class="text-white">Ver más</a></p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-orange order-card">
                                        <div class="card-block">
                                            <h5>Abandono</h5>
                                            {{-- @php
                                                use App\Models\moduloServicios\Dog_groomer;
                                                $cant_Peluqueria = Dog_groomer::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-x f-left"></i><span>{{ $cant_Peluqueria }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/admin/DogGroomersAdmin"
                                                    class="text-white">Ver más</a></p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-orange order-card color-white">
                                        <div class="card-block">
                                            <h5>Modulo de Rescate</h5>
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
    {{-- TODO FIN MODULO DE RESCATE --}}

    {{-- TODO MODULO DE DONACIONES Y ADOPCIONES --}}
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            {{-- @php
                                                use App\Models\moduloServicios\Veterinarian;
                                                $cant_Vets = Veterinarian::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-bowl-food f-left"></i><span>{{ $cant_Vets }}</span>
                                            </h2>--}}
                                            <p class="m-b-0 text-right"><a href="/adminPWFS/donationes"
                                                    class="text-white"><h5>Ver Donaciones</h5></a></p> {{-- para despues --}} 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-pink order-card">
                                        <div class="card-block">
                                            <h5>Juguetes</h5>
                                            {{-- @php
                                                use App\Models\moduloServicios\Housing;
                                                $cant_Housing = Housing::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-bone f-left"></i><span>{{ $cant_Housing }}</span>
                                            </h2>
                                            <p class="m-b-0 text-right"><a href="/admin/housingsAdmin"
                                                    class="text-white">Ver más</a></p> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-4">

                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <h5>Accesorios</h5>
                                            {{-- @php
                                                use App\Models\User;
                                                $cant_usuarios = User::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fas fa-fw fa-ring f-left"></i><span>{{ $cant_usuarios }}</span></h2> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-purple order-card">
                                        <div class="card-block">
                                            <h5>Modulo de Adopciones y Donaciones</h5>
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
    {{-- TODO FIN MODULO DE ADOPCIONES --}}

    {{-- TODO MODULO DE TIENDA --}}
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <h5>Productos</h5><a href="/adminPWFS/productAdmin"
                                                    class="text-white">Ver más</a></p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-green order-card">
                                        <div class="card-block">
                                            <h5>Tiendas</h5>
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
    {{-- TODO FIN MODULO DE TIENDA --}}

@stop

@section('css')
    @vite(['resources/css/moduloServicios/admin/index.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css">
@stop

@section('js')
    <link rel="stylesheet" href="https://cdn.flaticon.com/flaticon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.js"></script>
    <script src="{{ asset('js/moduloServicios/admin/dataTables/scriptDatatables.js') }}"></script>
    <script src="{{ asset('js/messageAction.js') }}"></script>
@stop
