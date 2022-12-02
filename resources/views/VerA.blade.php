@extends('plantilla')

@section('contenido')

@if(session()->has('ActualizarA'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Autor Editado',
      'success'  
) </script> "!!}

@endif

@if(session()->has('Eliminado'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Autor Eliminado',
      'success'  
) </script> "!!}

@endif


<div class="container mt-2  mb-3 cold-md-5">
<h1 class="display-2 text-center mb-5 fw-bold">Autores almacenados</h1>

    

<table class="table table-hover">

        <thead>
            
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">Libros</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaA as $consulta)
          <tr>
            <th scope="row">{{ $consulta->idAutor }}</th>
            <td>{{ $consulta->Nombre }}</td>
            <td>{{ $consulta->fecha }}</td>
            <td>{{ $consulta->numPag }}</td>
            <td>
                <a href="{{route('autor.edit' , $consulta->idAutor)}}" class="btn btn-outline-success">Editar <i class="bi bi-pencil-square"></i></a> 
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MEliminarA{{$consulta->idAutor}}">
                Eliminar <i class="bi bi-trash-fill"></i>
                </button>
            </td>
            @include('MEliminarA')

          </tr>
          @endforeach
        </tbody>

      </table>
      





</div>
@stop