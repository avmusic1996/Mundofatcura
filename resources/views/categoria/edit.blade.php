@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('content')
  <div class="container-fluid">
    <div class="main-content">
      <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('categoria.update', $categoria->id) }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group">
                  <label for="title">INGRESE TITLE</label>
                  <input type="text" class="form-control" name="titulo" placeholder="Ingrese su nombre" value="{{ old('titulo', $categoria->titulo) }}" autofocus>
                          @if ($errors->has('titulo'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('titulo') }}</span>
                          @endif
              </div>
      
              {{-- <div class="form-group">
                <label for="title">INGRESE ORDEN</label>
                <input type="text" class="form-control" name="orden" placeholder="Ingrese su nombre" value="{{ old('titulo', $categoria->orden) }}" autofocus>
                        @if ($errors->has('orden'))
                          <span class="error text-danger" for="input-name">{{ $errors->first('orden') }}</span>
                        @endif
              </div> --}}
      
            <div class="form-group">

              <textarea  cols="80" rows="4" placeholder="Ingrese la descripcion de la categoria" value="" autofocus>
                {{ old('descripcion', $categoria->descripcion) }}
              </textarea>
                      @if ($errors->has('descripcion'))
                        <span class="error text-danger" for="input-name">{{ $errors->first('descripcion') }}</span>
                      @endif
            </div>
            <a href="{{ route('categoria.index')}}" class="btn btn-success">Cancelar</a>
              <button type="submit" class="btn col-md-12 btn-primary">Guardar</button>
              </form>
            {{-- {!! Form::open(['route'=>['categoria.update',$categoria],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',$categoria->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">INGRESE description</label>
                    {!! Form::text('description',$categoria->description,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',$categoria->nombre,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::text('descripcion',$categoria->descripcion,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',$categoria->orden,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/categoria/{{$categoria->urlfoto}}">
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
