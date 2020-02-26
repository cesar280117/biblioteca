@extends('layouts.app')

@section('content')
<div class="container">
 @if( session('modificado') )
 <div class="alert alert-primary alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>{{session('modificado')}}</strong>
</div>

 @endif

 @if( session('guardado'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>{{session('guardado')}}</strong>
</div>


 @endif
 
@if( session('eliminado') )
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong>{{session('eliminado')}}</strong>
</div>
@endif
 
 
 
 
  <h1>Usuarios <a href="{{route('usuarios.create')}}" class="btn btn-success float-right"><i class="fa fa-plus-circle"></i> Nuevo</a></h1>
  <table class="table table-striped table-responsive-sm">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($usuarios as $usuario)
         <tr>
          <th scope="row"><a title="Dar click para mostrar la información del usuario: {{$usuario->name}}" href="{{route('usuarios.show',$usuario->id)}}">{{$usuario->id}}</a>  </th>
          <td>{{$usuario->name}}</td>
         <td>{{$usuario->email}}</td>
         <td>
          <a class="btn btn-primary  my-1" href="{{route('usuarios.edit',$usuario->id)}}"><i class="fa fa-edit"></i> Editar</a>
          <a class="btn btn-danger my-1"  href="{{route('usuarios.confirm',$usuario->id)}}"><i class="fa fa-trash"></i> Eliminar</a>
         </td>
        </tr>  
       @endforeach
        
      </tbody>
    </table>
   </div>          
  @endsection

