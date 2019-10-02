<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Excon</title>
    <link rel="icon" href="/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body data-spy="scroll" data-target="#mainNav" data-offset="70">

<!--================Header Menu Area =================-->
@include('elements.header')
<!--================Header Menu Area =================-->

@yield('content')

<!--================Footer Area =================-->
@include('elements.footer')
<!--================End Footer Area =================-->

@yield('end')
</body>
</html>