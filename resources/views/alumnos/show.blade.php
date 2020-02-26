@extends('layouts.app')


@section('content')

<div class="container">
      <div class="row">
          <div class="col-5">
            <form method="POST" action="{{route('alumnos.update',$alumno->id)}}">
                @csrf
                @method('PATCH')
                
                  <div class="form-group">
                    <label >Nombre</label>
                    <input disabled type="text" class="form-control" name="nombre" value="{{$alumno->nombre}}" placeholder="Nombre(s)">
                  </div>
                  <div class="form-group">
                      <label >Apellido paterno</label>
                      <input disabled type="text" class="form-control" name="apellido_paterno" value="{{$alumno->apellido_paterno}}" placeholder="Apellido paterno">
                    </div>
                    <div class="form-group">
                        <label >Apellido materno</label>
                        <input disabled type="text" class="form-control" name="apellido_materno" value="{{$alumno->apellido_materno}}" placeholder="Apellido materno">
                      </div>
                      <div class="form-group">
                        <label >Programa educativo</label>
                        <input disabled type="text" class="form-control" name="carrera" value="{{$alumno->carrera}}" placeholder="Programa educativo">
                      </div>
                      <div class="form-group">
                        <label >Sexo</label>
                       
                            @if($alumno->sexo=='M')
                            <div class="custom-control custom-radio">
                            <input disabled type="radio" id="customRadio1" checked name="sexo" value="M" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                          </div>

                          <div class="custom-control custom-radio">
                            <input disabled type="radio" id="customRadio2" name="sexo" value="F" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                          </div>
 
                          @else
                          <div class="custom-control custom-radio">
                            <input disabled type="radio" id="customRadio1"  name="sexo" value="M" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Masculino</label>
                          </div>

                          <div class="custom-control custom-radio">
                            <input disabled type="radio" id="customRadio2" checked name="sexo" value="F" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Femenino</label>
                          </div>
                          @endif
                          
                    </div>
                    <a href="{{url('alumnos')}}" class="btn btn-secondary"> Regresar</a>
                
                </form>
          </div>
      </div>
    </div>
@endsection