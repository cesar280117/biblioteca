@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">
<form action="{{route('usuarios.update',$usuario->id)}}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label>Nombre</label>
      <input disabled type="text" class="form-control" value="{{$usuario->name}}" name="name" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input disabled type="mail" class="form-control"  value="{{$usuario->email}}" name="email" placeholder="Email">
    </div>
      <a href="{{url('usuarios')}}" type="button" class="btn btn-secondary">Regresar</a>

  </form>
        </div>

    </div>

</div>

  

@endsection