@extends('layouts.headerNav')
@vite('resources/css/moduloRescate/stylehc.css')
@vite('resources/css/moduloRescate/servicio.css')
@section('content')

 <!--BOTON VOLVER A PAGINA PRINCIPAL SERVICIOS VISTA CLIENTE-->
    <div class="boo">
      <a class="vv-" href="{{route('servicios')}}">VOLVER</a>
    </div>

<div class="body">
    
    <main class="table" id="HISTORIAL">
        <section class="table__header">
            <h3>HISTORIAL DE DEMANDAS REALIZADAS</h3>
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Usuario <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Demanda <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Dirección <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Motivo <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Urgencia <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Status Demanda</th> 
                        <th>Status Fundación <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Fecha</th> 

                    </tr>
                </thead>
                <tbody>
                    @foreach ($demand as $demands_animalss)
                    <tr>
                        <td>{{ $demands_animalss->id }}</td>
                        <td>{{ $demands_animalss->user->name }}</td>
                        <td>{{ $demands_animalss->description_case }}</td>
                        <td>{{ $demands_animalss->adress_animals }}</td>
                        <td>{{ $demands_animalss->motivo->name }}</td>
                        <td>{{ $demands_animalss->urgencia->name }}</td>
                        <td>{{ $demands_animalss->types_status->name }}</td>
                        <td>{{ $demands_animalss->statusfund->name }}</td>
                        <td>{{ $demands_animalss->created_at->format('d/m/Y') }}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </section>
    </main>
    
</div>
<div class="body">

    <!--BOTON VOLVER A PAGINA PRINCIPAL SERVICIOS VISTA CLIENTE-->


    <main class="table" id="HISTORIAL">
        <section class="table__header">
            <h3>HISTORIAL DE DEMANDAS COMPLETADAS (RESCATES)</h3>
            
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Id <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Usuario <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Demanda <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Motivo <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Urgencia <span class="icon-arrow">&UpArrow;</span></th>
                        <th>Fundación</th> <!-- Movido al lado de Edad -->
                        <th>Status<span class="icon-arrow">&UpArrow;</span></th> 
                        <th>Fecha<span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($completada as $demand_animal_has_fundation)
                        <tr>
                            <td>{{ $demand_animal_has_fundation->demands_animalss->id }}</td>
                            <td>{{ $demand_animal_has_fundation->demands_animalss->user->name }}</td>
                            <td>{{ $demand_animal_has_fundation->demands_animalss->description_case }}</td>
                            <td>{{ $demand_animal_has_fundation->demands_animalss->motivo->name }}</td>
                            <td>{{ $demand_animal_has_fundation->demands_animalss->urgencia->name }}</td>
                            <td>{{ $demand_animal_has_fundation->fundation->name }}</td>
                            <td>{{ $demand_animal_has_fundation->demands_animalss->statusfund->name }}</td>
                            <td>{{ $demand_animal_has_fundation->updated_at->format('d/m/Y')}}</td>

                      </tr>
                   @endforeach
                </tbody>
            </table>
        </section>
    </main>
    
</div>
@endsection