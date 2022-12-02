@extends('Plantilla')
@section('contenido')

@if(session()->has('confirmarL'))
    {!!" <script > Swal.fire(
  'Proceso Exitoso',
  'Libro Guardado'
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
  
  <form action="{{route('libro.update', $consultaId->idLibro)}}" method="post">
    @csrf
    @method('PUT');

    <div class="card-header fw-bolder">
        Editar Autor
    </div>

    <div class="mb-2">
        <p class="text-primary fst-italic">{{$errors->first('numISBN')}}</p>
        <label class="form-label">ISBN</label>
        <input type="number" class="form-control" name="numISBN" placeholder="Minimo 13 numeros "value="{{ old('numISBN')}}">
    </div>

    <div class="mb-2">
        <p class="text-primary fst-italic">{{$errors->first('txtTittle')}}</p>
        <label class="form-label">Titulo del libro</label>
        <input type="text" class="form-control" name="txtTittle" value="{{ old('txtTittle')}}">
    </div>

    <div class="mb-4">
                <label for="text" class="form-label" placeholder="Autor">Autor</label>
                <select class="form-select" name="txtAutor" aria-label="Default select example">
                    <option selected>Selecciona un autor:</option>
                    
                    @foreach ($categorias as $tb_autores)
                        <option value="{{$tb_autores['idAutor']}}">{{$tb_autores['Nombre']}}</option>
                    @endforeach

                  </select>
                <p class="text-secondary fst-Italic">
                    {{$errors->first('txtAutor')}}
                </p>
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


            
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>

  </div>
</div>
</div>

@stop




