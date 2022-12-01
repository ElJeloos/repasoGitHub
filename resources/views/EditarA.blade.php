@extends('Plantilla')
@section('contenido')

@if(session()->has('confirmarA'))
    {!!" <script > Swal.fire(
  'Proceso Exitoso',
  'Autor Guardado'
)  </script>"!!}
 @endif



@if($errors->any())
        @foreach($errors->all() as $error)

             @endforeach
        @endif

<div class="container mt-6 col-md-4">
<div aling="center">
<div class="card text-center" style="width: 30rem;">
  <div class="card-header" >
  
  <form action="{{route('autor.update', $consultaId->idAutor)}}" method="post">
    @csrf
    @method('PUT');

    <div class="card-header fw-bolder">
        Editar Autor
    </div>

    <div class="mb-2">
        <label class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" name="txtnombre" value="{{ $consultaId->Nombre }}">
        <p class="text-primary fst-italic">{{$errors->first('txtnombre')}}</p>

    </div>

    <div class="mb-2">
        <label class="form-label">Fecha</label>
        <input type="date" class="form-control" name="ffecha" value="{{ $consultaId->fecha }}">
        <p class="text-primary fst-italic">{{$errors->first('ffecha')}}</p>

    </div>

    <div class="mb-2">
        <label class="form-label">Numero de Paginas</label>
        <input type="text" class="form-control" name="nolibros" value="{{ $consultaId->numPag }}">
        <p class="text-primary fst-italic">{{$errors->first('nolibros')}}</p>

    </div>


            
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

  </div>
</div>
</div>

@stop




