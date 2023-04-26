<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <!-- <base href="{{asset('')}}"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Basic Page Needs -->
    <title>Luxe Hotel</title>
    <!--<meta name="robots" content="index, follow">-->
    <meta name="keywords">
    <meta name="description" content="Luxe Hotel">
    <meta name="robots" content="noindex">
    <link rel="icon" href="favicon.ico">

    <!--Link css page index-->
    <link href="{{asset('')}}frontend/content/Css/main.css" rel="stylesheet" />
    <link href="{{asset('')}}frontend/content/Css/responsive.css" rel="stylesheet" />
    <link href="{{asset('')}}frontend/content/Css/room.css" rel="stylesheet" />
   <link rel="stylesheet" href="{{asset('')}}frontend/files/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <!-- Favicons -->
    <!-- Vendor CSS files cdn -->
    <link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/bootstrap-4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/files/fonts/fontawesome-pro-5.15.2/css/all.min.css">

    <!-- Plugin css local-->
   <link rel="stylesheet" href="{{asset('')}}frontend/files/cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
    <link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/daterangepicker/daterangepicker.css">

    

    <link rel="stylesheet" href="{{asset('')}}frontend/files/plugins/menu.css">

    @yield('css')

</head>

<body>

@include('layout.header')

@yield('content')

@include('layout.footer')

@yield('js')
    
</body>


<!-- Mirrored from luxehotel.webhotel.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Mar 2023 07:29:41 GMT -->
</html>
