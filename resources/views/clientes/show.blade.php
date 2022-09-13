@extends('layouts.main', ['activePage' => 'cliente', 'titlePage' => 'CLIENTES'])
@section('content')
    <div class="container-fluid">
        <div class="main-content">
            <div class="row p-2">
                <div class="col-md-12 card p-3">
                    <h5>{{ $clientes->nombresapellidos }}</h5>
                </div>
                <div class="col-md-6 card p-3">
                    <label style="font-weight: 700; font-size:20px;" for="">Detalles</label>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="">Nit:</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->nit }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Razón Social</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->razonsocial }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Tipo de documento</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->tipodocumento }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Numero de documento</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->numerodocumento }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Telefono</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->telefono }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Celular</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->celular }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Pais</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->pais }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Departamento</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->departamento }}</p>
                            </div>
                            <div class="col-6">
                                <label for="">Municipio</label>
                            </div>
                            <div class="col-6">
                                <p>{{ $clientes->municipio }}</p>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-6 card p-3">
                    <label style="font-weight: 700; font-size:20px;" for="">Lista de clientes</label>
                    <hr>
                    <div class="form-group">
                       <div class="row" id="listclientshow">

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="modal fade" id="exampleModalCenteredelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col-12">
                <p>¿ESTAS SEGURO QUE DESEAS ELIMINAR AL CLIENTE?</p>
              </div>
            </div>
            <div class="modal-footer">
                @foreach ($clientes as $cliente)
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <form action="{{ route('clientes.delete', $clientes->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" rel="tooltip">
                <i class="material-icons">Eliminar</i>
                </button>
            </form>
            @endforeach
            </div>
          </div>
        </div>
      </div> --}}
<script>

function listshow()
  {
  var folder =document.getElementById('folder').value;
    $.ajax({
      url:"{{ route('post.fetch_image') }}",
      success:function(data)
      {
        $('#uploadedimage').html(data);
      }
    })
  }

    $('#exampleModalCenteredelete').on('show.bs.modal', function (event)
{
  // Button that triggered the modal
  var button = $(event.relatedTarget)
  // Extract info from data-bs-* attributes
  var id = button.data('id')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modal = $(this)
    modal.find('.modal-title').text('Se va a eliminar el registro: ' + id)
  // const modalTitle = exampleModal.querySelector('.modal-title')
  // const modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = `New message to ${recipient}`
  // modalBodyInput.value = recipient
})
</script>
@endsection