<?php

namespace App\Http\Controllers;

use App\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $maquinas = Maquina::all();
        return view('maquinas.index', compact('maquinas'));
    }
    public function create()
    {
        return view('maquinas.create');
    }

    public function store()
    {
        request()->validate([
            'num_maquina' => 'required|unique:maquinas',
            'descripcion' => 'max:800',
        ]);

        $maquina = new Maquina();
        $maquina->num_maquina = request('num_maquina');
        $maquina->descripcion = request('descripcion');
        $maquina->save();

        return redirect()->route('maquinas.index')->with('guardado', 'Se registro correctamente el equipo de computo');
    }

    public function edit($id)
    {
        $maquina = Maquina::findOrFail($id);
        return view('maquinas.edit', compact('maquina'));
    }

    public function update($id)
    {
        request()->validate([
            'num_maquina' => 'required|unique:maquinas',
            'descripcion' => 'required|max:800',
        ]);


        $maquina = Maquina::findOrFail($id);
        $maquina->num_maquina = request('num_maquina');
        $maquina->descripcion = request('descripcion');
        $maquina->update();

        return redirect()->route('maquinas.index')->with('modificado', 'Se modifico correctamente el equipo de computo');
    }

    public function confirm($id)
    {
        $maquina = Maquina::findOrFail($id);
        return view('maquinas.confirm', compact('maquina'));
    }

    public function destroy($id)
    {
        $maquina = Maquina::findOrFail($id);
        $maquina->delete();

        return redirect()->route('maquinas.index')->with('eliminacion', 'Se elimino correctamente el equipo de computo seleccionado');
    }

    public function show($id)
    {
        $maquina = Maquina::findOrFail($id);
        return view('maquinas.show', compact('maquina'));
    }
}
