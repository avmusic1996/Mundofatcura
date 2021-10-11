@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')
  <div class="container-fluid">
    <div class="main-content">

      <div class="row justify-content-center">
        <div class="col-md-6">

          
           <div class="card">
            <div class="card-header card-header-primary">
              <div class="card-title">Usuarios  <p class="card-category">Vista detallada del usuario {{ $user->name }}</p></div>
             
            </div>
            <div class="card-boy">
              <div class="author">
                <a href="#">
                  <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                  <h5 class="title mt-3">{{ $user->name }}</h5>
                </a>
                <p class="description">
                {{ $user->username }} <br>
                {{ $user->email }} <br>
                {{ $user->created_at }}
                </p>
              </div>
            
            </div>
            <div class="card-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
           </div>
           
            <!--body-->
            
          </div>
        </div>

        <div class="col-md-6">
          <div class="card card-user">
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <td>{{ $user->id }}
                    </td>
                  </tr>
                  <tr>
                    <th>Name</th>
                    <td>{{ $user->name }}</td>
                  </tr>
                  <tr>
                    <th>Email</th>
                    <td><span class="badge badge-primary">{{ $user->email }}</span></td>
                  </tr>
                  <tr>
                    <th>Created at</th>
                    <td><a href="#" target="_blank">{{  $user->created_at  }}</a></td>
                  </tr>
                  {{-- <tr>
                      <th>Roles</th>
                      <td>
                          @forelse ($user->roles as $role)
                              <span class="badge rounded-pill bg-dark text-white">{{ $role->name }}</span>
                          @empty
                              <span class="badge badge-danger bg-danger">No roles</span>
                          @endforelse
                      </td>
                  </tr> --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="w-50">
          <div class="button-container">
            <div class="row">
              <div class="col-md-6 p-2">
                  <a href="{{ route('users.edit', $user->id) }}" class="btn col-md-12 btn-warning"><i class="material-icons">Editar</i></a>
              </div>
              <div class="col-md-6 p-2">
                  <a href="{{ route('users.index') }}" class="btn col-md-12 btn-primary"><i class="material-icons">Volver</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection
