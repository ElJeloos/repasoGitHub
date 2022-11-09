@extends('Plantilla')
@section('contenido')

@if(session()->has('Finalizado'))

<div class="alert alert-primary" role="alert">
  Guardado
</div>

@endif



@if($errors->any())
        @foreach($errors->all() as $error)

             @endforeach
        @endif

<div class="container mt-6 col-md-4">
<div aling="center">
<div class="card text-center" style="width: 30rem;">
  <div class="card-header" >
  
  <form method="post"action ="confirmar">
    @csrf

    <div class="card-header fw-bolder">
        Registro Autores 
    </div>

    <div class="mb-2">
        <label class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" name="txtnombre" placeholder=""value="{{ old('txtnombre')}}">
        <p class="text-primary fst-italic">{{$errors->first('txtnombre')}}</p>

    </div>

    <div class="mb-2">
        <label class="form-label">Fecha</label>
        <input type="date" class="form-control" name="ffecha" value="{{ old('ffecha')}}">
        <p class="text-primary fst-italic">{{$errors->first('ffecha')}}</p>

    </div>

    <div class="mb-2">
        <label class="form-label">Numero de Paginas</label>
        <input type="text" class="form-control" name="nolibros" value="{{ old('nolibros')}}">
        <p class="text-primary fst-italic">{{$errors->first('nolibros')}}</p>

    </div>


            
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

  </div>
</div>
</div>

@stop





