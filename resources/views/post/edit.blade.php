@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('content')
<style>
  /* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
  @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');
  /* End Fonts */
  /* Start Global rules */
  
  
  
  
  /* |||||||||||||||||||||||||||||||||||||||||||||*/
  /* //////////////////////////////////////////// */
  
  
  
  
  /* End body rules */
  
  /* Start form  attributes */
  .form-cliente {
  
      height: auto;
      border-radius: 5px;
      margin: 2% auto;
      
      padding: 2%;
      /* background-image: linear-gradient(-225deg, #29dfd025 50%, #2bd1ee1c 50%); */
  }
  /* form Container */
  .form-cliente .con {
      display: -webkit-flex;
      display: flex;
    
      -webkit-justify-content: space-around;
      justify-content: space-around;
    
      -webkit-flex-wrap: wrap;
      flex-wrap: wrap;
    
        margin: 0 auto;
  }
  
  /* the header form form */
  /* header {
      margin: 2% auto 10% auto;
      text-align: center;
  }
  /* Login title form form
  header h2 {
      font-size: 250%;
      font-family: 'Playfair Display', serif;
      color: #3e403f;
  }
   A welcome message or an explanation of the login form
  header p {letter-spacing: 0.05em;} */
  
  
  
  /* //////////////////////////////////////////// */
  /* //////////////////////////////////////////// */
  
  
  .input-item {
      background: #6777ef;;
      color: rgb(255, 255, 255);
      padding: 13px 10px 11px 18px;
      border-radius: 5px 0px 0px 5px;
  }
  
  
  
  /* Show/hide password Font Icon */
  #eye {
      background: #fff;
      color: #333;
    
      margin: 5.9px 0 0 0;
      margin-left: -20px;
      padding: 15px 15px 14px 15px;
      border-radius: 0px 5px 5px 0px;
    
      float: right;
      position: relative;
      right: 1%;
      top: -.2%;
      z-index: 5;
      
      cursor: pointer;
  }
  /* inputs form  */
  input[class="form-input"]{
    width: 100%;  
    height: 35px;
      margin-top: 0%;
      padding: 0px 10px 0px 18px;
  
      
      font-size: 16px;
      font-family: 'Abel', sans-serif;
      color: #5E6472;
    
      outline: none;
      border: none;
    
      border-radius: 0px 5px 5px 0px;
      transition: 0.2s linear;
      border-bottom: 1px solid #797373;
      background: transparent;
      /* -webkit-box-shadow: 1px 5px 14px 2px rgba(0,0,0,0.11); 
box-shadow: 1px 5px 14px 2px rgba(0,0,0,0.11); */
      
  }
  input[id="txt-input"] {width: 100%;}
  /* focus  */
  input:focus {
      transform: translateX(-5px);
      border-radius: 30px;
      -webkit-box-shadow: 0px 1px 6px 1px rgba(0,0,0,0.77); 
box-shadow: 0px 1px 6px 1px rgba(0,0,0,0.77);
  }
  
  
  /* //////////////////////////////////////////// */
  /* //////////////////////////////////////////// */
  
  /* input[type="text"] {min-width: 250px;} */
  /* buttons  */
  .btn-cliente {
      display: inline-block;
      color: #252537;
    
      width: 280px;
      height: 50px;
    
      padding: 0 20px;
      background: #fff;
      border-radius: 5px;
      
      outline: none;
      border: none;
    
      cursor: pointer;
      text-align: center;
      transition: all 0.2s linear;
      
      margin: 1% auto;
      letter-spacing: 0.05em;
  }
  /* Submits */
  .submits {
      width: 48%;
      display: inline-block;
      float: left;
      margin-left: 2%;
  }
  
  /*       Forgot Password button FAF3DD  */
  .frgt-pass {background: transparent;}
  
  /*     Sign Up button  */
  .sign-up {background: #B8F2E6;}
  
  
  /* buttons hover */
  .btn-cliente:hover {
      transform: translatey(3px);
      box-shadow: none;
  }
  
  /* buttons hover Animation */
  .btn-cliente:hover {
      animation: ani9 0.4s ease-in-out infinite alternate;
  }
  @keyframes ani9 {
      0% {
          transform: translateY(2px);
      }
      100% {
          transform: translateY(5px);
      }
  }
  
  </style>
  

<div class="container-fluid">
  
  <div class="main-content">
    <div class="row">
    
            
            <div class="col-md-12">
              <div class="card " style="box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
                    -webkit-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
                    -moz-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);">             
              <div class="panel panel-default  p-3" style="">
                <div class="panel-body">
                                 
                <div class="panel panel-default" style="margin-top: 50px; background: rgba(255, 255, 255, 0.349);">
                    <div class="panel-body">
                      <form id="dropzoneForm" class="dropzone text-dark" action="{{ route('dropzone.store') }}"method="post" name="file" files="true" enctype="multipart/form-data" class="dropzone" id="image-upload" style="border: rgb(126, 119, 119) 3px dashed; border-radius:8px;"> 
                        @method('POST')
                        @csrf
                        <div class="dz-message" data-dz-message><span>Haz clic aqui o arrastra y carga las fotos que deseas</span></div>
                        <input type="text" class="invisible" name="folder" id="folder" value="{{ $folder }}">
                      </form>
                        <br>     
                        <div align="left">
                          <button type="button" class="w-10 btn btn-dark" id="submit-all" style="" onclick="miFunc()">CARGAR</button>
                        </div>
                   </div>
                </div>
                </div>
              </div>
              
              <div class="panel panel-default p-3">
                <div class="panel-heading">
                  <h5 class="panel-title"></h5>
                </div>
                <div class="panel-body" id="uploadedimage" >
      
                </div>
              </div>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
            </div>
            </div>
        
        <div class="col-md-8">
          <form id="formpost" name="formpost" action="{{ route('post.update', $producto->id) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            @method('PUT')           
          <div class="row pt-3">
          <div class="col-md-12 col-sm-12">
            <div class="card p-4" style="box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
            -webkit-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
            -moz-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);">
              <div class="row">
                 <input type="text" class="invisible" name="folder" id="folder" value="{{ $folder }}">
                 <input type="text" class="invisible" name="imagenuna" id="" value="{{ $folder }}">
                <div class="col-12">
                  <h5>Detalles del producto</h5>
                </div>
                <div class="col-md-8 col-sm-12 mt-3">
                  <label for="">Nombre del producto</label>
                  <input name="nombrepro" class="form-input" id="nombrepro" type="text" placeholder="Eje: Iphone" required>
                </div>
                <div class="col-md-4 col-sm-12 mt-3">
                  {{-- <span class="input-item">
                    <i class="fa fa-user-circle"></i>
                  </span> --}}
    
                  <label for="">Selecionar categoria</label>
                    <div id="cateid"></div>
                 </div>
              <div class="col-md-4 mt-3">
                <label for="">Stock</label>
                <input name="stockpro" class="form-input" id="stock" type="number" placeholder="N°" required onkeyup="myFunction()"></div>
              <div class="col-md-4 mt-3">
                <label for="">Codigo</label>
                <input name="codigopro" class="form-input" id="codigopro" type="text" placeholder="N°" required></div>
              <div class="col-md-4 mt-3">
                <label for="">Marca</label>
                <input name="marcapro" class="form-input" id="marcapro" type="text" placeholder="Eje: Apple" required>
              </div>
    
              <div class="col-md-4 mt-3">
                <label for="">Modelo</label>
                <input name="modelopro" class="form-input" id="modelopro" type="text" placeholder="Eje: Pro max" required>
              </div>
    
              <div class="col-md-4 mt-3">
                <label for="">Codigo SKU</label>
                <input name="codigoprosku" class="form-input" id="codigoprosku" type="text" placeholder="Eje: Pro max" required>
              </div>
    
    
              {{-- <div class="col-md-12 mt-5 d-flex justify-content-center">
                <textarea  type="text" name="txtdescripcion" id="txtdescripcion"></textarea>
              </div> --}}
              
            </div>
          </div>
          </div>
        </div>     
        <hr>    
        <a href="{{ route('post.index') }}" class="btn btn-cliente btn-secondary">CANCELAR</a>
      
      <button onclick="formulariouno()" class="btn btn-cliente btn-primary" >GUARDAR CAMBIOS</button> 
        </div>
        
        <div class="col-md-4">
          <div class="row pt-3">
            <div class="col-md-12"><div class="card" style="box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
              -webkit-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
              -moz-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);">
                <div class="row p-3">
                  <div class="col-md-12">
                    <label for="" >Valor total con IVA</label>
                  </div>
                  <div class="col-md-12 d-flex justify-content-end">
                    <label style="font-weight: 700; font-size:25px; color:rgb(214, 40, 40);" for="" id="totalconiva"></label>
                  </div>
      
                  <div class="col-md-12">
                    <label for="" >Valor total sin IVA x STOCK</label>
                  </div>
                  
                  <div class="col-md-12 d-flex justify-content-end">
                    <label for="" id="total"></label>
                  </div>
      
                </div>
                <hr>
                <div class="row p-3">
                  
                  <div class="col-md-6">
                    <label for="">Valor Unidad</label>
                  </div>
                  <div class="col-md-6 d-flex justify-content-end">
                    <label class="toUpper" id="toUpper" for=""></label>
                  </div>
      
      
                  <div class="col-md-6">
                    <label for="">IVA</label>
                    <p id="ivaporcentaje"></p>
                  </div>
                  <div class="col-md-6 d-flex justify-content-end">
                    <label class="" for="" id="totaliva"></label>
                  </div>
      
                  <div class="col-md-10">
                    <label for="">Cantidad</label>
                    <label for="" id=""></label>
                  </div>
                  <div class="col-md-2 d-flex justify-content-end">
                    <label for="" id="cantstock"></label>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-md-12 col-sm-12">
                <div class="card p-4" style="box-shadow: -1px 3px 5px 0px rgba(0, 0, 0, 0.486);
                -webkit-box-shadow: -1px 3px 5px 0px rgba(0, 0, 0, 0.486);
                -moz-box-shadow: -1px 3px 5px 0px rgba(0, 0, 0, 0.486);">
                  <h5>Valores del producto</h5>
                  <div class="row">
                    <div class="col-md-4 mt-3">
                    <label for="">Valor unidad</label>
                  </div>
                  <div class="col-md-8 mt-3">
                    <input name="valorunidad" class="form-input" id="valorunidad" type="number"  placeholder="N°" required onkeyup="myFunction()">
                  </div>
        
                  <div class="col-md-4 mt-3">
                    <label for="">Valor IVA</label>
                  </div>
                  <div class="col-md-8 mt-3">
                    <input name="iva" class="form-input" id="iva" type="number" onkeyup="myFunction()" placeholder="N°" required>
                  </div>
    
                  
                </form>  
                  </div>
                  
                </div>
              </div>
          </div>
        </div>
    </div>     
  </div>
