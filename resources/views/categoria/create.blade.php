@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="container-fluid">
  <div class="main-content">
    <div class="row">

      <div class="col-md-6">
        <div class="card">
          <div class="row p-3">
            <div class="col-md-12">
              <form action="{{ route('categoria.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
                @csrf
              
      
              <input type="text" class="invisible" name="idusuario" id="idusuario" value="{{ auth()->id() }}">
              
      
              <div class="form-group">
                <label for="title">INGRESE NOMBRE CATEGORIA</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Ingrese su nombre" value="{{ old('titulo') }}" autofocus onkeyup="miFunction()">
                        @if ($errors->has('titulo'))
                          <span class="error text-danger" for="input-name">{{ $errors->first('titulo') }}</span>
                        @endif
              </div>
      
            <div class="form-group">
              <label for="title">INGRESE descripcion</label>
              <textarea name="descripcion" class="form-control" id="" cols="20" rows="10" placeholder="Ingrese su nombre" value="{{ old('titulo') }}" autofocus></textarea>
                      @if ($errors->has('descripcion'))
                        <span class="error text-danger" for="input-name">{{ $errors->first('descripcion') }}</span>
                      @endif
            </div>
      
              <button type="submit" class="btn col-md-12 btn-primary">Guardar</button>
              </form>
            </div>
          </div>
          
        </div>
      </div>

      <div class="col-md-6">
        <div class="card p-3">
          <div class="col-md-12">
            <label for="" id="">Vista previa</label>
          </div>
          <div class="col-md-12">
            <label for="" id="nombrecate" style="color: rgb(187, 27, 27); font-weight:800;"></label>
          </div>
          <hr>
          @foreach ($categorias as $item)
              <div class="col-12" style="color: rgb(2, 33, 209);"><p>{{$item->titulo}}</p></div>
          @endforeach
        </div>
      </div>
      
      
      
  </div>
  </div>
</div>

<script>
  function miFunction() {
var x = document.getElementById("titulo").value;

document.getElementById("nombrecate").innerHTML = x;
}
</script>
@endsection
