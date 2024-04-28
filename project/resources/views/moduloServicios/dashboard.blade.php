@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Dashboard Modulo 1</h1>
@stop

@section('content')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('ccs/index.ccs')}}">
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
    {{-- <script src="{{asset('moduloServicios/js/admin/dataTables/jquery-3.7.1.js')}}"></script>
    <script src="{{asset('moduloServicios/js/admin/dataTables/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('moduloServicios/js/admin/dataTables/dataTables.js')}}"></script>
    <script src="{{asset('moduloServicios/js/admin/dataTables/dataTables.bootstrap5.js')}}"></script> --}}
    <script>
        new DataTable('#Veterinarios', {
            responsive: true,
            autoWith: false,
            "language": {
                "lengthMenu": "Mostrar" +`
                <select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value = '5'>5</option>
                    <option value = '10'>10</option>
                    <option value = '25'>25</option>
                    <option value = '100'>100</option>
                    <option value = '-1'>Todos</option>
                    </select>
                `+ 
                "registros por pagina",
                "zeroRecords": "No se encontro nada - disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
        new DataTable('#ComentariosVets',{
            responsive: true,
            autoWith: false,
            "language": {
                "lengthMenu": "Mostrar" +`
                <select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value = '5'>5</option>
                    <option value = '10'>10</option>
                    <option value = '25'>25</option>
                    <option value = '100'>100</option>
                    <option value = '-1'>Todos</option>
                    </select>
                `+ 
                "registros por pagina",
                "zeroRecords": "No se encontro nada - disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });

        new DataTable('#Alojamiento',{
            responsive: true,
            autoWith: false,
            "language": {
                "lengthMenu": "Mostrar" +`
                <select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value = '5'>5</option>
                    <option value = '10'>10</option>
                    <option value = '25'>25</option>
                    <option value = '100'>100</option>
                    <option value = '-1'>Todos</option>
                    </select>
                `+ 
                "registros por pagina",
                "zeroRecords": "No se encontro nada - disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });

        new DataTable('#AlojamientoComments',{
            responsive: true,
            autoWith: false,
            "language": {
                "lengthMenu": "Mostrar" +`
                <select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value = '5'>5</option>
                    <option value = '10'>10</option>
                    <option value = '25'>25</option>
                    <option value = '100'>100</option>
                    <option value = '-1'>Todos</option>
                    </select>
                `+ 
                "registros por pagina",
                "zeroRecords": "No se encontro nada - disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });

        new DataTable('#Peluqueria',{
            responsive: true,
            autoWith: false,
            "language": {
                "lengthMenu": "Mostrar" +`
                <select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value = '5'>5</option>
                    <option value = '10'>10</option>
                    <option value = '25'>25</option>
                    <option value = '100'>100</option>
                    <option value = '-1'>Todos</option>
                    </select>
                `+ 
                "registros por pagina",
                "zeroRecords": "No se encontro nada - disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });

        new DataTable('#PeluqueriaComments',{
            responsive: true,
            autoWith: false,
            "language": {
                "lengthMenu": "Mostrar" +`
                <select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value = '5'>5</option>
                    <option value = '10'>10</option>
                    <option value = '25'>25</option>
                    <option value = '100'>100</option>
                    <option value = '-1'>Todos</option>
                    </select>
                `+ 
                "registros por pagina",
                "zeroRecords": "No se encontro nada - disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    </script>
@stop
