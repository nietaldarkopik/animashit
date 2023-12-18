<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" name="csrf-token" content="{{csrf_token()}}">
    <title>Animashit Studio Official Website</title>
    <meta name="description" content="Animashit Studio Official Website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/bootstrap-5.3.2-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/fontawesome6.4.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/styles/style.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> -->
    <!-- <link rel="stylesheet" href="{{ url('frontend/animashit/assets/node_modules/animate.css/animate.css') }}"  /> -->
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/owlcarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}"></link>
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/owlcarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}"></link>
    <script src="{{ url('frontend/animashit/assets/scripts/jquery-3.7.1.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Delicious+Handrawn&family=Golos+Text:wght@400;500;600;700;800;900&family=Handlee&family=Indie+Flower&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nanum+Pen+Script&family=Oswald:wght@200;600&family=Satisfy&family=Sriracha&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick-theme.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('style')
</head>

<body>