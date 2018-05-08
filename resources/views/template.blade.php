<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#0078BE">
        <meta name="msapplication-TileImage" content="{{asset('/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#0078BE">

        <title>@yield('title') | SQT Web Solutions</title>

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset('main/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('main/css/animate.css')}}">
        <!-- Owl Stylesheets -->
        <link rel="stylesheet" href="{{asset('main/owlcarousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('main/owlcarousel/assets/owl.theme.default.min.css')}}">
        <!-- icons font -->
        <link rel="stylesheet" href="{{asset('main/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('main/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('main/css/bootstrap.offcanvas.min.css')}}" />
        <!-- responsive styles -->
        <link rel="stylesheet" href="{{asset('main/css/responsive.css')}}">
    </head>
    <body data-spy="scroll" data-offset="80">
      <!-- PAGE LOADER -->
      <div class="background-loader" id="pageloeadacc" role="page-loader"></div>
      <!-- Import the top bar from the partials folder section for app-->
      @include('partials.topbar')
      <!-- Import the the header from the partials folder section for app-->
      @include('partials.header')
      <!-- export the cpage content-->
      @yield('content')
      <!-- Import the the footer from the partials folder section for app-->
      @include('partials.footer')

      <!-- JavaScript -->
      <script src="{{asset('main/js/jquery.min.js')}}"></script>
      <script src="{{asset('main/js/popper.min.js')}}"></script>
      <script src="{{asset('main/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('main/js/smoothscroll.js')}}"></script>
      <script src="{{asset('main/owlcarousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('main/js/jquery.bootstrap.wizard.js')}}"></script>
      <script src="{{asset('main/js/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('main/js/waypoints.min.js')}}"></script>
      <script src="{{asset('main/js/bootstrap.offcanvas.min.js')}}"></script>
    	<script src="{{asset('main/js/pagescript.js')}}"></script>
    	<script src="{{asset('main/js/wow.min.js')}}"></script>
    </body>
</html>
