@extends('layout/plantilla')
@section("tituloPagina", "Crear un nuevo registro")
@section('contenido')
<div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Ingresar un nuevo estudiante</h5>
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Seguro que sea eliminar los datos
            </div>
        </p>
        <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>Carnet</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo electronico</th>
                        <th>Tipo sangre</th>
                        <th>Fecha de nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{ $estudiantes->carne}}</th>
                            <th>{{ $estudiantes->nombres}}</th>
                            <th>{{ $estudiantes->apellidos}}</th>
                            <th>{{ $estudiantes->direccion}}</th>
                            <th>{{ $estudiantes->telefono}}</th>
                            <th>{{ $estudiantes->correo_electronico}}</th>
                            <th>{{ $estudiantes->id_tipo_sangre}}</th>
                            <th>{{ $estudiantes->fecha_nacimiento}}</th>
                        </tr>
                    </tbody>
                </table>
                <hr>
        <form action="{{route('estudiantes.destroy', $estudiantes->id)}}" method="post">
            @csrf
            @method('delete')
            <a href="{{ route('estudiantes.index')}}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-danger" name="btn_crear" id="btn_crear" value="crear">Eliminar</button>
        </form>
  </div>
</div>
@endsection