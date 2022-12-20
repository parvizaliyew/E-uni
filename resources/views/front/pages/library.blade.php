@extends('front.layouts.master')

@section('title')
    Library
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')

    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/library.png" alt="">
        <div class="head-bg"></div>
        <div class="background">
            <div class="container">
                <div class="row">
                    <h1 class="page-head-text">
                        Library
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--Library Start-->
    <section id="library">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    ASOIU Library Discovery Tool
                </h2>
                <form class="search-form" action="#">
                    <div class="select">
                        <div class="select-item">
                            <a href="javascript:void(0)">
                                <span id="select">Keyword</span> <img src="{{ asset('front/') }}/./img/library-select.svg" alt="">
                            </a>
                            <ul class="select-dropdown">
                                <li class="select-item">
                                    Keyword1
                                </li>
                                <li class="select-item">
                                    Keyword2
                                </li>
                            </ul>
                        </div>
                        <span class="search-line"></span>
                        <div class="search-book">
                            <input type="text" placeholder="Search the library catalog">
                        </div>
                        <button class="search-btn">
                            Search
                        </button>
                    </div>
                </form>
                <div class="books">
                    <div class="add-date">
                        <a class="active" href="javascript:void(0)">
                            Recommended
                        </a>
                        <a href="javascript:void(0)">
                            Last added
                        </a>
                    </div>
                    <div class="book-list">
                        @foreach ($libraries as $item)
                            @if ($item->aktiv===0)
                            <div class="book-card out-off">
                                <a href="#">
                                    <div class="img-block">
                                        <div class="stock">
                                            <p>Out of stock</p>
                                        </div>
                                        <img src="{{ asset($item->img) }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p class="book-name">
                                            {{ $item->name }}
                                        </p>
                                        <p class="book-author">
                                            {{ $item->author }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @else
                            <div class="book-card">
                                <a href="#">
                                    <div class="img-block">
                                        <div class="stock">
                                            <p>Out of stock</p>
                                        </div>
                                        <img src="{{ asset($item->img) }}" alt="">
                                    </div>
                                    <div class="text">
                                        <p class="book-name">
                                            {{ $item->name }}
                                        </p>
                                        <p class="book-author">
                                            {{ $item->author }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="journals">
                    <h2 class="head-text">
                        Databases, E-Books & Journals
                    </h2>
                    <p class="about-body">
                        To prepare qualified specialists with fundamental and applied knowledge in engineering economy
                        and management, to create an opportunity for them work in governmental and non-governmental
                        enterprises
                    </p>
                    <div class="logo-block">
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/1.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/2.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/3.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/4.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/5.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/6.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/7.svg" alt="">
                        </a>
                        <a href="#">
                            <img src="{{ asset('front/') }}/./img/8.svg" alt="">
                        </a>
                    </div>
                </div>
                <div id="undergraudate" class="library-gallery">
                    <h2 class="head-text">
                        Databases, E-Books & Journals
                    </h2>
                    <p class="about-body">
                        To prepare qualified specialists with fundamental and applied knowledge in engineering economy
                        and management, to create an opportunity for them work in governmental and non-governmental
                        enterprises
                    </p>
                    <div class="about-body lib-social">
                        <a target="_blank" href="https://www.instagram.com/baprogramsasoiu/">
                            www.instagram.com/baprogramsasoiu
                        </a>
                        <a target="_blank" href="https://www.facebook.com/BA.Programs">
                            www.facebook.com/baprogramsasoiu
                        </a>
                    </div>
                    <div class="img-blocks">
                        <div class="img-block">
                            <a href="{{ asset('front/') }}/./img/under-1.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-1.png" alt="">
                            </a>
                        </div>
                        <div class="img-block">
                            <a href="{{ asset('front/') }}/./img/under-2.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-2.png" alt="">
                            </a>
                        </div>
                        <div class="img-block">
                            <a href="{{ asset('front/') }}/./img/under-3.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-3.png" alt="">
                            </a>
                            <a href="{{ asset('front/') }}/./img/under-4.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-4.png" alt="">
                            </a>
                        </div>
                        <div class="img-block">
                            <a href="{{ asset('front/') }}/./img/under-5.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-5.png" alt="">
                            </a>
                        </div>
                        <div class="img-block">
                            <a href="{{ asset('front/') }}/./img/under-6.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-6.png" alt="">
                            </a>
                            <a href="{{ asset('front/') }}/./img/under-7.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-7.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Library End-->


@endsection