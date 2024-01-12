@php
    $meta_tags = [];
    $meta_tags['meta_title'] = \App\Models\SettingModel::getByKeyword('meta-title');
    $meta_tags['meta_description'] = \App\Models\SettingModel::getByKeyword('meta-description');
    $meta_tags['meta_keywords'] = \App\Models\SettingModel::getByKeyword('meta-keywords');
    $meta_tags['meta_robots'] = \App\Models\SettingModel::getByKeyword('meta-robots');
    $meta_tags['meta_language'] = \App\Models\SettingModel::getByKeyword('meta-language');
    $meta_tags['meta_revisit_after'] = \App\Models\SettingModel::getByKeyword('meta-revisit-after');
    $meta_tags['meta_author'] = \App\Models\SettingModel::getByKeyword('meta-author');
    $google_analytic = \App\Models\SettingModel::getByKeyword('google-analytic');
@endphp

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    {!! $google_analytic->description !!}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" name="csrf-token" content="{{csrf_token()}}">
    <title>{{$meta_tags['meta_title']->description}}</title>
    @foreach($meta_tags as $i => $m)
        <meta name="{{$m->title}}" content="{{$m->description}}">
    @endforeach
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/animashit/assets/icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/animashit/assets/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/animashit/assets/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/animashit/assets/icon/site.webmanifest') }}">

    <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/bootstrap-5.3.2-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/fontawesome6.4.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/styles/style.css') }}">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/node_modules/animate.css/animate.css') }}"  /> -->
    <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/owlcarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}"></link>
    <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/owlcarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}"></link>
    <script src="{{ asset('frontend/animashit/assets/scripts/jquery-3.7.1.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Delicious+Handrawn&family=Golos+Text:wght@400;500;600;700;800;900&family=Handlee&family=Indie+Flower&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nanum+Pen+Script&family=Oswald:wght@200;600&family=Satisfy&family=Sriracha&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/animashit/assets/scripts/slick-1.8.1/slick/slick-theme.css') }}">
    <script src="https://unpkg.com/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/animashit/assets/bootstrap-5.3.2-dist/js/bootstrap.bundle.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('style')
</head>

<body>