@extends('layouts.app')

@section('content')
<div class="container">

    @if( session('guardado'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <strong> {{session('guardado')}} </strong>
      </div>
      
    @endif

    @if(session('modificado'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <strong> {{session('modificado')}} </strong>
      </div>
    @endif

    @if(session('eliminado'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <strong> {{session('eliminado')}} </strong>
      </div>
    @endif


    <h1>Docentes <a class="btn btn-success float-right" href="{{route('docentes.create')}}"><i class="fa fa-plus-circle"></i> Nuevo</a></h1>
<table class="table table-responsive-sm table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($docentes as $docente)
          <tr>
            <th scope="row"><a title="Dar click para ver la información de {{$docente->apellido_paterno}} {{$docente->nombre}}" href="{{route('docentes.show',$docente->id)}}">{{$docente->id}}</a></th>
            <td>{{$docente->nombre}}</td>
            <td>{{$docente->apellido_paterno}}</td>
            <td>{{$docente->apellido_materno}}</td>
            <td>
                <a class="btn btn-primary my-1" href="{{route('docentes.edit',$docente->id)}}"><i class="fa fa-edit"></i> Editar</a>
                <a class="btn btn-danger my-1" href="{{route('docentes.confirm',$docente->id)}}"><i class="fa fa-trash"></i> Eliminar</a>
            </td>
            
        </tr>  
        @endforeach
        
    </tbody>
</table>
{{$docentes->links()}}
</div>
@endsection