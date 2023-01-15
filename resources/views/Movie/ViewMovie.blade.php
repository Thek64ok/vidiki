<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Главная</title>
    <link rel="stylesheet" href="{{asset('css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/Главная.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
</head>
<body data-home-page="Главная.html" data-home-page-title="Главная" class="u-body u-overlap u-xl-mode" data-lang="ru">
<style>
    body {
        background-image: url(img/asd.png);
        background-attachment: fixed;
    }
    .Pages{
        padding-left: 27.5%;
        padding-top: 5%;
        padding-right: 25%;

    }

</style>
<section class="Pages">

    <img>
        <style>
            div{
                border: 2px solid black;


            }
        </style>
        <img
            src="./img/{{$img_path}}">
{{--    {{$link}}--}}
    <iframe src="//86.annacdn.cc/isNNaZqdwveX/movie/14" width="640" height="480" frameborder="0" allowfullscreen></iframe>

</section>

<header class="u-clearfix u-header u-image u-header" id="sec-b67e" data-image-width="1280" data-image-height="1280">
    <div class="u-clearfix u-image-default u-sheet u-sheet-1" data-image-width="1280" data-image-height="942">
        <a href="{{asset('dashboard')}}" class="u-image u-logo u-image-1" data-image-width="1280"
           data-image-height="1095">
            <img
                src="{{asset('img/b092734375c9c414cc32f7316158b272fa6b796f989d9969170bae947a3eaccd8fae6d7a1bb1d96de772a844b04d631ba1114198ac790972d95abe_1280.png')}}"
                class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            style="padding: 10px 20px;">Главная</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            style="padding: 10px 20px;">Сериалы</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            style="padding: 10px 20px;">Фильмы</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            style="padding: 10px 20px;">Аниме</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            style="padding: 10px 20px;">Мультфильмы</a>
                    </li>
                    <li class="u-nav-item"><a
                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                            style="padding: 10px 20px;"><div>{{ Auth::user()->name }}</div></a>
                    </li>
                </ul>
            </div>

            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Главная</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Сериалы</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Фильмы</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Аниме</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Мультфильмы</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link">Логин</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>


</body>
</html>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
