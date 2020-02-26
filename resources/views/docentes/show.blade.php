@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-5">
<form method="POST" action="{{route('docentes.update',$docente->id)}}">
    @csrf
    @method('PATCH')
   
    <div class="form-group">
      <label >Nombre</label>
      <input type="text" value="{{$docente->nombre}}" disabled class="form-control text-capitalize" name="nombre" placeholder="Nombre(s)">
    </div>
    <div class="form-group">
        <label >Apellido paterno</label>
        <input type="text" value="{{$docente->apellido_paterno}}" disabled class="form-control text-capitalize" name="apellido_paterno" placeholder="Apellido paterno">
      </div>
      <div class="form-group">
        <label >Apellido materno</label>
        <input type="text" value="{{$docente->apellido_materno}}" disabled class="form-control text-capitalize" name="apellido_materno" placeholder="Apellido materno">
      </div>
      <a href="{{route('docentes.index')}}" class="btn btn-secondary">Regresar </a>
    
  </form>
</div>
</div>
</div>

  
@endsection