</div>
 
  <script>
    window.onload = function(){  
  $.get('{{ route('categorias') }}',{id:{{ auth()->id() }}}, function (data) {
    document.getElementById("cate_id").innerHTML = data;
    
        }
)
}

function myFunction() {

  
var x = document.getElementById("valorunidad").value;
var y = document.getElementById("iva").value;
var z = document.getElementById("stock").value;
var totaliva = (x * y)/100;
var total = x * z;
var totalconiva = totaliva * z;
var totalconiva1 = total + totalconiva;
var monedaconiva = new Intl.NumberFormat("es-CO", {style: "currency", currency: "COP"}).format(totalconiva1);
var monedasiniva = new Intl.NumberFormat("es-CO", {style: "currency", currency: "COP"}).format(total);
var valoru = new Intl.NumberFormat("es-CO", {style: "currency", currency: "COP"}).format(x);
var porcentaje = "%";
document.getElementById("toUpper").innerHTML = valoru;
document.getElementById("total").innerHTML = monedasiniva;
document.getElementById("totaliva").innerHTML = totaliva;
document.getElementById("totalconiva").innerHTML = monedaconiva;
document.getElementById("cantstock").innerHTML = z;
document.getElementById("ivaporcentaje").innerHTML = porcentaje + y;
}
  </script>

@endsection
