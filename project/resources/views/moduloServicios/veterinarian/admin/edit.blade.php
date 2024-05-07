@extends('layouts.dashboard')
@section('title', 'Editar Veterinario')
@section('content')
    <h1>Editar Veterinario</h1>
    <form method="POST" action="{{ route('update',  $veterinarian->id) }}"  role="form" enctype="multipart/form-data">
      {{ method_field('PUT') }}  
      @csrf

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Jose Garcia" value="{{($veterinarian->name)}}">
          </div>
          <div class="mb-3">
              <label for="Direccion" class="form-label">Direccion</label>
              <input type="text" class="form-control @error('address') is-invalid @enderror " id="address" name="address" placeholder="Ciudad Guayana, Los olivos" value="{{($veterinarian->address)}}">
            </div>
            <div class="mb-3">
              <label for="Telefono" class="form-label">Telefono</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="04141912013" value="{{($veterinarian->phone)}}">
            </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@gmail.com" value="{{($veterinarian->email)}}">
          </div>
          <div class="mb-3">
              <label for="link_ref" class="form-label">link_ref</label>
              <input type="text" class="form-control @error('link_ref') is-invalid @enderror" id="link_ref" name="link_ref" placeholder="https://instagram
              .com" value="{{($veterinarian->link_ref)}}">
          </div>
          <div class="mb-3">
            <label for="Img" class="form-label">Img_ref</label>
            <input type="file" class="form-control @error('img_ref') is-invalid @enderror" id="img_ref" name="img_ref"
                value="images/vets/{{($veterinarian->img_ref)}}" accept="image/*">
          </div>
          <div class="mb-3">
            <label for="Especialidad" class="form-label">Especialidad</label>
            <select id="specialist_animals" name="specialist_animals" class="form-select">
              <option selected value="{{($veterinarian->specialist_animals)}}">{{$veterinarian->specialist_animals}}</option>
              <option value="Medicina Interna">Medicina Interna</option>
              <option value="Urgencias">Urgencias</option>
              <option value="Cirugia">Cirugia</option>
              <option value="Dermatologia">Dermatologia</option>
              <option value="Fisioterapia">Fisioterapia</option>
              <option value="Oftalmologia">Oftalmologia</option>
              <option value="Oncologia">Oncologia</option>
              <option value="Radiología">Radiología</option>
              <option value="Nutricion">Nutricion</option>
              <option value="Otro">Otro</option>
            </select>
          </div>
          <div class="mb-3">
            <a class="btn bg-red" href="{{route('index')}}">Cancelar</a>
            <button class="btn bg-cyan">Guardar</button>
          </div>  
          
          @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror

    </form>
    
@endsection