<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Hotel Alpha - Booking and Reservation Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/leaflet.css')}}" type="text/css">

    {!! SEO::generate() !!}

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/initial.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/skins/default.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{URL::asset('img/logos/favicon.ico')}}" type="image/x-icon">

    <!-- Google fonts -->
    <link href="{{URL::asset('fonts.googleapis.com/css20158.css?family=Cormorant:wght@300;400;500;600;700&amp;display=swap')}}" rel="stylesheet">
    <link href="{{URL::asset('fonts.googleapis.com/css222da.css?family=Jost:wght@300;400;500;600;700&amp;display=swap')}}" rel="stylesheet">
    <link href="{{URL::asset('fonts.googleapis.com/css2b56a.css?family=Mulish:wght@400;500;600;700&amp;display=swap')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/ie10-viewport-bug-workaround.css')}}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{URL::asset('js/ie-emulation-modes-warning.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="page_loader"></div>
    <!-- Header -->
    @includeIf('layouts.header')
    <!-- Header Ends -->

    <!-- Sidebar -->
    @includeIf('layouts.sidebar')
    <!-- Sidebar Ends -->

    <!-- Page-Content -->
    @yield('page-content')
    <!-- Page-Content Ends -->

    <!-- Sidebar -->
    @includeIf('layouts.footer')
    <!-- Sidebar Ends -->

    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
    <script  src="{{URL::asset('js/bootstrap-submenu.js')}}"></script>
    <script  src="{{URL::asset('js/jquery.mb.YTPlayer.js')}}"></script>
    <script  src="{{URL::asset('js/wow.min.js')}}"></script>
    <script  src="{{URL::asset('js/bootstrap-select.min.js')}}"></script>
    <script  src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
    <script  src="{{URL::asset('js/jquery.scrollUp.js')}}"></script>
    <script  src="{{URL::asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script  src="{{URL::asset('js/jquery.filterizr.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script  src="{{URL::asset('js/slick.min.js')}}"></script>
    <script  src="{{URL::asset('js/sidebar.js')}}"></script>
    <script  src="{{URL::asset('js/app.js')}}"></script>
    <script  src="{{URL::asset('js/dropzone.js')}}"></script>
    <script  src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script  src="{{URL::asset('js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- Custom javascript -->

</body>

</html>
