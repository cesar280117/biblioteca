@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-5">

@if($errors->any())

<div class="alert alert-danger">
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</div>

@endif

<form method="POST" action="{{route('docentes.update',$docente->id)}}">
    @csrf
    @method('PATCH')
   
    <div class="form-group">
      <label >Nombre</label>
      <input type="text" value="{{$docente->nombre}}" class="form-control text-capitalize" name="nombre" placeholder="Nombre(s)">
    </div>
    <div class="form-group">
        <label >Apellido paterno</label>
        <input type="text" value="{{$docente->apellido_paterno}}" class="form-control text-capitalize" name="apellido_paterno" placeholder="Apellido paterno">
      </div>
      <div class="form-group">
        <label >Apellido materno</label>
        <input type="text" value="{{$docente->apellido_materno}}" class="form-control text-capitalize" name="apellido_materno" placeholder="Apellido materno">
      </div>
      <input type="submit" class="btn btn-success" value="Guardar">
      <a href="{{route('docentes.index')}}" class="btn btn-secondary">Regresar </a>
    
  </form>
</div>
</div>
</div>

  
@endsection