@extends('front.layouts.master')

@section('title')
Master degree
@endsection
@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')
    
    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/master.png" alt="">
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
                    <a href="{{ route('bachelor.'.app()->getLocale()) }}">
                        Bachelor degree
                    </a>
                </li>
                <li class="page-item active">
                    <a href="{{ route('master.'.app()->getLocale()) }}">
                        Master degree
                    </a>
                </li>
                <li class="page-item">
                    <a href="{{ route('phd.'.app()->getLocale()) }}">
                        PhD
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Pages End-->
    <!--Degree Start-->
    <section id="degree" class="master-degree">
        <div class="container">
            <div class="row">
                <div class="bachelor-text">
                    <p class="about-body">
                        {{ __('lang.master_deegre_1') }}
                    </p>
                    <p class="about-body">
                        {{ __('lang.master_deegre_2') }}
                    </p>
                    <p class="about-body">
                        {{ __('lang.master_deegre_3') }}
                    </p>
                    <p class="about-body">
                        {{ __('lang.master_deegre_4') }}
                    </p>
                    <p class="about-body">
                        {{ __('lang.master_deegre_5') }}
                    </p>
                    <p class="about-body">
                        {{ __('lang.master_deegre_6') }}
                    </p>
                </div>
            </div>
        </div>
        <!--Degree End-->
        <!--Programs Start-->
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    The Master Programs
                </h2>
                <div class="program-cards">
                    @foreach ($masters as $item)
                    <a href="{{ route('master_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                        <div class="program-card">
                            <h4 class="program-head">
                                {{ $item->translate('name') }}
                            </h4>
                            <img class="program-img"src="{{ asset($item->logo) }}" alt="">
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
@endsection