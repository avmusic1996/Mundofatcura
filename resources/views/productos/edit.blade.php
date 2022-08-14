@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar usuario'])
@section('content')
  <div class="container-fluid">
    <div class="main-content">
      <div class="row">
        <div class="col-sm-10">  





              <div class="row">
                {{-- <form action="{{ route('productos.store') }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
                      @csrf --}}
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
                
                <div class="col-md-4 col-sm-12" style="">
                  <div class="card" style="box-shadow: inset 0px 5px 30px -3px rgba(16, 109, 104, 0.158);">
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
                <form action="{{ route('productos.update', $producto->id) }}" method="post" class="form-horizontal p-2" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="row">
                <div class="col-md-8 col-sm-12">
                  <div class="card p-4" style="box-shadow: inset 0px 5px 30px -3px rgba(16, 109, 104, 0.144);">
                    <div class="row">
                      <div class="col-12">
                        <h5>Detalles del producto</h5>
                      </div>
                      
                      <div class="col-md-8 col-sm-12 mt-3">
                        <label for="">Nombre del producto</label>
                        <input name="nombrepro" class="form-input" id="nombrepro" type="text" placeholder="Eje: Iphone" value="{{ old('nombrepro', $producto->nombrepro) }}" required>
                      </div>
                      <div class="col-md-4 col-sm-12 mt-3">
                        {{-- <span class="input-item">
                          <i class="fa fa-user-circle"></i>
                        </span> --}}
          
                        <label for="">Selecionar categoria</label>
                          <div id="cate_id"></div>
                       </div>
                    <div class="col-md-4 mt-3">
                      <label for="">Stock</label>
                      <input name="stockpro" class="form-input" id="stock" type="number" placeholder="N°" required onkeyup="myFunction()" value="{{ old('nombrepro', $producto->stockpro)}}"></div>
                    
          
                    <div class="col-md-4 mt-3">
                      <label for="">Codigo</label>
                      <input name="codigopro" class="form-input" id="codigopro" type="text" placeholder="N°" required value="{{ old('nombrepro', $producto->codigopro)}}"></div>
                    
          
                    <div class="col-md-4 mt-3">
                      <label for="">Marca</label>
                      <input name="marcapro" class="form-input" id="marcapro" type="text" placeholder="Eje: Apple" value="{{ old('nombrepro', $producto->marcapro)}}"required >
                    </div>
          
                    <div class="col-md-4 mt-3">
                      <label for="">Modelo</label>
                      <input name="modelopro" class="form-input" id="modelopro" type="text" placeholder="Eje: Pro max" value="{{ old('nombrepro', $producto->modelopro)}}" required>
                    </div>
          
                    <div class="col-md-4 mt-3">
                      <label for="">Codigo SKU</label>
                      <input name="codigoprosku" class="form-input" id="codigoprosku" type="text" placeholder="Eje: Pro max" value="{{ old('codigoprosku', $producto->codigoprosku) }}" required>
                    </div>
          
          
                    {{-- <div class="col-md-12 mt-5 d-flex justify-content-center">
                      <textarea  type="text" name="txtdescripcion" id="txtdescripcion"></textarea>
                    </div> --}}
                    
                  </div>
                </div>
          
                </div>
          
                <div class="col-md-4 col-sm-12">
                  <div class="card p-4" style="box-shadow: inset 0px 5px 30px -3px rgba(16, 109, 104, 0.212);">
                    <h5>Valores del producto</h5>
                    <div class="row">
                      <div class="col-md-4 mt-3">
                      <label for="">Valor unidad</label>
                    </div>
                    <div class="col-md-8 mt-3">
                      <input name="valorunidad" class="form-input" id="valorunidad" type="number"  placeholder="N°" required onkeyup="myFunction()" value="{{ old('nombrepro', $producto->valorunidad)}}">
                    </div>
          
                    <div class="col-md-4 mt-3">
                      <label for="">Valor IVA</label>
                    </div>
                    <div class="col-md-8 mt-3">
                      <input name="iva" class="form-input" id="iva" type="number" onkeyup="myFunction()" placeholder="N°" value="{{ old('nombrepro', $producto->iva)}}" required>
                    </div>
          
                    </div>
                    
                  </div>
                </div>
              </div>     
              <hr>    
              <div class="modal-footer" style="">
                <button type="button" class="btn btn-cliente btn-secondary" data-dismiss="modal">CANCELAR</button>
                <button type="submit" class="btn btn-cliente btn-primary">GUARDAR CAMBIOS</button>
              </div>
            </form>
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
