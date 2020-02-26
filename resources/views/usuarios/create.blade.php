@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="col-5">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('usuarios.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" name="name" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label >Email</label>
      <input type="mail" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-success">Guardar</button>
      <button type="reset" class="btn btn-danger"> Borrar</button>

  </form>
        </div>

    </div>

</div>

  

@endsection