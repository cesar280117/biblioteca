@extends('layouts.app')

@section('content')

<div class="container">

  @if( session('guardado'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>{{session('guardado')}}</strong>
  </div>
  
  @endif

@if(session ('modificado') )


<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>{{session('modificado')}}</strong>
</div>
@endif

  @if(session('eliminado'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong>{{session('eliminado')}}</strong>
  </div>
  @endif
  <h1>Alumnos <a class="btn btn-success float-right" href="{{route('alumnos.create')}}"><i class="fa fa-plus-circle"></i> Nuevo</a> </h1>
<table class="table table-responsive-sm table-striped">
  <thead >
    <tr>
      <th>Expediente</th>
      <th>Nombre</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Carrera</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($alumnos as $alumno)
        <tr>
      <th scope="row"><a title="Dar click para ver la información del alumno: {{$alumno->nombre .' '. $alumno->apellido_paterno}}  " href="{{route('alumnos.show',$alumno->id)}}">{{$alumno->id}}</a></th>
      <td>{{$alumno->nombre}}</td>
      <td>{{$alumno->apellido_paterno}}</td>
      <td>{{$alumno->apellido_materno}}</td>
      <td>{{$alumno->carrera}}</td>
      <td>
        <a class="btn btn-primary my-2" href="{{route('alumnos.edit',$alumno->id)}}"><i class="fa fa-edit"></i> Editar</a>
        <a class="btn btn-danger my-2" href="{{route('alumnos.confirm',$alumno->id)}}"><i class="fa fa-trash"></i> Eliminar</a>
      </td>
    </tr>  
    @endforeach
  
  </tbody>
</table>
</div>


  
  
@endsection