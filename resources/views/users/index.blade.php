
@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Usuarios'])
@section('content')
      <div class="container-fluid">
        <div class="main-content">

          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Usuarios</h4>
                        <p class="card-category">Usuarios registrados</p>
                      </div>
                    </div>
                    @if (session('success'))
                      <div class="alert alert-success" role="success">
                        {{ session('success') }}
                      </div>
                    @endif
                      
                      <div class="row p-3">
                        <div class="col-12 text-right">
                          {{--@can('user_create')--}}
                          <a href="{{ route('users.create') }}" class="btn btn-md btn-primary">Añadir usuario</a>
                          {{--@endcan--}}
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="text-primary">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th class="text-right">Acciones</th>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                              <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="td-actions text-right">
                              
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i class="material-icons">Editar</i></a>

                                
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary"><i class="material-icons">Mostrar</i></a>
                                
                              
                                <form action="{{ route('users.delete', $user->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
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
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer ml-auto">
                        {{ $users->links() }}
                      </div>
                  {{-- <div class="card">
                    <div class="card-header card-header-primary">
                     
                    </div>
                    <div class="card-body">
                      @if (session('success'))
                      <div class="alert alert-success" role="success">
                        {{ session('success') }}
                      </div>
                      @endif
                      <div class="row">
                        <div class="col-12 text-right">
                          @can('user_create')
                          <a href="{{ route('users.create') }}" class="btn btn-sm btn-facebook">Añadir usuario</a>
                          @endcan
                        </div>
                      </div>
                      <div class="table-responsive">
                        <table class="table">
                          <thead class="text-primary">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Roles</th>
                            <th class="text-right">Acciones</th>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                              <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>
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
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer mr-auto">
                      {{ $users->links() }}
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    
@endsection
