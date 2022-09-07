@extends('layouts.main', ['activePage' => 'producto', 'titlePage' => 'PRODUCTOS'])
@section('content')

<div class="container-fluid">
  <div class="container">
    <!-- /wrapper -->
  </div>
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 card" style="border: 8px solid white;">
                <div class="row">
                    <div class="col-md-5 col-sm-12 p-2 slidercontent">
          
                    </div>
                    <div class="col-md-7 col-sm-12" style="border: 8px solid white;">
                        <h1 style="padding: 5px;">{{$producto->nombrepro}}</h1>
                        <p style="text-align: justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui voluptatibus animi enim cum quisquam a nostrum similique itaque, neque molestias obcaecati ipsum officiis soluta cumque dolore quod ipsam pariatur ex.</p>
                        <p style="font-size: 22px; font-weight:700;">$ {{$producto->valorunidad}} <label style="font-size: 10px;">UND</label></p>
                        <label>Iva - {{$producto->iva}}%</label><br>
                        <label>Stock - {{$producto->stockpro}}</label>
                        <div class="row p-3">
                            <div class="col-6 text-left">
                              {{--@can('user_create')--}}
                              <a href="{{ route('post.index') }}" class="btn btn-md btn-secondary">Volver</a>
                              <a href="{{ route('post.edit', $producto->id) }}" class="btn btn-md btn-success">Editar</a>
                              {{--@endcan--}}
                            </div>
                            <div class="col-6 text-left">
                              {{-- @can('user_create')--}}
                              {{-- <a href="{{ route('post.create') }}" class="btn btn-md btn-primary">Agregar producto</a> --}}
                              {{--@endcan --}}
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/slidejs/jquery.slicebox.js')}}"></script>
<script>
load_images();
function load_images()
{
var folder =document.getElementById('folder').value;
 $.ajax({
data:{folder : folder},
   url:"{{ route('post.fetch_image_show') }}",
   success:function(data)
   {
     $('#uploaded_image').html(data);
   }
 })
}
</script>
@endsection