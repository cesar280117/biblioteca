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
<form method="POST" action="{{route('alumnos.store')}}">
@csrf
<div class="form-group">
    <label>Expediente</label>
    <input type="text" class="form-control" name="id" placeholder="Expediente">
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
      <div class="form-group">
        <label >Programa educativo</label>
<select name="carrera" class="form-control" >
  <option value=""></option>
  <?php use App\Carrera; $carreras=Carrera::all(); ?>
  @foreach ($carreras as $carrera)
    <option>{{$carrera->nombre}}</option>  
  @endforeach
  
</select>

      </div>
      <div class="form-group">
        <label >Sexo</label>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="sexo" value="M" class="custom-control-input">
            <label class="custom-control-label" for="customRadio1">Masculino</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="sexo" value="F" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Femenino</label>
          </div>
          
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <button type="reset" class="btn btn-danger"> Borrar</button>

</form>
        </div>
    </div>

</div>
@endsection