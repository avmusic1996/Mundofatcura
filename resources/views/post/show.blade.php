@extends('layouts.main', ['activePage' => 'producto', 'titlePage' => 'PRODUCTOS'])
@section('content')
<style>
    .img-slider{
  position: relative;
  width: 400px;
  height: 260px;
  margin: 10px;
  -webkit-box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.37);
-moz-box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.37);
box-shadow: 0px 2px 18px 0px rgba(0,0,0,0.37);
}

/* .img-slider .slide{
  z-index: 1;
  position: absolute;
  width: 100%;
  clip-path: circle(0% at 0 50%);
} */

.img-slider .slide.active{
  clip-path: circle(150% at 0 50%);
  transition: 2s;
  transition-property: clip-path;
}

.img-slider .slide img{
  z-index: 1;
  width: 100%;
  border-radius: 5px;
}

.img-slider .slide .info{
  position: absolute;
  top: 0;
  padding: 15px 30px;
}

.img-slider .slide .info h2{
  color: #fff;
  font-size: 45px;
  text-transform: uppercase;
  font-weight: 800;
  letter-spacing: 2px;
}

.img-slider .slide .info p{
  color: #fff;
  background: rgba(0, 0, 0, 0.1);
  font-size: 16px;
  width: 60%;
  padding: 10px;
  border-radius: 4px;
}

.img-slider .navigation{
  z-index: 2;
  position: absolute;
  display: flex;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
}

.img-slider .navigation .btn{
  background: rgba(255, 255, 255, 0.5);
  width: 0px;
  height: 5px;
  margin: 6px;
  border-radius: 10%;
  cursor: pointer;
}

.img-slider .navigation .btn.active{
  background: #2696E9;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.5);
}

@media (max-width: 820px){
  .img-slider{
    width: 600px;
    height: 375px;
  }

  .img-slider .slide .info{
    padding: 10px 25px;
  }

  .img-slider .slide .info h2{
    font-size: 35px;
  }

  .img-slider .slide .info p{
    width: 70%;
    font-size: 15px;
  }

  .img-slider .navigation{
    bottom: 25px;
  }

  .img-slider .navigation .btn{
    width: 10px;
    height: 10px;
    margin: 8px;
  }
}

@media (max-width: 620px){
  .img-slider{
    width: 400px;
    height: 250px;
  }

  .img-slider .slide .info{
    padding: 10px 20px;
  }

  .img-slider .slide .info h2{
    font-size: 30px;
  }

  .img-slider .slide .info p{
    width: 80%;
    font-size: 13px;
  }

  .img-slider .navigation{
    bottom: 15px;
  }

  .img-slider .navigation .btn{
    width: 8px;
    height: 8px;
    margin: 6px;
  }
}

@media (max-width: 420px){
  .img-slider{
    width: 320px;
    height: 200px;
  }

  .img-slider .slide .info{
    padding: 5px 10px;
  }

  .img-slider .slide .info h2{
    font-size: 25px;
  }

  .img-slider .slide .info p{
    width: 90%;
    font-size: 11px;
  }

  .img-slider .navigation{
    bottom: 10px;
  }
}
.slidercontent
{
    height: 100%;
    width: 100%;
    background-image: url('../img/fondoshow.png');
    background-size: 80%, 20%;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<div class="container-fluid">
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 card" style="border: 8px solid white;">
                <div class="row">
                    <div class="col-md-5 col-sm-12 p-2 slidercontent">
                        <div class="img-slider">
                          <input type="text" class="invisible" name="folder" id="folder" value="{{ $producto->folder }}">
                            <div class="slide active" id="uploaded_image" style="clip-path: circle(150% at 0 50%);
                            transition: 2s;
                            transition-property: clip-path;">
                    
                            </div>
                            <div class="navigation">
                              <div>
                                <li class="btn active"></li>
                              </div>
                              <div class="">
                                <li class="btn"></li>
                              </div>
                              <div class="">
                                <li class="btn"></li>
                              </div>
                              <div class="">
                                <li class="btn"></li>
                              </div>
                              <div class="">
                                <li class="btn"></li>
                              </div>
                            </div>
                          </div>
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


var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
</script>
@endsection