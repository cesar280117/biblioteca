<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{

    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index', compact('docentes'));
    }


    public function create()
    {
        return view('docentes.create');
    }


    public function store()
    {
        request()->validate([
            'id' => 'required|unique:docentes|max:50',
            'nombre' => 'required|max:100',
            'apellido_paterno' => 'required|max:100',

        ]);


        $docente = new Docente();
        $docente->id = request('id');
        $docente->nombre = request('nombre');
        $docente->apellido_paterno = request('apellido_paterno');
        $docente->apellido_materno = request('apellido_materno');

        $docente->save();

        return redirect()->route('docentes.index')->with('guardado', 'Se registro correctamente el docente');
    }


    public function show($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docentes.show', compact('docente'));
    }

    public function edit($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docentes.edit', compact('docente'));
    }


    public function update($id)
    {
        request()->validate([
            'nombre' => 'required|max:100',
            'apellido_paterno' => 'required|max:100',
        ]);

        $docente = Docente::findOrFail($id);
        $docente->nombre = request('nombre');
        $docente->apellido_paterno = request('apellido_paterno');
        $docente->apellido_materno = request('apellido_materno');

        $docente->update();

        return redirect()->route('docentes.index')->with('modificado', 'Se modifico correctamente el docente.');
    }

    public function destroy($id)
    {
        $docente = Docente::findOrFail($id);
        $docente->delete();

        return redirect()->route('docentes.index')->with('eliminado', 'Se elimino correctamente el docente seleccionado.');
    }
    public function confirm($id)
    {
        $docente = Docente::findOrFail($id);
        return view('docentes.confirm', compact('docente'));
    }
}
