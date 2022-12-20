<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/./css/reset.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/./css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/./css/style.css">
    <link rel="stylesheet" href="{{ asset('front/') }}/./css/responcive.css">
    <title>@yield('title','E-uni')</title>
</head>

<body>
    <header>
        <div class="container">
            <diw class="row">
                <div class="header-top">
                    <a href="" class="logo">
                        <img src="{{ asset('front/') }}/./img/e-uni-logo.svg" alt="">
                    </a>
                    <div class="header-top-right">
                        <ul class="header-top-nav">
                            <li class="nav-item">
                                <a href="{{ route('policies.'.app()->getLocale()) }}">
                                    Policies
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    Careers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('donation.'.app()->getLocale()) }}">
                                    Donation
                                </a>
                            </li>
                        </ul>
                        <ul class="lang">
                          @yield('lang')
                        </ul>
                        <form class="head-sign" action="#">
                            <button class="head-btn">
                                Sign in
                            </button>
                        </form>
                        <div class="nav-open">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </diw>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <a href="{{ route('home.'.app()->getLocale()) }}" class="logo-2">
                        <img src="{{ asset('front/') }}/./img/adnsu-logo.svg" alt="">
                    </a>
                    <img class="nav-close" src="{{ asset('front/') }}/./img/close.svg" alt="">
                    <div class="navbar">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="">
                                    About
                                    <img src="{{ asset('front/') }}/./img/down-img.svg" alt="">
                                </a>
                                <ul class="dropdown">
                                    <li class="dropdown-item">
                                        <a href="{{ route('history.'.app()->getLocale()) }}">
                                            History
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('about.'.app()->getLocale()) }}">
                                            BA Programs About
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('lid_heyet.'.app()->getLocale()) }}">
                                            Leadership & staff
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('akra.'.app()->getLocale()) }}">
                                            Accreditation
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    Admission
                                    <img src="{{ asset('front/') }}/./img/down-img.svg" alt="">
                                </a>
                                <ul class="dropdown">
                                    <li class="dropdown-item">
                                        <a href="{{ route('u_graduate.'.app()->getLocale()) }}">
                                            Undergraduate
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('graduate.'.app()->getLocale()) }}">
                                            Graduate
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('postgraduate.'.app()->getLocale()) }}">
                                            Postgraduate
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('international.'.app()->getLocale()) }}">
                                            International Students
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#">
                                    Academics
                                    <img src="{{ asset('front/') }}/./img/down-img.svg" alt="">
                                </a>
                                <ul class="dropdown">
                                    <li class="dropdown-item">
                                        <a href="{{ route('bachelor.'.app()->getLocale()) }}">
                                            Bachelor degree
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('master.'.app()->getLocale()) }}">
                                            Master degree
                                        </a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="{{ route('phd.'.app()->getLocale()) }}">
                                            PhD degree
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('library.'.app()->getLocale()) }}">
                                    Library
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('alumni.'.app()->getLocale()) }}">
                                    Alumni
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('news-evnt.'.app()->getLocale()) }}">
                                    News & Events
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact.'.app()->getLocale()) }}">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form class="search" action="#">
                        <a href="javascript:void(0)">
                            <img class="open-search" src="{{ asset('front/') }}/./img/search.svg" alt="">
                        </a>
                        <div class="drop-form">
                            <input type="text" class="drop-input">
                            <img class="drop-close" src="{{ asset('front/') }}/./img/close.svg" alt="">
                        </div>
                    </form>
                    <ul class="header-top-nav mobile-nav">
                        <li class="nav-item">
                            <a href="#">
                                Policies
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                Careers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                Donation
                            </a>
                        </li>
                    </ul>
                    <ul class="lang mobile-lang">
                       @yield('lang')
                    </ul>
                    <form class="mobile-sign" action="#">
                        <button class="head-btn">
                            Sign in
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>