<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Главная</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
</head>
<body class="body">
<div class="navbar-no-shadow wf-section">
    <div data-animation="default" data-colapse="medium" data-duration="400" data-easing="easy" data-easing="ease"
         role="banner" class="navbar-no-shadow-container w-nav">
        <div class="container-regular">
            <div class="navbar-wrapper">
                <a href="#" class="navbar-brand w-nav-brand"><img
                        src="https://uploads-ss1.webflow.com/62434fa732124a0fb112aab4/62434fa732124a332512aaee_placeholder-1.svg"
                        loading="lazy" alt=""> </a>
                <nav role="navigation" class="nav-menu-wrapper w-nav-menu">
                    <ul role="list" class="nav-menu w-list-unstyled">
                        <li>
                            <a href="#" class="nav-link">about</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">Feature</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">User</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">Pricing</a>
                        </li>
                        <li>
                            <div data-hover="false" data_delay="0" class="nav-dropdown w-dropdown">
                                <div class="nav-dropdown-toggle w-dropdown-toggle">
                                    <div class="nav-dropdown-icon w-icon-dropdown-toggle"></div>
                                    <div>Resources</div>
                                </div>
                                <nav class="nav-dropdown-list shadow-three mobile-shadow-hide w-dropdown-list">
                                    <a href="#" class="nav-dropdown-link w-dropdown-link">Resource link1</a>
                                    <a href="#" class="nav-dropdown-link w-dropdown-link">Resource link2</a>
                                    <a href="#" class="nav-dropdown-link w-dropdown-link">Resource link3</a>
                                </nav>
                            </div>
                        </li>
                        <li class="mobile-margin-top-10">
                            <div class="nav-button-wraper">
                                <a href="#" class="button-primary w-button">get started</a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-9 w-container"><img src="" loading="lazy" width="368" height="370" alt="" class="image-2"></div>
<div class="container-2 w-container"><img src="./img/{{ $Movie['img_path'] }}" loading="lazy" width="368" height="500">
    <div class="texts">{{ $Movie['ru_title'] }}</div>
    <div class="texts2">Описание:{{ $Movie['short_text'] }}:</div>
    <div class="movie">
    @php
        $mv = $Movie['link'];
        echo $mv;
    @endphp
    </div>
</div>

{{--{{ (object)$Movie->link }}--}}
<div class="container-10 w-container"><img src="" loading="lazy" width="603" height="370" alt="" class="image"> </div>
</body>
