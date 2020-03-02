@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-5">

<form method="POST">
<div class="form-group">
    <label>Numero de maquina</label>
    <input type="number" autofocus class="form-control" disabled value="{{$maquina->num_maquina}}" name="num_maquina" placeholder="Numero de maquina">
  </div>
  <div class="form-group">
    <label >Descripción</label>
  <textarea class="form-control" name="descripcion" disabled cols="30" rows="10">{{$maquina->descripcion}} </textarea>        
      </div>
    <a href="/maquinas" class="btn btn-secondary"> Regresar</a>
</form>
        </div>
    </div>

</div>
@endsection