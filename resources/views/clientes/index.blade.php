
@extends('layouts.main', ['activePage' => 'cliente', 'titlePage' => 'CLIENTES'])
@section('content')
<style>
</style>
<div class="container-fluid">
        <div class="main-content">

          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Clientes</h4>
                  <br>
                
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
                            {{-- <a href="{{ route('clientes.create') }}" class="btn btn-md btn-primary">Añadir Cliente</a> --}}
                            <button type="button" onclick="create()" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Añadir Cliente
                            </button>
                            {{--@endcan--}}
                          </div>
                        </div>
                        <div class="table-responsive">
                          <table class="table">
                            <thead class="text-primary">
                              <th>Cedula</th>
                              <th>Nombres completos</th>
                              <th>Correo</th>
                              <th>Tel/Cel</th>
                              <th class="text-right">Acciones</th>
                            </thead>
                            <tbody>
                              @foreach ($clientes as $cliente)
                                <tr>
                                  <td>{{ $cliente->numerodocumento }}
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
                                  <td>{{ $cliente->nombresapellidos }}</td>
                                  <td>{{ $cliente->correoelectronico }}</td>
                                  <td>{{ $cliente->celular }}</td>
                            
                                  <td class="td-actions text-right">
                                  
                                  <a  onclick="edit('{{$cliente->id}}')" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter"><i class="material-icons">Editar</i></a>

                                  {{-- <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter"><i class="material-icons">Editar</i></a> --}}
                                  <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-primary"><i class="material-icons">Detalles</i></a>
                                  
                                
                                  <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenteredelete" data-id="{{$cliente->id}}"><i class="material-icons">Eliminar</i></a>
                                  </td>
                                  
                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="card-footer ml-auto">
                          {{ $clientes->links() }}
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    

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
  height: 48px;
    margin-top: 0%;
    padding: 0px 10px 0px 18px;

    
    font-size: 16px;
    font-family: 'Abel', sans-serif;
    color: #5E6472;
  
    outline: none;
    border: none;
  
    border-radius: 0px 5px 5px 0px;
    transition: 0.2s linear;
    -webkit-box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.2); 
box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.2);
    
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
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #6777ef;">
        <h5 class="modal-title text-white" id="exampleModalLongTitle">Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
          <!-- LOGN IN FORM by Omar Dsoky -->
          <form id="formsave" class="form-cliente" action="{{ route('clientes.store') }}" method="post" enctype="multipart/form-data">

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
             </div>
            </div> 
      <hr>    
      <div class="modal-footer" style="">
        <button type="button" class="btn btn-cliente btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-cliente btn-primary">Save changes</button>
      </div>

    </form>
    </div>
  </div>
</div>
</div>





{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}

<div class="modal fade" id="exampleModalCenteredelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-12">
          <p>¿ESTAS SEGURO QUE DESEAS ELIMINAR AL CLIENTE?</p>
        </div>
      </div>
      <div class="modal-footer">
        @foreach ($clientes as $cliente)
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form action="{{ route('clientes.delete', $cliente->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit" rel="tooltip">
          <i class="material-icons">Eliminar</i>
          </button>
      </form>
     @endforeach
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
function create() {
  document.getElementById("edit").value=1;
  document.getElementById("idcliente").value="";
  document.getElementById("formsave").reset();
}

function edit(id) {
  
  document.getElementById("edit").value=2;
  document.getElementById("idcliente").value=id;
  $.get('{{ route('cliente') }}',{id:id}, function (data) {
    const dataa = data.slice(1);
    const dataaa = dataa.substr(0, dataa.length - 1);


localStorage.setItem("testJSON", dataaa);

// Retrieving data:
let text = localStorage.getItem("testJSON");
let obj = JSON.parse(text);

document.getElementById("nit").value=obj.nit;
document.getElementById("nombresapellidos").value=obj.nombresapellidos;
document.getElementById("razonsocial").value=obj.razonsocial;
document.getElementById("tipodocumento").value=obj.tipodocumento;
document.getElementById("numerodocumento").value=obj.numerodocumento
document.getElementById("correoelectronico").value=obj.correoelectronico;
document.getElementById("telefono").value=obj.telefono
document.getElementById("celular").value=obj.celular
document.getElementById("pais").value=obj.pais
document.getElementById("departamento").value=obj.departamento
document.getElementById("municipio").value=obj.municipio;
        })
         }

  // Show/hide password onClick of button using Javascript only

// https://stackoverflow.com/questions/31224651/show-hide-password-onclick-of-button-using-javascript-only

function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);



$('#exampleModalCenteredelete').on('show.bs.modal', function (event)
{
  // Button that triggered the modal
  var button = $(event.relatedTarget)
  // Extract info from data-bs-* attributes
  var id = button.data('id')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modal = $(this)
    modal.find('.modal-title').text('Se va a eliminar el registro: ' + id)
  // const modalTitle = exampleModal.querySelector('.modal-title')
  // const modalBodyInput = exampleModal.querySelector('.modal-body input')

  // modalTitle.textContent = `New message to ${recipient}`
  // modalBodyInput.value = recipient
})


// const exampleModal = document.getElementById('exampleModalCenteredelete')
// exampleModal.addEventListener('show.bs.modal', event => {
//   // Button that triggered the modal
//   const button = event.relatedTarget
//   // Extract info from data-bs-* attributes
//   const recipient = button.getAttribute('id')
//   // If necessary, you could initiate an AJAX request here
//   // and then do the updating in a callback.
//   //
//   // Update the modal's content.
//   const modalTitle = exampleModal.querySelector('.modal-title')
//   // const modalBodyInput = exampleModal.querySelector('.modal-body input')
// // `nuevo mensaje ${recipient}`
//   modalTitle.textContent = "Estas eliminando el registro" + id; 
//   modalBodyInput.value = recipient
// })

</script>
    
@endsection