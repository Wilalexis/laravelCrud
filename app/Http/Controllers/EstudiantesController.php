<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    
    public function index()
    {
        $datos = Estudiantes::orderBy('id','asc')->paginate(3);
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
        $estudiantes = new Estudiantes();
        $estudiantes->carne = $request->post('carne');
        $estudiantes->nombres = $request->post('nombres');
        $estudiantes->apellidos = $request->post('apellidos');
        $estudiantes->direccion = $request->post('direccion');
        $estudiantes->telefono = $request->post('telefono');
        $estudiantes->correo_electronico = $request->post('correo_electronico');
        $estudiantes->id_tipo_sangre = $request->post('id_tipo_sangre');
        $estudiantes->fecha_nacimiento = $request->post('fecha_nacimiento');
        $estudiantes->save();

        return redirect()->route("estudiantes.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        $estudiantes = Estudiantes::find($id);
        return view('eliminar', compact('estudiantes'));
    }

    public function edit($id)
    {
        $estudiantes = Estudiantes::find($id);
        return view('actualizar', compact('estudiantes'));
    }

    public function update(Request $request, $id)
    {
        $estudiantes = Estudiantes::find($id);
        //$estudiantes = new Estudiantes();
        $estudiantes->carne = $request->post('carne');
        $estudiantes->nombres = $request->post('nombres');
        $estudiantes->apellidos = $request->post('apellidos');
        $estudiantes->direccion = $request->post('direccion');
        $estudiantes->telefono = $request->post('telefono');
        $estudiantes->correo_electronico = $request->post('correo_electronico');
        $estudiantes->id_tipo_sangre = $request->post('id_tipo_sangre');
        $estudiantes->fecha_nacimiento = $request->post('fecha_nacimiento');
        $estudiantes->save();

        return redirect()->route("estudiantes.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        //print_r($id);
        $estudiantes = Estudiantes::find($id);
        $estudiantes->delete();
        return redirect()->route("estudiantes.index")->with("success", "Elminado con exito!");
    }
}