@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-8 login-carddos" style="padding: 0px; height:100vh;">
            <div class="w-100 h-100 container-portada" style="left:0px; background-image: linear-gradient(180deg, rgba(32, 56, 161, 0.226)20%, rgba(56, 56, 56, 0.411)100%), url({{ asset('img/fondo-registro.jpg') }}); background-repeat: no-repeat; background-size: cover;">
                <div class="footer" style="position:absolute; bottom: 10px;">
                    <div class="row p-5 text-white">
                        <div class="col-md-12" style="padding: 0px;">
                            <img src="{{ asset('img/logo.png') }}" alt="" srcset="" width="200" height="80">
                        </div>
                        <div class="col-md-12">
                            <h1>MUNDO FACTURA</h1>
                            <h5>Trabajando fuertemente  para las pymes de colombia</h5>
                        </div>
                        <div class="col-md-7">
                            <a href="{{ url('/') }}" class="btn-lg col-md-5 btn-block btn-login-registro">
                                {{ __('Pagina principal') }}
                            </a>
                        </div>
                        <div class="col-md-12 mt-3">
                            <a href=""><i class="fab fa-facebook" style="font-size: 1.5rem; padding:8px; color:white;"></i></a>
                        <a href=""><i class="fab fa-whatsapp" style="font-size: 1.5rem; padding:8px; color:white;"></i></a>
                        <a href=""><i class="fab fa-twitter-square" style="font-size: 1.5rem; padding:8px; color:white;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 form-registrer d-flex justify-content-center align-items-center">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <form method="POST" class="formulario-registro" action="{{ route('register') }}">
                
                <div class="row">
                    <div class="col-12 text-center" style="padding: 0px;">
                        <img src="{{ asset('img/logo.png') }}" alt="" srcset="" width="200" height="80">
                    </div>  
                    <div class="col-md-12 text-center p-4">
                        <b class="tittle-login tittle-sesion-registro" style="font-weight: 700;">{{ __('Create acount') }}
                        </b>
                    </div>
                </div>
            
                @csrf

                <div class=" form-groupdos row justify-content-center ">
                    <div class="col-md-12 col-sm-12">
                        <input id="name" type="text"  placeholder="Nombres" class="form-control input-login   @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class=" form-groupdos justify-content-center row mt-4">
                             <div class="col-md-12 col-sm-12">
                        <input id="email" type="email"  placeholder="Correo electrónico" class="form-control input-login  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class=" form-groupdos justify-content-center row mt-4">
                          <div class="col-md-12 col-sm-12">
                        <input id="password" type="password"  placeholder="Contraseña" class="form-control input-login  @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class=" form-groupdos justify-content-center row mt-4">
                    <div class="col-md-12 col-sm-12">
                        <input id="password-confirm" type="password"  placeholder="Repetir contraseña" class="form-control input-login  " name="password_confirmation"  autocomplete="new-password">
                    </div>
                </div>

                <div class="form-groupdos justify-content-center row mt-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn-md p-1 btn-block btn-login">
                            {{ __('Register') }}
                        </button>
                    </div>
                    <div class="col-md-12 text-center mt-1">
                        <p>Continuar con:</p>
                        <hr>
                    </div>
                </div>
                <div class="form-groupdos justify-content-center row">
                    <div class="col-md-12">
                        <button class="btn-md btn-block btn-login p-1"><img src="https://img.icons8.com/color/48/000000/google-logo.png" style="max-height: 30px; max-width:30px; padding-right: 10px;"/>Google</button>
                    </div>
                    <div class="col-md-12 text-center">
                    <p>Ya tienes una cuenta?<a href="{{ url('login') }}" class="">
                        {{ __('Ingresar aqui') }}
                    </a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    
    window.onload = function() {
        var intro = document.getElementById('navbarlogin');
      intro.style.display = 'none';  
  };
</script>
{{-- <div class="container-fluid d-flex align-items-center" style="height: 100vh; background:white;">
    <div class="w-100 h-100 login-carddos" style="position: absolute; left:0px; background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.712)20%, rgba(255, 255, 255, 0.74)100%), url({{ asset('img/fondo-registro.jpg') }}); background-repeat: no-repeat; background-size: cover; filter: blur(3px)">
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 login-carddos d-flex align-items-center" style="width: 100%; height: 30%; padding-right: 0px; padding-left: 0px;">
                 <img src="{{ asset('img/fondo-registro.jpg') }}" class="imagen-registro login-carddos" alt="" srcset="" style="">           
            </div>

            <div class="col-md-6" style="padding-right: 0px; padding-left: 0px;">
                <div class="col-12 text-center p-4 text-white" style="background:linear-gradient(90deg, rgb(49, 84, 134) 0%, #5c9aeb 50%, #43a6e0 100%); z-index:100;">
                        {{ __('Register') }}
                </div>
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                    @endif --}}
                    {{-- <div class="auth-bg">
                        <span class="r"></span>
                        <span class="r s"></span>
                        <span class="r s"></span>
                        <span class="r"></span>
                    </div>
                    <div class="card-body shadow bg-white">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class=" form-groupdos row justify-content-center p-2">
                                <label for="name" class="col-md-8 col-form-label text-md-left">{{ __('Name') }}</label>
                                <div class="col-md-8 col-sm-12">
                                    <input id="name" type="text"  placeholder="Nombres" class="form-control input-login  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class=" form-groupdos justify-content-center p-2 row">
                                <label for="email" class="col-md-8 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-8 col-sm-12">
                                    <input id="email" type="email"  placeholder="Correo electrónico" class="form-control input-login  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class=" form-groupdos justify-content-center p-2 row">
                                <label for="password" class="col-md-8 col-form-label text-md-left">{{ __('Password') }}</label>
    
                                <div class="col-md-8 col-sm-12">
                                    <input id="password" type="password"  placeholder="Contraseña" class="form-control input-login  @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class=" form-groupdos justify-content-center p-2 row">
                                <label for="password-confirm" class="col-md-8 col-form-label text-md-left">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-8 col-sm-12">
                                    <input id="password-confirm" type="password"  placeholder="Repetir contraseña" class="form-control input-login " name="password_confirmation"  autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-groupdos justify-content-center row mt-5">
                                <div class="col-md-6">
                                    <button type="submit" class="btn-lg btn-block btn-login">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

    </div>
</div> --}}

@endsection

