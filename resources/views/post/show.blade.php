@extends('layouts.main1', ['activePage' => 'producto', 'titlePage' => 'PRODUCTOS'])
@section('content')
<style>
	.slidercontent
	{
		display: flex;
		justify-content: center;
		align-items: center;
	}
</style>

        <link rel="stylesheet" type="text/css" href="/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="/css/custom.css" />
		<script type="text/javascript" src="/js/modernizr.custom.46884.js"></script>
    <div class="container-fluid">
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 card" style="border: 8px solid white;">
                <div class="row">
                    
                    <div class="col-md-5 col-sm-12 p-2" id="uploadedimageshow">
                        <input type="text" class="invisible" name="folder" id="folder" value="{{ $producto->folder }}">        
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
                              {{-- <a href="{{ route('producto.create') }}" class="btn btn-md btn-primary">Agregar producto</a> --}}
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
		<script type="text/javascript" src="/js/jquery.slicebox.js"></script>
		<script type="text/javascript">
        
function load_images()
  {
  var folder =document.getElementById('folder').value;
    $.ajax({
   data:{folder : folder},
      url:"{{ route('post.fetch_image_show') }}",
      success:function(data)
      {
        $('#uploadedimageshow').html(data);
      }
    })
  };
  load_images();

			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slicebox.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	</body>
</html>	
@endsection