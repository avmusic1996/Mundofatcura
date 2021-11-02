@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="container-fluid">
  <div class="main-content">
    <div class="row">

    <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Usuarios</h4>
                        <p class="card-category">Clientes registrados</p>
                      </div>
                    </div>
    </div>

    <div class="col-md-12 card">
      <div class="card-body d-flex justify-content-center">
        <form action="{{ route('users.store') }}" method="post" class="form-horizontal p-2">
          @csrf
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Nit</label>
              <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
              @if ($errors->has('name'))
              <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
              @endif
          </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Nombres Completos</label>
                <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                @if ($errors->has('name'))
                <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                @endif
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Apellidos Completo</label>
                <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                @if ($errors->has('name'))
                <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                @endif
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Razon social</label>
              <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
              @if ($errors->has('name'))
              <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
              @endif
          </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
                <select class="custom-select custom-select-sm">
                  <option selected>Tipo de documento</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Numero identificacion</label>
              <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
              @if ($errors->has('name'))
              <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
              @endif
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Correo electronico</label>
              <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
              @if ($errors->has('name'))
              <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
              @endif
          </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
                <select class="custom-select custom-select-sm">
                  <option selected>Pais</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
                <select class="custom-select custom-select-sm">
                  <option selected>Municipio o Estado</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Telefono</label>
              <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
              @if ($errors->has('name'))
              <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
              @endif
          </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="col-sm-6 col-md-12 col-form-label">Celular</label>
                <input type="text" class="form-control" name="nit" placeholder="Ingrese su nombre" value="{{ old('name') }}" autofocus>
                @if ($errors->has('name'))
                <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                @endif
            </div>
          </div>
        </div>

      </form>
      </div>
      <div class="card-footer ml-auto mr-auto">
        <div class="row">
          <div class="col-md-6 p-2">
            <button type="submit" class="btn col-md-12 btn-primary">Guardar</button>
          </div>
          <div class="col-md-6 p-2">
            <a href="{{ route('clientes.index') }}" class="btn col-md-12 btn-warning"><i class="material-icons">Volver</i></a>
          </div>
        </div>
      </div>
    </div>
                    
                  
                  
                
              
            
  </div>
  </div>
</div>
@endsection
