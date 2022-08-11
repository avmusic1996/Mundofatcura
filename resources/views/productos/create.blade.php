@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
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
      -webkit-box-shadow: 1px 5px 14px 2px rgba(0,0,0,0.11); 
box-shadow: 1px 5px 14px 2px rgba(0,0,0,0.11);
      
  }
  input[id="txt-input"] {width: 100%;}
  /* focus  */
  input:focus {
      transform: translateX(-5px);
      border-radius: 30px;
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
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>


  <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
</head>
<div class="container-fluid">
  <div class="main-content">
    <div class="row">
      <div class="col-md-8 col-sm-12">
        <div class="card">
          
          <div class="panel panel-default" style="background: rgba(255, 255, 255, 0.349);">
            <div class="panel-body">
             
              <form id="dropzoneForm" class="dropzone text-dark" action="{{ route('dropzone.store') }}" accept-charset="UTF-8" enctype="multipart/form-data" style="border:none; border-radius:20px;">
                @csrf
                <div class="dz-message" data-dz-message><span>Haz clic aqui y carga las fotos que deseas</span></div>

                <input type="text" class="hidden" name="folder" id="folder" value="">
                
              </form><br>
            </div>
          
          </div>
          <br />
    
          <div class="panel panel-default">
        <div class="panel-heading">
              <h3 class="panel-title">Imagenes cargadas con exito</h3>
            </div>
            <div class="panel-body" id="uploaded_image">
  
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12">
        <div class="card">
          <div class="row p-3">
            <div class="col-md-4">
              <label for="">Valor total</label>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
              <label for="">uu</label>
            </div>
          </div>
          <hr>
          <div class="row p-3">
            
            <div class="col-md-4">
              <label for="">Valor Unidad</label>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
              <label class="toUpper" id="toUpper" for=""></label>
            </div>


            <div class="col-md-4">
              <label for="">IVA</label>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
              <label class="" for=""></label>
            </div>

          </div>
          
        </div>
      </div>

      <div class="col-md-8 col-sm-12">
        <div class="card">
          <div class="row p-3">
            <div class="col-md-8 col-sm-12 mt-3">
              <label for="">Nombre del producto</label>
              <input name="numerodocumento" class="form-input" id="numerodocumento" type="text" placeholder="Eje: Iphone" required>
            </div>
            <div class="col-md-4 col-sm-12 mt-3">
              {{-- <span class="input-item">
                <i class="fa fa-user-circle"></i>
              </span> --}}
              <label for="">Selecionar categoria</label>
              <select style="height: 35px; padding-left: 14px;color:#5E6472;border:0px; width:100%; -webkit-box-shadow: 1px 5px 14px 2px rgba(0,0,0,0.11); 
              box-shadow: 1px 5px 14px 2px rgba(0,0,0,0.11);" name="tipodocumento" class="form-input" id="tipodocumento" required>
                <option value="pasaporte">Pasaporte<option>
                <option value="extranjera">Cedula extranjera<option>
                <option value="ciudadania">Cedula de ciudadanía<option>
            </select>
             </div>
          <div class="col-md-4 mt-3">
            <label for="">Stock</label>
            <input name="stock" class="form-input" id="stock" type="number" placeholder="N°" required></div>
          

          {{-- <div class="col-md-4 mt-3">
            <label for="">Stock</label>
            <input name="stock" class="form-input" id="numerodocumento" type="text" placeholder="N°" required></div>
          

          <div class="col-md-4 mt-3">
            <label for="">Stock</label>
            <input name="stock" class="form-input" id="numerodocumento" type="text" placeholder="N°" required>
          </div> --}}
          <div class="mt-5 text-center">
            <textarea  type="text" name="txtDescripcion" id="txtDescripcion"></textarea>
          </div>
          
        </div>
      </div>

      </div>

      <div class="col-md-4 col-sm-12">
        <div class="card p-3">
          <h5>Valores del producto</h5>
          <div class="row">
            <div class="col-md-4 mt-3">
            <label for="">Valor unidad</label>
          </div>
          <div class="col-md-8 mt-3">
            <input name="stock" class="form-input" id="valorunidad" type="number" placeholder="N°" required>
          </div>

          <div class="col-md-4 mt-3">
            <label for="">Valor IVA</label>
          </div>
          <div class="col-md-8 mt-3">
            <input name="stock" class="form-input" id="iva" type="text" placeholder="N°" required>
          </div>

          </div>
          
        </div>
      </div>

      
      <div class="col-sm-10">
        <form action="{{ route('productos.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
          @csrf
           <!--   con = Container  for items in the form-->
           <div class="con">
           <!--     Start  header Content  -->
           
           <!--     End  header Content  -->
           <br>
           <input class="invisible" name="edit" id="edit" type="number" value="1" >
                <input class="invisible" name="idcliente" id="idcliente" type="number" value="0" >
           <div class="field-set">
             <div class="row">
               <div class="col-md-4 d-flex pt-3">
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                

                <input name="nit" class="form-input" id="nit" type="text" placeholder="Nit" required>
             

               </div>
               <div class="col-md-4 d-flex pt-3">
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="nombresapellidos" class="form-input" id="nombresapellidos" type="text" placeholder="Nombres y apellidos" required>
               </div>
               <div class="col-md-4 d-flex pt-3"> 
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="razonsocial" class="form-input" id="razonsocial" type="text" placeholder="Razon social (Si acredita)" required>
               </div>

               <div class="col-md-4 d-flex pt-3">
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <select style="padding-left: 14px;color:#5E6472;border:0px; width:100%;box-shadow: 5px 5px 15px 5px rgb(0 0 0 / 20%);" name="tipodocumento" class="form-input" id="tipodocumento" required>
                  <option value="pasaporte">Pasaporte<option>
                  <option value="extranjera">Cedula extranjera<option>
                  <option value="ciudadania">Cedula de ciudadanía<option>
              </select>
                
               </div>
               
               <div class="col-md-4 d-flex pt-3">
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="numerodocumento" class="form-input" id="numerodocumento" type="text" placeholder="Numero id" required>
               </div>
               <div class="col-md-4 d-flex pt-3">
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="correoelectronico" class="form-input" id="correoelectronico" type="text" placeholder="@ejemplo.com" required>
               </div>

               
               <div class="col-md-4 d-flex pt-3"> 
                <span class="input-item">
                  <i class="fa fa-phone-square" aria-hidden="true"></i>
                </span>
                <input name="telefono" class="form-input" id="telefono" type="text" placeholder="Telefono" required>
               </div>
               <div class="col-md-4 d-flex pt-3"> 
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="celular" class="form-input" id="celular" type="text" placeholder="Celular" required>
               </div>

               <div class="col-md-4 d-flex pt-3">
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="pais" class="form-input" id="pais" type="text" placeholder="Pais" required>
               </div>
               <div class="col-md-4 d-flex pt-3">
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="departamento" class="form-input" id="departamento" type="text" placeholder="Departamento" required>
               </div>
               <div class="col-md-4 d-flex pt-3"> 
                <span class="input-item">
                  <i class="fa fa-user-circle"></i>
                </span>
                <input name="municipio" class="form-input" id="municipio" type="text" placeholder="Municipio" required>
               </div>
             </div>
              <!--   user name -->
                 {{-- <span class="input-item">
                   <i class="fa fa-user-circle"></i>
                 </span>
                <!--   user name Input-->
                 <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required>
             
              <br> --}}
             
                   {{-- <!--   Password -->
             
              <span class="input-item">
                <i class="fa fa-key"></i>
               </span>
              <!--   Password Input-->
              <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" required>
             
        <!--      Show/hide password  -->
             <span>
                <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
             </span>
             
             
              <br> --}}
        <!--        buttons -->
        <!--      button LogIn -->
           </div>
          
        <!--   other buttons -->
           {{-- <div class="other">
        <!--      Forgot Password button-->
              <button class="btn submits frgt-pass">Forgot Password</button>
        <!--     Sign Up button -->
              <button class="btn submits sign-up">Sign Up 
        <!--         Sign Up font icon -->
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              </button>
        <!--      End Other the Division -->
           </div> --}}
             
        <!--   End Conrainer  -->
          </div>
          
          <!-- End Form -->
        
    <hr>    
    <div class="modal-footer" style="">
      <button type="button" class="btn btn-cliente btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-cliente btn-primary">Save changes</button>
    </div>

  </form>
        {{-- <form action="{{ route('categoria.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
          @csrf
        <div class="form-group">
            <label for="title">INGRESE TITLE</label>
            <input type="text" class="form-control" name="titulo" placeholder="Ingrese su nombre" value="{{ old('titulo') }}" autofocus>
                    @if ($errors->has('titulo'))
                      <span class="error text-danger" for="input-name">{{ $errors->first('titulo') }}</span>
                    @endif
        </div>

        <div class="form-group">
          <label for="title">INGRESE ORDEN</label>
          <input type="text" class="form-control" name="orden" placeholder="Ingrese su nombre" value="{{ old('titulo') }}" autofocus>
                  @if ($errors->has('orden'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('orden') }}</span>
                  @endif
        </div>

      <div class="form-group">
        <label for="title">INGRESE TITLE</label>
        <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Ingrese su nombre" value="{{ old('titulo') }}" autofocus></textarea>
                @if ($errors->has('descripcion'))
                  <span class="error text-danger" for="input-name">{{ $errors->first('descripcion') }}</span>
                @endif
      </div>

        <button type="submit" class="btn col-md-12 btn-primary">Guardar</button>
        </form> --}}


          {{-- {!! Form::open(['route'=>['categoria.store'],'method'=>'POST','files'=>true]) !!} --}}
{{-- 
          <div class="jumbotron">
              <div class="form-group">
                  <label for="title">INGRESE TITLE</label>
                  {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>
              <div class="form-group">
                  <label for="description">INGRESE DESCRIPTION</label>
                  {!! Form::text('description',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>

              <div class="form-group">
                  <label for="nombre">INGRESE NOMBRE</label>
                  {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>
              

              <div class="form-group">
                  <label for="orden">INGRESE ORDEN</label>
                  {!! Form::text('orden',null ,['class'=>'form-control']) !!}
              </div>

              <div class="form-group">
                <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                {!! Form::text('descripcion',null ,['class'=>'form-control','maxlength'=>'67']) !!}
              </div>


              <div class="form-group">
                  <label for="urlfoto">IMAGEN</label> <br>
                  <img src="/img/categoria/foto.jpg">
                  {!! Form::file('urlfoto') !!}
              </div>

          </div>
          {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
          {!! Form::close() !!} --}}
      </div>
  </div>
  </div>
</div>


<script type="text/javascript">
    
  Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;
      submitButton.addEventListener('click', function(){
        myDropzone.processQueue();
      });
      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        load_images();
      });  
    }
  };




  load_images();
  function load_images()
  {
  var folder =document.getElementById('folder').value;
    $.ajax({
   data:{folder : folder},
      url:"{{ route('imageinmueble.fetch_image') }}",
      success:function(data)
      {
        $('#uploaded_image').html(data);
      }
    })
  }

  
  $(document).on('click', '.remove_image', function(){
    var folder = document.getElementById('folder').value;
    var name = $(this).attr('id');
    $.ajax({
      url:"{{ route('imageinmueble.delete_image') }}",
      data:{name : name, folder : folder},
      success:function(data){
        load_images();
      }
    })
  });



  function fijar_imagen(nombreimagen) {
var folder = document.getElementById('folder').value;
$.ajax({
      url:"{{ route('imageinmueble.set_image') }}",
      data:{nombreimagen : nombreimagen, folder : folder},
      success:function(data){
        load_images();
      }
    })  
}



function fijar_imagen2(nombreimagen) {
var folder = document.getElementById('folder').value;
$.ajax({
      url:"{{ route('imageinmueble.set_image2') }}",
      data:{nombreimagen : nombreimagen, folder : folder},
      success:function(data){
        
        load_images();
      }
    })  
}


          ClassicEditor
            .create( document.querySelector( '#txtDescripcion' ) )
            .catch( error => {
            console.error( error );
            } );


  
  // let text = document.querySelector("#valorunidad").value;
  let text1 = document.getElementById('valorunidad');
  text1.addEventListener('keyup',(event) => 
  {
    let text = document.getElementById('valorunidad').value;
    let stock = document.getElementById('stock').value;
    
    var valortotal = text * stock;

    // var valortotal = event.path[0].value;
    document.getElementById('toUpper').innerHTML = valortotal;
    
  }
  );



  // var iva = document.getElementById('iva');
  // text.addEventListener('keyup',(event) => 
  // {
  //   var inputext = event.path[0].value;
  //   document.querySelector('ToUpper').innerHTML = inputext.toUpperCase();
  // });


  


</script>


@endsection
