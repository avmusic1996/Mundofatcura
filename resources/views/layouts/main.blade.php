<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Ecommerce Dashboard &mdash; Stisla</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">
  <!-- CSS Libraries -->

  <link rel="stylesheet" href="{{ asset('modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components.css') }}">
<!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>


  {{-- <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ __('Mundo-Factura') }}</title>
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" /> --}}
</head>

<body class="{{ $class ?? '' }}">
  @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
  </form>
  @include('layouts.page_templates.auth')
  @endauth

  @guest()
    @include('layouts.page_templates.guest')
  @endguest
 
  <!--   Core JS Files   -->
 
  <script src="{{ asset('modules/jquery.min.js') }}"></script>
  <script src="{{ asset('modules/popper.js') }}"></script>
  <script src="{{ asset('modules/tooltip.js') }}"></script>
  <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('modules/moment.min.js') }}"></script>
  <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  <script src="{{ asset('modules/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('modules/chart.min.js') }}"></script>
  <script src="{{ asset('modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
  <script src="{{ asset('js/page/index.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  {{-- <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script> --}}
  @stack('js')
</body>
</html>