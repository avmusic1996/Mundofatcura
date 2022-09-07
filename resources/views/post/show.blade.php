@extends('layouts.main1', ['activePage' => 'producto', 'titlePage' => 'PRODUCTOS'])
@section('content')

        <link rel="stylesheet" type="text/css" href="/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/css/slicebox.css" />
		<link rel="stylesheet" type="text/css" href="/css/custom.css" />
		<script type="text/javascript" src="/js/modernizr.custom.46884.js"></script>
	

		

    <div class="container-fluid">
    <div class="main-content">
        <div class="row">
            <div class="col-md-12 card" style="border: 8px solid white;">
                <div class="row">
                    <div class="col-md-5 col-sm-12 p-2 slidercontent">
                        <ul id="sb-slider" class="sb-slider">
                            <li>
                               <img src="/images/1.jpg" alt="image1"/>
                              
                            </li>
                            <li>
                              <img src="/images/2.jpg" alt="image2"/>
                          
                            </li>
                            <li>
                                <img src="/images/3.jpg" alt="image1"/>
                                
                            </li>
                            <li>
                               <img src="/images/4.jpg" alt="image1"/>
                                
                            </li>
                            <li>
                               <img src="/images/5.jpg" alt="image1"/>
                               
                            </li>
                            <li>
                                <img src="/images/6.jpg" alt="image1"/>
                                
                            </li>
                            <li>
                              <img src="/images/7.jpg" alt="image1"/>
                                
                            </li>
                        </ul>
        
                        <div id="shadow" class="shadow"></div>
        
                        <div id="nav-arrows" class="nav-arrows">
                            <a href="#">Next</a>
                            <a href="#">Previous</a>
                        </div>
        
                        <div id="nav-dots" class="nav-dots">
                            <span class="nav-dot-current"></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
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