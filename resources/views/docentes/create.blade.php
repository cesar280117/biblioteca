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

<form method="POST" action="{{route('docentes.store')}}">
    @csrf
    <div class="form-group">
      <label>Id</label>
      <input type="text" class="form-control" name="id" placeholder="ID">
    </div>
    <div class="form-group">
      <label >Nombre</label>
      <input type="text" class="form-control text-capitalize" name="nombre" placeholder="Nombre(s)">
    </div>
    <div class="form-group">
        <label >Apellido paterno</label>
        <input type="text" class="form-control text-capitalize" name="apellido_paterno" placeholder="Apellido paterno">
      </div>
      <div class="form-group">
        <label >Apellido materno</label>
        <input type="text" class="form-control text-capitalize" name="apellido_materno" placeholder="Apellido materno">
      </div>
      <input type="submit" class="btn btn-success" value="Guardar">
      <input type="reset" value="Borrar" class="btn btn-danger">
    
  </form>
</div>
</div>
</div>

  
@endsection