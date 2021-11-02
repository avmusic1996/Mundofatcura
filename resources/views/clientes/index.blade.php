
@extends('layouts.main', ['activePage' => 'cliente', 'titlePage' => 'CLIENTES'])
@section('content')
      <div class="container-fluid">
        <div class="main-content">

          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Clientes</h4>
                  <br>
                  <p class="card-category">Usuarios registrados</p>
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
                          <div class="col-12 text-right">
                            {{--@can('user_create')--}}
                            <a href="" class="btn btn-md btn-primary">Añadir usuario</a>
                            {{--@endcan--}}
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table">
                            <thead class="text-primary">
                              <th>Cedula</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Correo</th>
                              <th>Tel/Cel</th>
                              <th class="text-right">Acciones</th>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>
                                    {{-- <table align="right" cellspacing="1" cellpadding="1">
                                    <tr style="">
                                        <td align="center" style="height: 6px">Juan fernando perez</td>
                                    </tr>
                                    <tr style="">
                                        <td align="center" style="height: 6px">juan@gmail.com</td>
                                    </tr>
                                    </table>
                                    <img src="{{ asset('img/faces/avatar.jpg') }}" alt="" srcset="" width="80" height="80" style="border-radius: 50%"> --}}
                                  </td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td class="td-actions text-right">
                                
                                  <a href="" class="btn btn-warning"><i class="material-icons">Editar</i></a>
  
                                  
                                  <a href="" class="btn btn-primary"><i class="material-icons">Detalles</i></a>
                                  
                                
                                  <form action="" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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