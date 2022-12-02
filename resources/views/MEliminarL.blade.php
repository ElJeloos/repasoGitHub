<!-- Modal -->
<div class="modal fade" id="MEliminarL{{$consulta->idLibro}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="MEliminarL" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Recuerdo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        

      <div class="card">
        <form method="POST" action="{{route('libro.destroy',$consulta->idLibro)}}">
        @csrf

        {!!method_field('delete')!!}
        <div class="card-header text-center">
        <h5 class="text-primary text center">¿Desea Eliminar?</h5>

            
        </div>
        <div class="card-body">
            <label class="form-label"> ISBN</label>
            <h5 class="card-title">{{$consulta->ISBN}}</h5>

            <label class="form-label">Titulo</label>
            <p class="card-title">{{$consulta->Titulo}}</p>

            <label class="form-label">id_autor</label>
            <p class="card-title">{{$consulta->id_autor}}</p>

            <label class="form-label">Numero Paginas</label>
            <p class="card-title">{{$consulta->numPag}}</p>

            <label class="form-label">Editorial</label>
            <p class="card-title">{{$consulta->Editorial}}</p>

            <label class="form-label">Correo</label>
            <p class="card-title">{{$consulta->Correo}}</p>
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-secondary">Eliminar Recuerdo</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
      </div>

        
    </div>
    </form>





      </div>
    </div>
  </div>
</div>