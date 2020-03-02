@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('modificado'))
    <div class="alert alert-primary alert-primary fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <strong>{{session('modificado')}}</strong> 
      </div>
      
     @endif

@if(session('guardado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>{{session('guardado')}}</strong> 
  </div>
  
    
@endif

@if(session('eliminacion'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>{{session('eliminacion')}}</strong> 
  </div>
  
    
@endif

<h1>Equipo de computo <a class="btn btn-success float-right" href="{{route('maquinas.create')}}"><i class="fa fa-plus-circle"></i> Nuevo</a></h1>
<table class="table table-striped table-responsive-sm">
    <thead>
        <tr>
            <th>Numero de maquina</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($maquinas as $maquina)
         <tr>
            <td><a title="Ver los datos del equipo de computo {{$maquina->num_maquina}}" class="btn btn-link font-weight-bold" href="{{route('maquinas.show',$maquina->id)}}"> {{$maquina->num_maquina}}</a> </td>
            <td>
                <a href="{{route('maquinas.edit',$maquina->id)}}" class="btn btn-primary my-1"><i class="fa fa-edit"></i> Editar</a>
                <a href="{{route('maquinas.confirm',$maquina->id)}}" class="btn btn-danger m-1"><i class="fa fa-trash"></i> Eliminar</a>
            </td>
        </tr>   
        @endforeach
        
    </tbody>
</table>
</div>

@endsection