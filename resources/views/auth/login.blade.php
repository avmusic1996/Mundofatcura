@extends('layouts.app')
@section('content')
  <div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh; background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.226)20%, rgba(0, 68, 255, 0.212)100%), url({{ asset('img/fondo-login.jpg') }}); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    <div id="app">
        <div class="container justify-content-center align-items-center mt-5">
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5 col-sm-12">
              <div class="card cardos body-login" style="border-radius: 0px">
                <div class="card-header login-card">
                  <div class="row">
                    <div class="col-md-12">
                      <b class="tittle-login">{{ __('Bienvenido') }}
                      </b>
                    </div>
                    <div class="col-md-12">
                      <b  class="tittle-login">{{ __('a mundo factura') }}
                      </b>
                    </div>
                    <div class="col-md-12">
                      <p style="font-family: Sniglet;font-style: normal;font-weight: normal;font-size: 12px;line-height: 19px;text-transform: capitalize;color: #FFFFFF;">{{ __('gestiona tu  empresa aumentando la eficiencia y la calidad de tus servicios') }}</p>
                    </div>
                    <div class="col-md-12">
                      <a  href="{{ route('register') }}"> <b class="tittle-login" style="font-size: 12px">{{ __('CREATE ACCOUNT') }}
                      </b></a>
                    </div>
                  </div> 
                </div>
                 
                            
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                      @csrf
                    <div class="form-group">
                      <div class="tittle-login tittle-sesion">
                        <b class=" ">{{ __('Iniciar sesión') }}
                        </b>
                      </div>
                      <input id="email" type="email" placeholder="Correo electrónico" class="form-control input-login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" name="email" tabindex="1" required autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  
                    </div>
  
                    <div class="form-group">
                      
                      <input id="password" type="password" class="form-control input-login @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" tabindex="2" placeholder="Contraseña">
  
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror

                    </div>

                    <div class="form-group">
                      <div class="row text-center">
                        <div class="col-md-4 col-sm-12 custom-control custom-checkbox d-flex justify-content-center">
                          
                          <label class="custom-control-label" for="remember-me" style="font-size:12px; left:20px;">{{ __('Recordarme') }}</label>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <label class="text-md-right text-lg-right text-sm-center" style="line-height: 1.6rem;" for="remember-me">
                          @if (Route::has('password.request'))
                                    <a class="" style="font-size: 12px;" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                          @endif
                      </label>
                        </div>  
                      </div>
                    </div>
  
                    
                    
                    <div class="form-group text-center mt-2">
                      <button type="submit" class="btn col-md-8 btn-login"  tabindex="4">
                          {{ __('Login') }}
                      </button>
                    </div>
                    <div class="form-groupdos d-flex justify-content-center">
                      <div class="col-md-12 text-center">
                        <a href=""><i class="fab fa-facebook" style="font-size: 1.5rem; padding:8px;"></i></a>
                        <a href=""><i class="fab fa-whatsapp" style="font-size: 1.5rem; padding:8px;"></i></a>
                        <a href=""><i class="fab fa-twitter-square" style="font-size: 1.5rem; padding:8px;"></i></a>
                      </div>
                  </div>
                  </form>
                </div>
              </div>

            </div>

            
          </div>
        </div>
      
    </div>

  </div>
@endsection
