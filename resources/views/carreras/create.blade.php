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
            <form method="POST" action="{{route('carreras.store')}}">
            @csrf
            <div class="form-group">
              <label >Clave de carrera (Id)</label>
              <input type="text" class="text-capitalize form-control" name="id" placeholder="Clave de carrera">
            </div>
            <div class="form-group">
              <label>Nombre de carrera</label>
              <input type="text" class="text-capitalize form-control" name="nombre"  placeholder="Nombre de carrera">
            </div>
            <button class="btn btn-outline-success" type="submit">Guardar</button>
            <button class="btn btn-outline-danger" type="reset">Borrar</button>
          </form>
            </div>
            
        </div>
        
          
    </div>
@endsection