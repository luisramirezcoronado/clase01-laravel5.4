<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use App\Http\Requests\AlumnoRequest;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumnos::paginate(7);
        return view('CRUD.listar',compact('alumnos'));
    }

    public function create()
    {
        return view('CRUD.crear');
    }

    public function store(AlumnoRequest $request)
    {
        Alumnos::create($request->all());
        return redirect('/')->withInput();
    }

    public function edit($id)
    {
        $alumno = Alumnos::find($id);
        return view('CRUD.editar',compact('alumno'));
    }

    public function update(AlumnoRequest $request, $id)
    {
        $alumno = Alumnos::findOrFail($id);
        $alumno->fill($request->all());
        $alumno->save();
        return redirect('/')->withInput();
    }

    public function destroy($id)
    {
        $alumno = Alumnos::findOrFail($id);
        $alumno->delete();
        return redirect('/');
    }
}
