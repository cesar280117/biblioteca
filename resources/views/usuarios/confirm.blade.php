@extends('layouts.app')

@section('content')
<div class="container">
 <form method="POST" action="{{route('usuarios.destroy',$usuario->id)}}">
        @csrf
        @method('DELETE')
  
  
  <!-- Modal -->
  <div  id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div id="menu" class="modal-header">
          <h5 class="modal-title text-light" id="exampleModal3Label">Confirmación</h5>
        </div>
        <div class="modal-body">
          Desea eliminar el usuario <b>{{$usuario->name}}</b> ?
        </div>
        <div class="modal-footer">
          <a href="{{url('usuarios')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  
    </form>
</div>
   
@endsection