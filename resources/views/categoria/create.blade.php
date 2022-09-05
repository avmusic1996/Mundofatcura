@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="container-fluid">
  <div class="main-content">
    <div class="row">
      <div class="col-sm-10">
        <form action="{{ route('categoria.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
          @csrf
        

        <input type="text" class="invisible" name="idusuario" id="idusuario" value="{{ auth()->id() }}">
        <br>

        <div class="form-group">
          <label for="title">INGRESE NOMBRE CATEGORIA</label>
          <input type="text" class="form-control" name="titulo" placeholder="Titulo" value="{{ old('titulo') }}" autofocus>
                  @if ($errors->has('titulo'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('titulo') }}</span>
                  @endif
        </div>
        <label for="title"> DESCRIPCIÓN</label>
      <div class="form-group">
        
        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción" value="{{ old('titulo') }}" autofocus></textarea>
                @if ($errors->has('descripcion'))
                  <span class="error text-danger" for="input-name">{{ $errors->first('descripcion') }}</span>
                @endif
      </div>

        <button type="submit" class="btn col-md-12 btn-primary">Guardar</button>
        </form>


          {{-- {!! Form::open(['route'=>['categoria.store'],'method'=>'POST','files'=>true]) !!} --}}
{{-- 
          <div class="jumbotron">
              <div class="form-group">
                  <label for="title">INGRESE TITLE</label>
                  {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>
              <div class="form-group">
                  <label for="description">INGRESE DESCRIPTION</label>
                  {!! Form::text('description',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>

              <div class="form-group">
                  <label for="nombre">INGRESE NOMBRE</label>
                  {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>

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
