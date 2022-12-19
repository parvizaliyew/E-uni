@extends('front.layouts.master')

@section('title')
    E-Uni
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')
    <!--Home Start-->
    <section id="home">
        <!-- <div class="home-slider owl-carousel owl-theme">
            <div class="item">
                <div class="container">
                    <div class="row">
                        <h3 class="slider-little-head">
                            BA Programs
                        </h3>
                        <h2 class="slider-head">
                            BA programs are welcoming master students!
                        </h2>
                        <p class="slider-text">
                            We are pleased to declare the MASTER registration for the 2022/2023 academic year open! Registration will be valid during the given period of time:
                        </p>
                        <form action="#">
                            <button class="main-btn">
                                Learn more
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="swiper mySwiper home-slider">
            <div class="swiper-wrapper">
                @foreach ($sliders as $item)
                <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <h3 class="slider-little-head">
                                BA Programs
                            </h3>
                            <h2 class="slider-head">
                                {{ $item->translate('title') }}
                            </h2>
                            <p class="slider-text">
                                {{ $item->translate('desc') }}
                            </p>
                            <form  action="#">
                                <button class="main-btn">
                                    Learn more
                                </button>
                            </form>
                        </div>
                    </div>
                    <img src="{{ asset('front/') }}/./img/slider-img.png" alt="">
                </div> 
                @endforeach

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--Home End-->
    <!--About Start-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-textbox">
                    <h2 class="about-head">
                        Azerbaijan State Oil and Industry University (ASOIU)
                    </h2>
                    <p class="about-body">
                        Being the pioneer oil and gas educational school across Europe and Asia, the Azerbaijan State
                        Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU)) was founded in November
                        1920. During the period of its activities, ASOIU played a special role in developing national
                        education.
                    </p>
                    <form action="#">
                        <button class="main-btn">
                            About us
                        </button>
                    </form>
                </div>
                <div class="about-images">
                    <div class="bg-big"></div>
                    <div class="about-bg-1"></div>
                    <div class="about-bg-2"></div>
                    <div class="about-bg-3"></div>
                    <img class="about-img-1" src="{{ asset('front/') }}/./img/about-1.png" alt="">
                    <img class="about-img-2" src="{{ asset('front/') }}/./img/about-2.png" alt="">
                    <img class="about-img-3" src="{{ asset('front/') }}/./img/about-3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--About End-->
    <!--Programs Start-->
    <section id="programs">
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    Bachelor Programs
                </h2>
                <div class="program-cards">
                    @foreach ($b_programs as $item)
                    <a href="{{ route('bachelor_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                        <div class="program-card">
                            <h4 class="program-head">
                                {{ $item->translate('name') }}
                            </h4>
                            <img class="program-img" src="{{ asset($item->logo) }}" alt="">
                            <p class="program-line"></p>
                            <p class="program-text">
                                {{ $item->translate('short_desc') }}
                            </p>
                        </div>
                    </a>
                    @endforeach    
                </div>
            </div>
        </div>
    </section>
    <!--Programs End-->
    <!--Study Cards Start-->
    <section id="study">
        <div class="container">
            <div class="row">
                <div class="study-cards">
                    <div class="study-card">
                        <a href="#">
                            <img class="study-img" src="{{ asset('front/') }}/./img/study-card.png" alt="">
                            <div class="study-textbox">
                                <h2 class="study-head">
                                    UNDERGRADUATE
                                </h2>
                                <p class="study-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                </p>
                                <div class="study-arrow">
                                    <p class="study-arrow-text">
                                        more
                                    </p>
                                    <span class="arrow-line"></span>
                                    <img src="{{ asset('front/') }}/./img/study-arrow.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="study-card">
                        <a href="#">
                            <img class="study-img" src="{{ asset('front/') }}/./img/study-card.png" alt="">
                            <div class="study-textbox">
                                <h2 class="study-head">
                                    UNDERGRADUATE
                                </h2>
                                <p class="study-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                </p>
                                <div class="study-arrow">
                                    <p class="study-arrow-text">
                                        more
                                    </p>
                                    <span class="arrow-line"></span>
                                    <img src="{{ asset('front/') }}/./img/study-arrow.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="study-card">
                        <a href="#">
                            <img class="study-img" src="{{ asset('front/') }}/./img/study-card.png" alt="">
                            <div class="study-textbox">
                                <h2 class="study-head">
                                    UNDERGRADUATE
                                </h2>
                                <p class="study-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                </p>
                                <div class="study-arrow">
                                    <p class="study-arrow-text">
                                        more
                                    </p>
                                    <span class="arrow-line"></span>
                                    <img src="{{ asset('front/') }}/./img/study-arrow.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="study-card">
                        <a href="#">
                            <img class="study-img" src="{{ asset('front/') }}/./img/study-card.png" alt="">
                            <div class="study-textbox">
                                <h2 class="study-head">
                                    UNDERGRADUATE
                                </h2>
                                <p class="study-body">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                </p>
                                <div class="study-arrow">
                                    <p class="study-arrow-text">
                                        more
                                    </p>
                                    <span class="arrow-line"></span>
                                    <img src="{{ asset('front/') }}/{{ asset('front/') }}/./img/study-arrow.svg" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Study Cards End-->
    <!--Students Start-->
    <section id="student">
        <div class="container">
            <div class="row">
                <div class="thumb-images">
                    <img class="thumb-1" src="{{ asset('front/') }}/./img/thumb-1.png" alt="">
                    <img class="thumb-2" src="{{ asset('front/') }}/./img/thumb-2.png" alt="">
                    <img class="thumb-3" src="{{ asset('front/') }}/./img/thumb-3.png" alt="">
                    <img class="thumb-4" src="{{ asset('front/') }}/./img/thumb-4.png" alt="">
                    <img class="thumb-5" src="{{ asset('front/') }}/./img/thumb-1.png" alt="">
                </div>
                <div class="thumb-text">
                    <h3 class="thumb-head-1">
                        Business Analyst at McKinsey's/ BBA 2020
                    </h3>
                    <h2 class="thumb-head-2">
                        Arzu Huseynzade
                    </h2>
                    <p class="thumb-body">
                        Being the pioneer oil and gas educational school across Europe and Asia, the Azerbaijan State
                        Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU)) was founded in November
                        1920. During the period of its activities, ASOIU played a special role in developing national
                        education.
                    </p>
                    <div class="thumb-comment">
                        <span>
                            “
                        </span>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Students End-->
    <!--Counter Start-->
    <section id="counter">
        <div class="counter-box">
            <img src="{{ asset('front/') }}/./img/counter-img.png" alt="">
            <div class="counter-text">
                <div class="container">
                    <div class="row">
                        <ul class="counter">
                            <li>
                                <span class="count percent" data-count="{{ $counter->student }}">
                                    0
                                </span>
                                <p class="counter-box-text">
                                    Student
                                </p>
                            </li>
                            <li>
                                <span class="count percent" data-count="{{ $counter->faculty }}">
                                    0
                                </span>
                                <p class="counter-box-text">
                                    Faculty
                                </p>
                            </li>
                            <li>
                                <span class="count percent" data-count="{{ $counter->country }}">
                                    0
                                </span>
                                <p class="counter-box-text">
                                    Country
                                </p>
                            </li>
                            <li>
                                <span class="count percent interest" data-count="{{ $counter->alumni_employet }}">
                                    0
                                </span>
                                <p class="counter-box-text">
                                    Alumni Employet
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter End-->
    <!--News Start-->
    <section id="news">
        <div class="container">
            <div class="row">
                <h2 class="page-head">
                    News & Event
                </h2>
                <div class="news-events">
                    <div class="big-card">
                        <a href="{{ route('event_single.'.app()->getLocale(),$event->slug[app()->getLocale()]) }}">
                            <img class="card-img" src="{{ asset($event->img) }}" alt="">
                            <p class="type">
                                EVENT
                            </p>
                            <h3 class="news-head">
                                {{ $event->translate('title') }}
                            </h3>
                            <p class="news-text">
                                {{ $event->translate('short_desc') }}
                            </p>
                            <div class="news-bottom">
                                <p class="date">
                                    {{ Carbon\Carbon::parse($event->date)->format('d.m.Y') }}
                                </p>
                                <a href="{{ route('event_single.'.app()->getLocale(),$event->slug[app()->getLocale()]) }}" class="next">
                                    ətraflı
                                    <img src="{{ asset('front/') }}/./img/next-arrow.svg" alt="">
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="news-block">
                       @foreach ($events as $item)
                       <div class="little-card">
                        <a href="{{ route('event_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                            <img class="card-img" src="{{ asset($item->img) }}" alt="">
                            <p class="type">
                                Events
                            </p>
                            <a href="{{ route('event_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}" class="next">
                                ətraflı
                                <img src="{{ asset('front/') }}/./img/next-arrow.svg" alt="">
                            </a>
                            <h3 class="news-head">
                                Special concert dedicated to 100th birth anniversary of the prominent composer Rauf Hajiyev
                            </h3>
                            <div class="news-bottom">
                                <p class="date">
                                    {{ Carbon\Carbon::parse($item->date)->format('d.m.Y') }}
                                </p>
                            </div>
                        </a>
                    </div>
                       @endforeach 
                    </div>
                    <div class="news-block">
                        @foreach ($news as $item)
                        <div class="little-card">
                            <a href="{{ route('news_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                                <img class="card-img" src="{{ asset($item->img) }}" alt="">
                                <p class="type">
                                    NEWS
                                </p>
                                <a href="{{ route('news_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}" class="next">
                                    ətraflı
                                    <img src="{{ asset('front/') }}/./img/next-arrow.svg" alt="">
                                </a>
                                <h3 class="news-head">
                                    {{ $item->translate('title') }}
                                </h3>
                                <div class="news-bottom">
                                    <p class="date">
                                        {{ Carbon\Carbon::parse($item->date)->format('d.m.Y') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Start-->
    <!--Social Start-->
    <section id="social">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme social-slider">
                   @foreach ($galeries as $item)
                   <div class="item">
                    <a target="_blank" href="{{ $item->link }}">
                        <img src="{{ asset($item->img) }}" alt="">
                    </a>
                </div>
                   @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--Social End-->
  
@endsection