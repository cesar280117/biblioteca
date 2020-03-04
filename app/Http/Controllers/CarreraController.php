<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;

class CarreraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $query = trim(request('busqueda'));
        $carreras = Carrera::where('id', '=', $query)
            ->orwhere('nombre', 'LIKE', '%' . $query . '%')
            ->orderBy('id', 'asc')
            ->paginate(40);

        return view('carreras.index', compact('carreras'));
    }


    public function create()
    {
        return view('carreras.create');
    }


    public function store(Request $request)
    {
        request()->validate([
            'id' => 'required|max:100|unique:carreras',
            'nombre' => 'required|max:100|unique:carreras',
        ]);

        $carrera = new Carrera();

        $carrera->id = request('id');
        $carrera->nombre = request('nombre');

        $carrera->save();

        return redirect()->route('carreras.index')->with('guardado', 'Se registro correctamente la carrera');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.edit', compact('carrera'));
    }


    public function update($id)
    {
        request()->validate([
            'nombre' => 'required|max:100|unique:carreras',
        ]);

        $carrera = Carrera::findOrFail($id);
        $carrera->nombre = request('nombre');
        $carrera->update();
        return redirect()->route('carreras.index')->with('modificado', 'Se modifico correctamente la carrera');
    }

    public function destroy($id)
    {
        $carrera = Carrera::findOrFail($id);
        $carrera->delete();
        return redirect()->route('carreras.index')->with('eliminado', 'Se elimino correctamente la carrera');
    }

    public function confirm($id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('carreras.confirm', compact('carrera'));
    }
}
