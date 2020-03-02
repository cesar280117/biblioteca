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

           <form method="POST" action="{{route('maquinas.store')}}">
            @csrf
            <div class="form-group">
                <label>Numero de maquina</label>
                <input type="number" autofocus class="form-control" name="num_maquina" placeholder="Numero de maquina">
              </div>
              <div class="form-group">
                <label >Descripción</label>
              <textarea class="form-control" name="descripcion"  cols="30" rows="10"></textarea>        
                  </div>
              
                <button type="submit" class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-danger"> Borrar</button>
          
        
        </form>
            </div>
        </div>
        

    </div>
@endsection