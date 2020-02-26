<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('alumnos.create');
    }


    public function store()
    {
        request()->validate([
            'id' => 'required|max:100|unique:alumnos',
            'nombre' => 'required|max:255|',
            'apellido_paterno' => 'required|max:255',
            'sexo' => 'required|max:255',
            'carrera' => 'required|max:255',
        ]);


        $alumno = new Alumno();
        $alumno->id = request('id');
        $alumno->nombre = request('nombre');
        $alumno->apellido_paterno = request('apellido_paterno');
        $alumno->apellido_materno = request('apellido_materno');
        $alumno->carrera = request('carrera');
        $alumno->sexo = request('sexo');

        $alumno->save();

        return redirect()->route('alumnos.index')->with('guardado', 'Se registro con exito el alumno.');
    }


    public function show($id)
    {
        $alumno=Alumno::findOrFail($id);
        return view('alumnos.show',compact('alumno'));
    }


    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.edit', compact('alumno'));
    }


    public function update($id)
    {
        request()->validate([
            'nombre' => 'required|max:255|',
            'apellido_paterno' => 'required|max:255',
            'sexo' => 'required|max:255',
            'carrera' => 'required|max:255',
        ]);

        $alumno = Alumno::findOrFail($id);
        $alumno->nombre = request('nombre');
        $alumno->apellido_paterno = request('apellido_paterno');
        $alumno->apellido_materno = request('apellido_materno');
        $alumno->carrera = request('carrera');
        $alumno->sexo = request('sexo');

        $alumno->update();

        return redirect()->route('alumnos.index')->with('modificado', 'Se modifico correctamente el alumno');
    }


    public function destroy($id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('eliminado', 'Se elimino corectamente el alumno seleccionado.');
    }

    public function confirm($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.confirm', compact('alumno'));
    }

    
}
