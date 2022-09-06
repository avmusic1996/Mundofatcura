@extends('layouts.main', ['activePage' => 'producto', 'titlePage' => 'PRODUCTOS'])
@section('content')
<div class="container-fluid">
    <div class="main-content">
       
    <form id="formpost" name="formpost" action="{{ route('productos.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
          @csrf
   ......                    
          <div class="row pt-3">
          <div class="col-md-12 col-sm-12">
            <div class="card p-4" style="box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
            -webkit-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);
            -moz-box-shadow: -1px 3px 5px 0px rgba(0,0,0,0.486);">
              <div class="row">
                 <input type="text" class="invisible" name="folder" id="folder" value="128912819281982189">
                 <input type="text" class="invisible" name="imagenuna" id="" value="default.png">
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
      
      <!-- <button onclick="formulariouno()" class="btn btn-cliente btn-primary" >GUARDAR CAMBIOS</button>  -->
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
                  
                  </div>
    
                  <input type="submit" value="Save">
                </form>  
    </div>
</div>
<script>
    </script>
@endsection