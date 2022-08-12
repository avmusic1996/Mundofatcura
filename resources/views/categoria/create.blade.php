@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="container-fluid">
  <div class="main-content">
    <div class="row">


      <div class="col-sm-10">
        <form action="{{ route('categoria.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
          @csrf
        

        <input type="text" class="" name="idusuario" id="idusuario" value="{{ auth()->id() }}">
        

        <div class="form-group">
          <label for="title">INGRESE NOMBRE CATEGORIA</label>
          <input type="text" class="form-control" name="titulo" placeholder="Ingrese su nombre" value="{{ old('titulo') }}" autofocus>
                  @if ($errors->has('titulo'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('titulo') }}</span>
                  @endif
        </div>

      <div class="form-group">
        <label for="title">INGRESE descripcion</label>
        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Ingrese su nombre" value="{{ old('titulo') }}" autofocus></textarea>
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
              

              <div class="form-group">
                  <label for="orden">INGRESE ORDEN</label>
                  {!! Form::text('orden',null ,['class'=>'form-control']) !!}
              </div>

              <div class="form-group">
                <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                {!! Form::text('descripcion',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>


              <div class="form-group">
                  <label for="urlfoto">IMAGEN</label> <br>
                  <img src="/img/categoria/foto.jpg">
                  {!! Form::file('urlfoto') !!}
              </div>

          </div>
          {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
          {!! Form::close() !!} --}}
      </div>
  </div>
  </div>
</div>
@endsection
