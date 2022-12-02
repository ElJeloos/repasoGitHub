@extends('plantilla')

@section('contenido')

@if(session()->has('ActualizarL'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Autor Editado',
      'success'  
) </script> "!!}

@endif

@if(session()->has('EliminadoL'))
{!! 
" <script> 
      Swal.fire(
      'Muy Bien Very Good!',
      'Autor Eliminado',
      'success'  
) </script> "!!}

@endif


<div class="container mt-2  mb-3 cold-md-5">
<h1 class="display-2 text-center mb-5 fw-bold">Libros almacenados</h1>

    

<table class="table table-hover">

        <thead>
            
        <tr>
            <th scope="col">Id</th>
            <th scope="col">ISBN</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>            
            <th scope="col">Paginas</th>            
            <th scope="col">Editorial</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
          </tr>
         
        </thead>
        <tbody>
            @foreach ($ConsultaL as $consulta)
          <tr>
          <th scope="row">{{$consulta->idLibro}}</th>
          <td>{{$consulta->ISBN}}</td>
          <td>{{$consulta->Titulo}}</td>
          <td>{{$consulta->id_autor}}</td>
          <td>{{$consulta->numPag}}</td>            
          <td>{{$consulta->Editorial}}</td>
          <td>{{$consulta->Correo}}</td>
          <td>
                <a href="{{route('libro.edit' , $consulta->idLibro)}}" class="btn btn-outline-success">Editar <i class="bi bi-pencil-square"></i></a> 
                
            </td>
            @include('MEliminarA')

          </tr>
          @endforeach
        </tbody>

      </table>
      





</div>
@stop