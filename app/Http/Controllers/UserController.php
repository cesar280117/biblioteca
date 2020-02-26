<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }


    public function create()
    {
        return view('usuarios.create');
    }


    public function store()
    {
        //validaciones de usuarios
        request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|min:6',
        ]);


        $usuario = new User();
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = request('password');

        $usuario->save();

        return redirect()->route('usuarios.index')->with('guardado', 'Se registro correctamente el usuario');
    }


    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.show', compact('usuario'));
    }


    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    public function update($id)
    {
      //validacion de usuarios
      request()->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255|email',
    ]);



        $usuario = User::findOrFail($id);
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->update();

        return redirect()->route('usuarios.index')->with('modificado', 'Se modifico correctamente el usuario');
    }



    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('eliminado', 'Se elimino correctamente el usuario');
    }

    public function confirm($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.confirm', compact('usuario'));
    }
}
