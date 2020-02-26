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

        @if(session('modificado'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong>{{session('modificado')}}</strong>
          </div>
        @endif
        <h1>Carreras <a class="btn btn-success float-right" href="{{route('carreras.create')}}"><i class="fa fa-plus-circle"></i> Nuevo</a></h1>
    <table class="table table-responsive-sm table-striped">
<thead>
    <tr>
        <th>Clave de carrera</th>
        <th>Nombre de carrera</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($carreras as $carrera)
      <tr>
        <td><span class="badge badge-secondary">{{$carrera->id}}</span> </td>
        <td> {{$carrera->nombre}}</td>
        <td>
            <a href="{{route('carreras.edit',$carrera->id)}}" class="btn btn-primary my-1"><i class="fa fa-edit"></i> Editar</a>
            <a href="{{route('carreras.confirm',$carrera->id)}}" class="btn btn-danger my-1"><i class="fa fa-trash"></i> Eliminar</a>
        </td>
    </tr>  
    @endforeach
    
</tbody>

    </table>
    
    </div>

@endsection