@extends('layout/plantilla')
@section("tituloPagina", "Crear un nuevo registro")
@section('contenido')
<div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Actualizar los datos del estudiante</h5>

    <p class="card-text">
    <form action="{{ route('estudiantes.update', $estudiantes->id)}}" method="post" id="formulario">
            @csrf
            @method("PUT")
            <div class="form-group">
            <input type="text" name="id_estudiante" id="id_estudiante" class="form-control" readonly value="{{$estudiantes->id}}">
              <label for="carne">Carnet</label>
              <input type="text" class="form-control" id="carne" placeholder="Ingrese carnet" name="carne" value="{{$estudiantes->carne}}">
            </div>
            <div class="form-group">
              <label for="nombres">Nombres</label>
              <input type="text" class="form-control" id="nombres" placeholder="Ingrese los nombres" name="nombres" value="{{$estudiantes->nombres}}">
            </div>
            <div class="form-group">
              <label for="apellidos">Apellidos</label>
              <input type="text" class="form-control" id="apellidos" placeholder="Ingrese los apellidos" name="apellidos" value="{{$estudiantes->apellidos}}">
            </div>
            <div class="form-group">
              <label for="direccion">Direccio:</label>
              <input type="text" class="form-control" id="direccion" placeholder="Ingrese la direccion" name="direccion" value="{{$estudiantes->direccion}}">
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="number" class="form-control" id="telefono" placeholder="Ingrese numero de telefono" name="telefono" value="{{$estudiantes->telefono}}">
            </div>
            <div class="form-group">
              <label for="correo_electronico">Correo electronico:</label>
              <input type="text" class="form-control" id="correo_electronico" placeholder="Ingrese correo electronico" name="correo_electronico" value="{{$estudiantes->correo_electronico}}">
            </div>
            <div class="form-group">
              <label for="id_tipo_sangre">Sangre</label>
              <input type="text" class="form-control" id="id_tipo_sangre" placeholder="" name="id_tipo_sangre" value="{{$estudiantes->id_tipo_sangre}}">
            </div>
            <div class="form-group">
              <label for="fecha_nacimiento">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="fecha_nacimiento"  name="fecha_nacimiento" value="{{$estudiantes->fecha_nacimiento}}">
            </div>
          <br>
            <a href="{{ route('estudiantes.index')}}" class="btn btn-secondary">Regresar</a>
            <button  class="btn btn-warning" name="btn id="btn" >Actualizar</button>
          </form>
    </p>
  </div>
</div>
@endsection