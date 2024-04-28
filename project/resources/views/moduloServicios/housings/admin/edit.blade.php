@extends('moduloServicios.dashboard')
@section('title', 'Editar Alojamiento')
@section('content')
<h1>Editar Alojamiento</h1>
    <form method="POST" action="{{ route('updateHousing', $housing->id) }}" role="form" enctype="multipart/form-data">  
        {{ method_field('PUT') }}
        @csrf
        @php
            $isEdit = false;
        @endphp
        <div class="mb-3">
            <label for="address" class="form-label">direccion</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Ingrese direccion" value="{{$housing->address}}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Ingrese telefono" value="{{$housing->phone}}">
        </div>
        <div class="mb-3">
            <label for="description_location" class="form-label">Localizacion</label>
            <input type="description_location" class="form-control @error('description_location') is-invalid @enderror" id="description_location" name="description_location" placeholder="Ingrese ubicacion" value="{{$housing->description_location}}">
        </div>
        <div class="mb-3">
            <label for="type_animals" class="form-label">Tipo de animal</label>
            <select id="type_animals" name="type_animals" class="form-select">
                <option selected value="{{($housing->type_animals)}}">{{$housing->type_animals}}</option>
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="food_offer" class="form-label">Ofertas de comida</label>
            <input type="text" class="form-control @error('food_offer') is-invalid @enderror" id="food_offer" name="food_offer" placeholder="Ingrese nombre" value="{{$housing->food_offer}}">
        </div>
        <div class="mb-3">
            <label for="Img" class="form-label">Img_ref</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
             accept="image/*">
             <img  src="images/housings/{{$housing->img_ref}}">
        </div>
        <div class="mb-3">
            <a class="btn btn-red" href="{{route('housingAdmin')}}">Cancelar</a>
            <button class="btn bg-green">Guardar</button>
          </div>  
          
          @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
    </form>
@endsection