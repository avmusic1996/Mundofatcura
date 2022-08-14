
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
                            <td>{{$item->titulo}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>
                                <a href="{{ route('productos.index',$item->id)}}" class="btn btn-success"><i class="material-icons">Productos</i></a>
                                <a href="{{ route('categoria.edit',$item->id)}}" class="btn btn-warning"><i class="material-icons">Editar</i></a>
                                <form action="{{ route('categoria.delete', $item->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit" rel="tooltip">
                                  <i class="material-icons">Eliminar</i>
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
