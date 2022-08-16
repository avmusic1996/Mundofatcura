
@extends('layouts.main', ['activePage' => 'producto', 'titlePage' => 'PRODUCTOS'])
@section('content')

      <div class="container-fluid">
        <div class="main-content">

          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Productos</h4>
                  <br>
                  <p class="card-category"></p>
                </div>
              </div>
            </div>

           

           <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                      
                      @if (session('success'))
                        <div class="alert alert-success" role="success">
                          {{ session('success') }}
                        </div>
                      @endif
                        
                        <div class="row p-3">
                          <div class="col-6 text-left">
                            {{--@can('user_create')--}}
                            <a href="{{ route('categoria.index') }}" class="btn btn-md btn-success">Categorias</a>
                            {{--@endcan--}}
                          </div>
                          <div class="col-6 text-right">
                            {{--@can('user_create')--}}
                            <a href="{{ route('productos.create') }}" class="btn btn-md btn-primary">Agregar producto</a>
                            {{--@endcan--}}
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table">
                            <thead class="text-primary">

                              <th>Codigo</th>
                              <th>Nombre</th>
                              <th>Cantidad</th>
                              <th>Marca</th>
                              <th>Modelo</th>
                              <th>Precio/U</th>
                              <th>Iva</th>
                              <th>Categoria</th>
                              <th class="text-right">Acciones</th>
                            </thead>
                            <tbody>
                              @forelse ($productos as $producto)
                                <tr>
                                  <td style="font-size: 13px;">{{$producto->codigopro}}</td>
                                  <td style="font-size: 13px;">{{$producto->nombrepro}}</td>
                                  @if ($producto->stockpro <= 5)
                                  
                                    <td style="font-size: 13px;" id="stockpro"><label for="" style="width:44px; height:30px; background:red; border-radius:50px; color:white; display:flex; justify-content: center; align-items:center;" >{{$producto->stockpro}}</label></td>
                                  

                                  @elseif ($producto->stockpro <= 10)
                                  
                                    <td style="font-size: 13px;" id="stockpro"><label for="" style="width:44px; height:30px; background:rgb(255, 51, 0); border-radius:50px; color:white; display:flex; justify-content: center; align-items:center;" >{{$producto->stockpro}}</label></td>
                                  
                                  
                                  @elseif ($producto->stockpro <= 20)
                                  
                                    <td style="font-size: 13px;" id="stockpro"><label for="" style="width:44px; height:30px; background:rgb(255, 145, 0); border-radius:50px; color:white; display:flex; justify-content: center; align-items:center;" >{{$producto->stockpro}}</label></td>
                                  

                                  @elseif ($producto->stockpro <= 25)
                                  
                                    <td style="font-size: 13px;" id="stockpro"><label for="" style="width:44px; height:30px;background:rgb(184, 181, 0); border-radius:50px; color:white; display:flex; justify-content: center; align-items:center;" >{{$producto->stockpro}}</label></td>
                                  

                                  @elseif ($producto->stockpro <= 30)
                                  
                                    <td style="font-size: 13px;" id="stockpro"><label for="" style="width:44px; height:30px; background:rgb(143, 196, 0); border-radius:50px; color:white; display:flex; justify-content: center; align-items:center;" >{{$producto->stockpro}}</label></td>
                                  
                                  @endif
                                  


                                  <td style="font-size: 13px;">{{$producto->marcapro}}</td>
                                  <td style="font-size: 13px;">{{$producto->modelopro}}</td>
                                  <td style="font-size: 13px;">{{$producto->valorunidad}}</td>
                                  <td style="font-size: 13px;">%{{$producto->iva}}</td>
                                  <td style="font-size: 13px;">{{$producto->categoria_id}}</td>
                                  <td style="font-size: 13px;" class="td-actions text-right">
                                
                                  <a href="{{ route('productos.edit', $producto->id) }}" class=""><img src="{{ asset('img/editar.png') }}" width="30" alt="" srcset=""></a>
  
                                  
                                  <a href="" class=""data-toggle="modal" data-target="#exampleModalCenterinfo"><img src="{{ asset('img/info.jpg') }}" width="30" alt="" srcset=""></a>
                                  

                                
                                  <form action="{{ route('productos.delete', $producto->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit" rel="tooltip" style="border: none; background: transparent;">
                                      <img src="{{ asset('img/delete.png') }}" width="30" alt="" srcset="">
                                    </button>
                                  </form>
                                  </td>
                                </tr>
                                @empty
                            
                        @endforelse
                            
                            </tbody>
                          </table>
                        </div>
                        <div class="card-footer ml-auto">
                          {{-- {{ $productos->links() }} --}}
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>


<div  class="modal fade bd-example-modal-lg" id="exampleModalCenterinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #6777ef;">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">DETALLES DEL PRODUCTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('productos.index', $producto->id) }}">
          <div class="row">
          
          <div class="col-md-7">

          </div>
          <div class="col-md-5">
            <label for="" value="">{{$producto->nombrepro}}</label><br>
            <label for="" value="">{{$producto->valorunidad}}</label>
          </div>
        
        </div></form>
      </div>
    </div>
  </div> 
</div>
    
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})

// window.onload = function(){   
//   $.get('{{ route('categorias') }}',{id:{{ auth()->id() }}}, function (data) {
//     document.getElementById("stockpro").innerHTML = data;
//         }
// )
// }
</script>