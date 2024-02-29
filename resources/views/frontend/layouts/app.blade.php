<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--Required Meta Tags-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!--Title-->
    <title>KnowledgeWave - @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/fav-icon/fav_icon.png') }}">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome CSS-->
<link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@500&display=swap" rel="stylesheet">

<link href="{{ asset('plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('css/style.css')}}" rel="stylesheet">
<link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('js/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('js/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- WOW CSS -->
    <link rel="stylesheet" href="{{ asset('js/vendor/wow/css/wow.min.css')}}">
    <!--Owl Carousel Css-->
    <link rel="stylesheet" href="{{ asset('js/vendor/owl-carousel/css/owl.carousel.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('js/vendor/magnific-popup/css/magnific-popup.css')}}">
    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ asset('css/style-2.css')}}">

    <!-- Color CSS -->
    <link rel="stylesheet" href="{{ asset('css/color.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive2.css')}}">

    @yield("styles")

</head>

<body>
    @yield('content')

    @include('frontend.components.footer',['contact_info'=> $contactInfo] )



</body>


</html>
