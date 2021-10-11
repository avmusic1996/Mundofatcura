@extends('layouts.app')
@section('content')
<style>
.html,body{
  /* Para que funcione correctamente en Smartphones y Tablets */
  height:100vh;
}
body {

  /* Ruta relativa o completa a la imagen */
  
  /* Centramos el fondo horizontal y verticalmente */
  background-position: center center;
  /* El fonde no se repite */
  background-repeat: no-repeat;
  /* Fijamos la imagen a la ventana para que no supere el alto de la ventana */
  background-attachment: fixed;
  /* El fonde se re-escala automáticamente */
  background-size: cover;
  /* Color de fondo si la imagen no se encuentra o mientras se está cargando */
  /* Fuente para el texto */
  text-align: center;
  color: #000;
  background-image: url(img/Component.png);
  font-family: Sniglet;
  font-family: 'Sniglet', cursive;
  font-size: 24px;
  line-height: 30px;
  text-transform: uppercase;
}
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
.login-section
{
    margin-top: 0px;
    padding-top: 0px;
}
.body-login
{
    box-shadow: 0px 15px 30px 20px rgba(0, 0, 0, 0.25);
}
.btn-login
{
  background: linear-gradient(90deg, rgba(30, 25, 86, 0.88) 0%, #1E1956 100%);
border-radius: 5px;
color: #fff
}
.input-login
{
  background: linear-gradient(90deg, rgba(25, 70, 131, 0.88) 0%, #2F80ED 50%, #2D9EE0 100%);
border-radius: 5px;
color: #fff;
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
<div class="">
    <div id="app" >
        <section class="section login-section">
          <div class="container mt-5" >
            <div class="row" >
              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
               
    
                <div class="card card-primary body-login" style="border-radius: 0px">
                  <div class="card-header login-card">
                    <b class="tittle-login">{{ __('Bienvenido') }}
                    </b>
                      <br>
                    <b  class="tittle-login">{{ __('a mundo factura') }}
                    </b>
                      <br>
                    <p border: 1px solid #FFFFFF; style="font-family: Sniglet;font-style: normal;font-weight: normal;font-size: 12px;line-height: 19px;text-transform: capitalize;color: #FFFFFF;">{{ __('gestiona tu  empresa aumentando la eficiencia y la calidad de tus servicios') }}</p>
                    <br>
                    <a  href="{{ route('register') }}"> <b class="tittle-login" style="font-size: 12px">{{ __('CREATE ACCOUNT') }}
                    </b>
                  </div></a>
                   
                              
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
                        <div class="col">
                          <div class="custom-control custom-checkbox" style="text-align: left">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" >
                            <label class="custom-control-label" for="remember-me" style="font-size:10px">{{ __('Recordarme') }}</label>
                          </div>
                        </div>
                        <div class="col">    <div class="" >
                          @if (Route::has('password.request'))
                                      <a class="" style="font-size: 10px;" href="{{ route('password.request') }}">
                                          {{ __('¿Olvidaste tu contraseña?') }}
                                      </a>
                          @endif
                        </div></div>
                        
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-login"  tabindex="4">
                            {{ __('Login') }}
                        </button>
                        
                      </div>
                    </form>
                    {{-- <div class="text-center mt-4 mb-3">
                      <div class="text-job text-muted">Login With Social</div>
                    </div>
                    <div class="row sm-gutters">
                      <div class="col-6">
                        <a class="btn btn-block btn-social btn-facebook">
                          <span class="fab fa-facebook"></span> Facebook
                        </a>
                      </div>
                      <div class="col-6">
                        <a class="btn btn-block btn-social btn-twitter">
                          <span class="fab fa-twitter"></span> Twitter
                        </a>                                
                      </div>
                    </div> --}}
    
                  </div>
                </div>
               
              </div>
            </div>
          </div>
        </section>
      </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>

@endsection
