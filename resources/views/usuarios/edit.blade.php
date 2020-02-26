@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3>Usuario: {{$usuario->name}}</h3>
<form action="{{route('usuarios.update',$usuario->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" value="{{$usuario->name}}" name="name" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input type="mail" class="form-control"  value="{{$usuario->email}}" name="email" placeholder="Email">
    </div>
      <button type="submit" class="btn btn-success">Modificar</button>
      <a href="{{url('usuarios')}}" type="button" class="btn btn-secondary">Regresar</a>

  </form>
        </div>

    </div>

</div>

  

@endsection