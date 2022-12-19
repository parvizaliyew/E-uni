@extends('front.layouts.master')

@section('title')
Accreditation
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')

    <!--Home Start-->
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
                <li class="page-item">
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
                <li class="page-item active">
                    <a href="{{ route('akra.'.app()->getLocale()) }}">
                        Accreditation
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Pages End-->
    <!--Leadership Start-->
    <section id="leadership">
        <div class="container">
            <div class="row">
                <div class="leader-block">
                    <div class="about-images">
                        <div class="bg-big"></div>
                        <div class="about-bg-1"></div>
                        <div class="about-bg-2"></div>
                        <div class="about-bg-3"></div>
                        <img class="about-img-1" src="{{ asset($lider->img) }}" alt="">
                    </div>
                    <div class="thumb-text">
                        <h3 class="thumb-head-1">
                            {{ $lider->translate('position') }}
                        </h3>
                        <h2 class="thumb-head-2">
                            {{ $lider->translate('name') }}
                        </h2>
                        <p class="thumb-body">
                            {{ $lider->translate('desc') }}
                        </p>
                        <div class="thumb-comment">
                            <span>
                                “
                            </span>
                            <p>
                                {{ $lider->translate('short_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Leadership End-->
    <!--Background Start-->
    <section id="background">
        <img class="mission-img" src="{{ asset('front/') }}/./img/history-bg.png" alt="">
    </section>
    <!--Background End-->
    <!--Accreditation Staff Start-->
    <section id="accreditation-staff">
        <div class="container">
            <div class="row">
                <h3 class="page-little-head">
                    Staff
                </h3>
                <p class="accreditation-text">
                    Azerbaijan State Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU)) was founded in November 1920. During the period of its activities
                </p>
                <div class="teacher-cards">
                    @foreach ($staff as $item)
                    <div class="teacher-card">
                        <div class="teacher-card-body">
                            <img src="{{ asset($item->img) }}" alt="">
                            <div class="teacher-textbox">
                                <h4 class="teacher-head">
                                    {{ $item->translate('position') }}
                                </h4>
                                <h4 class="teacher-name">
                                    {{ $item->translate('name') }}
                                </h4>
                            </div>
                        </div>
                        <div class="pop-up">
                            <div class="container">
                                <div class="row">
                                    <div class="container pop-up-container">
                                        <img src="{{ asset('front/') }}/./img/close.svg" alt="" class="close-pop-up">
                                    </div>
                                    <div class="pop-up-main">
                                        <div class="about-images">
                                            <div class="bg-big"></div>
                                            <div class="about-bg-1"></div>
                                            <div class="about-bg-2"></div>
                                            <div class="about-bg-3"></div>
                                            <img class="about-img-1" src="{{ asset($item->img) }}" alt="">
                                        </div>
                                        <div class="thumb-text">
                                            <h3 class="thumb-head-1">
                                                {{ $item->translate('position') }}
                                            </h3>
                                            <h2 class="thumb-head-2">
                                                {{ $item->translate('name') }}
                                            </h2>
                                            <p class="thumb-body">
                                                {{ $item->translate('desc') }}

                                            </p>
                                        </div>
                                    </div>
                                    <a @if ($item->cv)
                                        href="{{ route('download_file',$item->id) }}"
                                        @else
                                            href=""
                                        @endif class="cv-download">
                                        <img src="{{ asset('front/') }}/./img/down.svg" alt="">
                                        Download CV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                     
                </div>
            </div>
        </div>
    </section>
    <!--Accreditation Staff End-->

@endsection