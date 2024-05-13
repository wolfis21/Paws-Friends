 @extends('layouts.headerNav')
 @section('title', 'Veterinarios')
 @vite(['resources/css/moduloServicios/user/indexServices.css'])
 @section('content')
     <!-- CDN Bootstrap Icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
     <!-- CDN Botstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Mis Estilos CSS -->
     <link rel="stylesheet" href="{{ asset('vendor/jquery-ui-1.13.3/jquery-ui.min.css') }}">

     <div class="container-title">
         <h1 class="title">Veterinarios</h1>
     </div>
     <div class="container-service">
         <div class="container-back">
             <div class="container-back results" id="resultados">

             </div>
             <div class="container-back view">
                 @foreach ($veterinarians as $veterinarian)
                     <div class="cards">
                         <a class="container-card" href="{{ route('showVeterinarianUser', $veterinarian->id) }}">
                             <div class="img-container">
                                 <img src="/storage/moduloServicios/images/vets/{{ $veterinarian->img_ref }}"
                                     alt="Imagen vet" />
                             </div>
                             <div class="info-container">
                                 <h5>
                                     @if (strlen($veterinarian->name) >= 17)
                                         @php
                                             $parts = explode(' ', $veterinarian->name, 2);
                                             $firstPart = $parts[0];
                                             $secondPart = isset($parts[1]) ? $parts[1] : '';
                                             $firstLetter = strtoupper(substr($secondPart, 0, 1));
                                             $result = $firstPart . ' ' . $firstLetter;
                                         @endphp
                                         {{ $result }}
                                     @else
                                         {{ $veterinarian->name }}
                                     @endif
                                 </h5>
                                 <p>{{ $veterinarian->specialist_animals }}</p>
                                 <div class="rating">
                                     @for ($i = 0; $i < $veterinarian->puntuation; $i++)
                                         <i class="bi bi-star-fill star"></i>
                                     @endfor
                                     @for ($i = 0; $i < 5 - $veterinarian->puntuation; $i++)
                                         <i class="bi bi-star-fill star-o"></i>
                                     @endfor
                                 </div>
                             </div>
                         </a>
                     </div>
                 @endforeach
             </div>
         </div>
         <div class="container-aside">
             <div class="form-input">
                 <div class="search">
                     <input id="buscador-input" type="text" name="searchVets" placeholder="Buscar veterinario" />
                 </div>
                 <div id="results">

                 </div>
             </div>
         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="{{ asset('js/moduloServicios/user/buscadorVets.js') }}"></script>

 @endsection
