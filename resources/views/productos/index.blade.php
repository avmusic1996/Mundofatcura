
@extends('layouts.main', ['activePage' => 'producto', 'titlePage' => 'PRODUCTOS'])
@section('content')
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
                                  <td>{{$producto->codigopro}}</td>
                                  <td>{{$producto->nombrepro}}</td>
                                  <td>{{$producto->stockpro}}</td>
                                  <td>{{$producto->marcapro}}</td>
                                  <td>{{$producto->modelopro}}</td>
                                  <td>{{$producto->valorunidad}}</td>
                                  <td>%{{$producto->iva}}</td>
                                  <td>{{$producto->categoria_id}}</td>
                                  <td class="td-actions text-right">
                                
                                  <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning"><i class="material-icons">Editar</i></a>
  
                                  
                                  <a href="" class="btn btn-primary"><i class="material-icons">Detalles</i></a>
                                  

                                
                                  <form action="{{ route('productos.delete', $producto->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" rel="tooltip">
                                    <i class="material-icons">Eliminar</i>
                                    </button>
                                </form>
                                  </td>
                                  {{-- <td>
                                      @forelse ($user->roles as $role)
                                        <span class="badge badge-info">{{ $role->name }}</span>
                                      @empty
                                        <span class="badge badge-danger">No roles</span>
                                      @endforelse
                                    </td>
                                  <td class="td-actions text-right">
                                    @can('user_show')
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                    @endcan
                                    @can('user_edit')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                    @endcan
                                    @can('user_destroy')
                                    <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                        <i class="material-icons">close</i>
                                        </button>
                                    </form>
                                    @endcan
                                  </td> --}}
                                </tr>
                                @empty
                            
                        @endforelse
                            
                            </tbody>
                          </table>
                        </div>
                        <div class="card-footer ml-auto">
                          {{-- {{ $users->links() }} --}}
                        </div>
                  </div>
                </div>
              </div>
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


</script>