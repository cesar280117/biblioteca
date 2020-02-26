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

<form method="POST" action="{{route('carreras.update',$carrera->id)}}">
@csrf
@method('PATCH')

  <div class="form-group">
    <label>Nombre de carrera</label>
    <input type="text" class="text-capitalize form-control" value="{{$carrera->nombre}}" name="nombre"  placeholder="Nombre de carrera">
  </div>
  <button class="btn btn-outline-success" type="submit">Modificar</button>
  <a href="{{route('carreras.index')}}" class="btn btn-outline-secondary" type="reset">Regresar</a>

</form>
</div>
</div>
</div>

@endsection