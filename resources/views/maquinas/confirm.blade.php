@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('maquinas.destroy',$maquina->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <div  id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div id="menu" class="modal-header">
              <h5 class="modal-title text-light" id="exampleModal3Label">Confirmación</h5>
            </div>
            <div class="modal-body">
              Desea eliminar el equipo de computo <b>{{$maquina->num_maquina}}</b> ?
            </div>
            <div class="modal-footer">
              <a href="{{url('maquinas')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
              <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
    
    </form>
</div> 

@endsection