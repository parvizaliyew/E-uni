@extends('front.layouts.master')

@section('title')
History
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')
<section id="page-head">
    <img src="{{ asset('front/') }}/./img/history-bg.png" alt="">
    <div class="head-bg"></div>
    <div class="background">
        <div class="container">
            <div class="row">
                <h1 class="page-head-text">
                    BA Programs ASOIU
                </h1>
            </div>
        </div>
    </div>
</section>
<!--Home End-->
<!--Pages Start-->
<div id="pages">
    <div class="container">
        <ul class="pages">
            <li class="page-item active">
                <a href="{{ route('history.'.app()->getLocale()) }}">
                    History
                </a>
            </li>
            <li class="page-item">
                <a href="{{ route('about.'.app()->getLocale()) }}">
                    About BA Programs
                </a>
            </li>
            <li class="page-item">
                <a href="{{ route('lid_heyet.'.app()->getLocale()) }}">
                    Leadership & Staff
                </a>
            </li>
            <li class="page-item">
                <a href="{{ route('akra.'.app()->getLocale()) }}">
                    Accreditation
                </a>
            </li>
        </ul>
    </div>
</div>
<!--Pages End-->
<!--Page start-->
<section id="history">
    <div class="container">
        <div class="row">
            <div class="about-textbox">
                <h2 class="about-head">
                  {{ __('lang.history_title') }}
                </h2>
                <p class="about-body">
                    {{ __('lang.history_desc') }} 
                </p>
                <button class="main-btn show-more">
                    {{ __('lang.show_more') }} 
                </button>
                <div class="pop-up">
                    <div class="container">
                        <div class="row">
                            <div class="pop-up-main">
                                <img src="{{ asset('front/') }}/./img/close.svg" alt="" class="close-pop-up">
                                <h2 class="pop-up-head">
                                    {{ __('lang.history_title_popup') }}
                                </h2>
                                <div class="pop-up-body">
                                    <p class="pop-up-text">
                                        {{ __('lang.hostory_desc_popup_1') }} 
                                    </p>
                                    <p class="pop-up-text">
                                        {{ __('lang.hostory_desc_popup_2') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-images history-img">
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
<!--Page end-->
<!--Page mission Start-->
<section id="mission">
    <img class="mission-img" src="{{ asset('front/') }}/./img/history-bg.png" alt="">
    <div class="container">
        <div class="row">
            <div class="mission">
                <h3 class="page-little-head">
                    {{ __('lang.mission') }}
                </h3>
                <p class="about-body">
                    {{ __('lang.mission_desc_1') }}
                </p>
                <p class="about-body">
                    {{ __('lang.mission_desc_2') }}
                </p>
            </div>
            <div class="vision">
                <h3 class="page-little-head">
                    {{ __('lang.vizion') }}
                </h3>
                <p class="about-body">
                    {{ __('lang.vizion_desc') }}
                </p>
            </div>
        </div>
    </div>
</section>
<!--Page mission End-->
<!--Logos Start-->
<section id="logos">
    <div class="container">
        <div class="row">
            <ul class="logos">
                @foreach ($partners as $item)
                <li class="logo-item">
                    <a href="#">
                        <img src="{{ asset($item->img) }}" alt="">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--Logos End-->
@endsection