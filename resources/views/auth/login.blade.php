<style>


  .tittle-login
  {
    color: #fff;font-weight: normal; font-size: 18px;
  }
  .login-card
  {
      min-height: 230px;
      background-position: center center;
      background-repeat: no-repeat;
    /* Fijamos la imagen a la ventana para que no supere el alto de la ventana */
      /* El fonde se re-escala automáticamente */
      background-size: cover;
      background-image: url(img/2852869.png);
      padding: 0px;
      border: 0px;
      padding:40px;
      padding-bottom: 10px;
      text-align: left;
  }
  
  .body-login
  {
      box-shadow: 0px 15px 30px 20px rgb(20, 20, 20, .25);
  }
  .btn-login
  {
    background: linear-gradient(90deg, rgba(30, 25, 86, 0.88) 0%, #1E1956 100%);
  border-radius: 5px;
  color: #fff
  }
  .input-login{
    background: linear-gradient(90deg, rgba(25, 70, 131, 0.88) 0%, #2F80ED 50%, #2D9EE0 100%);
    color: #fff!important;
  }
  input::placeholder
  {
  border-radius: 5px;
  color: #fff!important;
  max-height: 30px;
  font-size: 14px
  
  }
  
  :-ms-input-placeholder { color: blue; }
  ::placeholder { color:#fff; }
  ::-webkit-input-placeholder { color: blue; } /* WebKit */
  ::-moz-placeholder { color: blue; } /* Firefox 19+ */
  .card-body
  {
  border-radius: 0px;
  padding-left: 40px;
  padding-right: 40px}
  .form-group
  {
    margin-top: 0px;
    padding-top: 0px;
  }
  .tittle-sesion
  {
      color:#227cbb;
      margin-bottom: 10px;
  }
  </style>
@extends('layouts.app')
@section('content')
  <div class="container-fluid h-100 d-flex justify-content-center align-items-center" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.2)20%, rgba(255,255,255,0.1)100%), url({{ asset('img/2852869.png') }}); background-repeat: no-repeat; background-size: cover;">
    <div id="app">
        <div class="container justify-content-center align-items-center">
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
                      <p border: 0px solid #FFFFFF; style="font-family: Sniglet;font-style: normal;font-weight: normal;font-size: 12px;line-height: 19px;text-transform: capitalize;color: #FFFFFF;">{{ __('gestiona tu  empresa aumentando la eficiencia y la calidad de tus servicios') }}</p>
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
                      <div class="invalid-feedback">
                        Please fill in your email
                      </div>
                    </div>
  
                    <div class="form-group">
                      
                      <input id="password" type="password" class="form-control input-login @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" class="form-control" tabindex="2" placeholder="Contraseña">
  
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                      <div class="invalid-feedback">
                        please fill in your password
                      </div>
                    </div>
  
                    
                    <div class="row" style="padding-bottom:0px; margin:0px">
                      <div class="col-md-5">
                        <div class="custom-control custom-checkbox ml-0 p-0.2">
                          <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" >
                          <label class="custom-control-label" for="remember-me" style="font-size:12px">{{ __('Recordarme') }}</label>
                        </div>
                      </div>
                      <div class="col-md-7 mr-0 p-0 text-right">    
                      
                        @if (Route::has('password.request'))
                                    <a class="" style="font-size: 12px;" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                        @endif
                      
                    </div>
                      
                    </div>
                    <div class="form-group text-center">
                      <button type="submit" class="btn col-md-5 btn-login"  tabindex="4">
                          {{ __('Login') }}
                      </button>
                      
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
