@extends('layout/plantilla')
@section('estudiantes','Crud con lavarel 8')

@section('contenido')


    <ul class="nav nav-tabs" style="background-color: #e3f2fd;">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Estudiantes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Tipos de sangre</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Otros</a>
    </li>
    </ul>


<br>


<div class="container">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresar un nuevo estudiante</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="{{ route('estudiantes.store')}}" method="post" id="formulario">
            @csrf
            <div class="form-group">
            <input type="text" name="id_estudiante" id="id_estudiante" class="form-control" value="0" readonly>
              <label for="carne">Carnet</label>
              <input type="text" class="form-control" id="carne" placeholder="Ingrese carnet" name="carne">
            </div>
            <div class="form-group">
              <label for="nombres">Nombres</label>
              <input type="text" class="form-control" id="nombres" placeholder="Ingrese los nombres" name="nombres">
            </div>
            <div class="form-group">
              <label for="apellidos">Apellidos</label>
              <input type="text" class="form-control" id="apellidos" placeholder="Ingrese los apellidos" name="apellidos">
            </div>
            <div class="form-group">
              <label for="direccion">Direccio:</label>
              <input type="text" class="form-control" id="direccion" placeholder="Ingrese la direccion" name="direccion">
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="number" class="form-control" id="telefono" placeholder="Ingrese numero de telefono" name="telefono">
            </div>
            <div class="form-group">
              <label for="correo_electronico">Correo electronico:</label>
              <input type="text" class="form-control" id="correo_electronico" placeholder="Ingrese correo electronico" name="correo_electronico">
            </div>
            <div class="form-group">
              <label for="id_tipo_sangre">Sangre</label>
              <input type="text" class="form-control" id="id_tipo_sangre" placeholder="" name="id_tipo_sangre">
            </div>
            <div class="form-group">
              <label for="fecha_nacimiento">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="fecha_nacimiento"  name="fecha_nacimiento">
            </div>
          <br>
            
          

      </div>
      <div class="modal-footer">
        <a href="{{ route('estudiantes.index')}}" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary" name="btn_crear" id="btn_crear" value="crear">Crear</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <div class="card">
        <div class="card-header">
            CRUD con Laravel 8
        </div>
        <div class="card-body">
            <h5 class="card-title">Tabla estudiantes</h5>
        <br>
        <div class="row">
            <div class="col-sm-12">
                @if ($mensaje = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{$mensaje}}
                </div>
                @endif
            </div>
        </div>
        <p>
            

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>
            </button>

        </p>
        <br>
        <table class="table table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Carnet</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo electronico</th>
                    <th>Tipo sangre</th>
                    <th>Fecha de nacimiento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody id="tbl_estudiantes">
            @foreach ($datos as $item)
                <tr>
                    <th>{{ $item->carne}}</th>
                    <th>{{ $item->nombres}}</th>
                    <th>{{ $item->apellidos}}</th>
                    <th>{{ $item->direccion}}</th>
                    <th>{{ $item->telefono}}</th>
                    <th>{{ $item->correo_electronico}}</th>
                    <th>{{ $item->id_tipo_sangre}}</th>
                    <th>{{ $item->fecha_nacimiento}}</th>
                    <th>
                        <form action="{{route('estudiantes.edit', $item->id)}}" method="GET">
                            <button class="btn btn-light">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                        </form>
                    </th>
                    <th>
                        <form action="{{route('estudiantes.show', $item->id)}}" method="GET">
                            <button class="btn btn-light">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                {{$datos->links()}}
            </div>
        </div>
        </div>
    </div>
</div>