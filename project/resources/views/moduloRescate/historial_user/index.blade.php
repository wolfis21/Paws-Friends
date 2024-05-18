@extends('layouts.headerNav')
@section('content')


<div class="body">

    <!--BOTON VOLVER A PAGINA PRINCIPAL SERVICIOS VISTA CLIENTE-->
    <div class="boo">
        <a class="vv-" href="{{route('moduloRescate.homeRescate')}}">VOLVER</a>
    </div>
    <main class="table" id="HISTORIAL">
        <section class="table__header">
            <h3>HISTORIAL DE DEMANDAS REALIZADAS</h3>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="{{ URL::asset ('../imagenes/imghc/search.png')}}" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="{{ URL::asset ('../imagenes/imghc/pdf.png')}}" alt=""></label>
                </div>
            </div>
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
                        <th>Status Demanda</th> <!-- Movido al lado de Edad -->
                        <th>Status Fundación <span class="icon-arrow">&UpArrow;</span></th> 
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
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="{{ URL::asset ('../imagenes/imghc/search.png')}}" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="{{ URL::asset ('../imagenes/imghc/pdf.png')}}" alt=""></label>
                </div>
            </div>
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

                      </tr>
                   @endforeach
                </tbody>
            </table>
        </section>
    </main>
    
</div>
@endsection