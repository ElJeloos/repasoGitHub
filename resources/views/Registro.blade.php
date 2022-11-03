@extends('Plantilla')

@section('contenido')

@if(session()->has('Finalizado')) 
{!! " <script> Swal.fire(
 'Muy Bien Very Good!',
 'Libro Registrado ',
 'success'  
 ) </script> "!!}

@endif

@if($errors->any())
        @foreach($errors->all() as $error)

             @endforeach
        @endif

<div class="container mt-6 col-md-4">
  
<div aling="center">

<div class="card text-center" style="width: 30rem;">
  <div class="card-header" >

  
    <form method="post"action ="GuardarLibro">
    @csrf

    <div class="card-header fw-bolder">
        Registro  de Libros 
    </div>

    <div class="mb-2">
        <p class="text-primary fst-italic">{{$errors->first('numISBN')}}</p>
        <label class="form-label">ISBN</label>
        <input type="number" class="form-control" name="numISBN" value="{{ old('numISBN')}}">
    </div>

    <div class="mb-2">
        <p class="text-primary fst-italic">{{$errors->first('txtTittle')}}</p>
        <label class="form-label">Titulo del libro</label>
        <input type="text" class="form-control" name="txtTittle" value="{{ old('txtTittle')}}">
    </div>

    <div class="mb-2">
        <p class="text-primary fst-italic">{{$errors->first('txtAutor')}}</p>
        <label class="form-label">Nombre del autor</label>
        <input type="text" class="form-control" name="txtAutor" value="{{ old('txtAutor')}}">
    </div>

    <div class="mb-2">
        <p class="text-primary fst-italic">{{$errors->first('numPaginas')}}</p>
        <label class="form-label">Numero de paginas</label>
        <input type="number" class="form-control" name="numPaginas" value="{{ old('numPaginas')}}">
    </div>

    <div class="mb-2">
        <p class="text-primary fst-italic">{{$errors->first('txtEditorial')}}</p>
        <label class="form-label">Editorial</label>
        <input type="text" class="form-control" name="txtEditorial" value="{{ old('txtEditorial')}}">
    </div>



    <div class="mb-1">
      <p class="text-primary fst-italic">{{$errors->first('txtCorreo')}}</p>
        <label class="form-label"> Email del editorial </label>
        <input type="Email" class="form-control" name="txtCorreo" placeholder="Correo de la Editorial " value="{{ old('txtCorreo')}}">
    </div>
            
    <button type="submit" class="btn btn-primary">Confirmar libro</button>
    </form>
  </div>

  </div>
</div>
</div>

@stop





