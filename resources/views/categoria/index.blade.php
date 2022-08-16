
@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Categoria-productos'])
@section('content')
<div class="container-fluid">
  <div class="main-content">
    <div class="row">
      <div class="col-sm-10 col-md-12">
          <h4 class="text-white">Lista de Categorias</h4>
          <hr>
          <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-sm-6 text-left p-1">
                        <a href="{{route('categoria.create')}}" class="btn btn-success">NUEVA CATEGORIA</a>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <a href="{{route('productos.index')}}" class="btn btn-info">LISTA PRODUCTOS</a>
                    </div>
                </div>
          </div>

          <div class="row">
              <div class="table-responsive col-md-12  d-flex justify-content-center" style="">
                <table class="table">
                    <thead>
                        <th>Cantidad</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>                
                        <th>Acción</th>
                    </thead>
                    <tbody>
                        @forelse ($categorias as $item)
                        <tr>
                            <td id="id_pro"></td>
                            <td style="font-size: 13px;">{{$item->titulo}}</td>
                            <td style="font-size: 13px;">{{$item->descripcion}}</td>
                            <td style="font-size: 13px;">

                                <a href="{{ route('categoria.edit',$item->id)}}" class=""><img src="{{ asset('img/editar.png') }}" width="30" alt="" srcset=""></a>


                                
                                <a href="" class=""><img src="{{ asset('img/info.jpg') }}" width="30" alt="" srcset=""></a>
                                
                              <a href="" class=""><img src="{{ asset('img/verproductos.png') }}" width="30" alt="" srcset=""></a>
                                <form action="{{ route('categoria.delete', $item->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn" type="submit" rel="tooltip"style="border: none; background: transparent;">
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
            
          </div>
          
      </div>
  </div>
  </div>
</div>
@endsection
