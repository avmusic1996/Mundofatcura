@extends('layouts.app')
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center bg-white" style=" width:100%; height:100vh;">
<img src="{{ asset('img/bg-reset.png') }}" class="fondo-reset" alt="" srcset="" style="position:absolute; width: 100%; height:100%;">
    <div class="container mt-0" style="width:100%; height: 60%;">
        <div class="row p-0 justify-content-center" style="margin:0px; padding:0px;">
            <div class="border-line"></div>
            <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                
                <div class="">
                    
    
                    <div class="section text-center">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class=""></div>
                        <img src="{{ asset('img/logo-mundofactura.png') }}" alt="" srcset="" width="140" height="60" class="">
                        <form method="POST" action="{{ route('password.email') }}" class="p-3 text-center text-responsive">
                            <div class="auth-bg2">
                                <span class="r2"></span>
                                <span class="r2 s2"></span>
                                <span class="r2 s2"></span>
                                <span class="r2"></span>
                            </div>
                            
                            <div class="form-group row justify-content-center">
                                <div class="col-md-7 col-sm-12 p-0" style="">
                                    <h4 class="text-left " style="color:black">{{ __('Reset Password') }}</h4>    
                                </div>
                                <div class="col-md-7 col-sm-10 p-0 text-center">
                                    <p class="text-justify">
                                        Ingresa tu dirección de correo electrónico que tengas registrado en la plataforma, te enviaremos un enlace para restablecer tu contraseña.
                                    </p> 
                                </div>
                                
                            </div>
                            @csrf
    
                            <div class="form-group row d-flex  justify-content-center">
                                <div class="col-md-12 col-sm-10 p-0">
                                    
                                </div>
                                <div class="col-md-7 col-sm-10 p-0">
                                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                               
                                
                                <div class="col-md-12 text-center">
                                    
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-12 text-center p-0">
                                    <button type="submit" class="btn btn-primary col-7">
                                        {{ __('Send') }}
                                    </button>
                                    <button type="submit" class="btn col-7 text-primary mt-3">
                                        <a href="/"> {{ __('Back') }}</a>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          
            <div class="col-md-6 d-sm-none d-md-block d-xs-none text-center p-5 img-reset-password">
                <img src="{{ asset('img/reset-image.png') }}" class="" alt="" width="300" height="300">
                <div class="col-md-12">
                    <h5 class="">
                        Manten tu información personal actualizada!
                    </h5 class="">
                    <p>
                        Si tienes problemas con tus datos y documentación manten tu información actualizada!
                    </p>
                </div>


            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            {{-- <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<script>
    
    window.onload = function() {
        var intro = document.getElementById('navbarlogin');
      intro.style.display = 'none';  
  };
<<<<<<< HEAD
</script>
=======
</script> 
>>>>>>> b9928f0600f634e7b020bdc54f0aea09a94b9e58
@endsection
