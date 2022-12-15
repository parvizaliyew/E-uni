@extends('front.layouts.master')

@section('title')
PhD Degree
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
                <li class="page-item">
                    <a href="{{ route('master.'.app()->getLocale()) }}">
                        Master degree
                    </a>
                </li>
                <li class="page-item active">
                    <a href="{{ route('phd.'.app()->getLocale()) }}">
                        PhD
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Pages End-->
    <!--Degree Start-->
    <section id="degree">
        <div class="container">
            <div class="row">
                <div class="bachelor-text">
                    <p class="about-body">
                        The “MASTER OF BUSINESS ADMINISTRATION (MBA)” PROGRAM was founded in 1998 based on the joint
                        project “Partnership to Develop the Master of Business Administration Program and Faculty
                        capabilities” between the Azerbaijan State Oil Academy (now Azerbaijan State Oil and Industry
                        University) and Georgia State University of USA
                    </p>
                    <p class="about-body">
                        The Master of Business Administration (MBA) Program is one of the most prestigious systems of
                        higher economic education in the world. The characteristic of the MBA Program is such that those
                        who are admitted do not necessarily need a BBA or its equivalent in economics. All who have a
                        bachelor's degree in either humanitarian or technical profiles with minimum two years of working
                        experience have an opportunity to become educated in the field of business administration. Each
                        person who graduates from the MBA Program will have a universal education as well as an ability
                        to manage the business in every field
                    </p>
                </div>
            </div>
        </div>
        <!--Degree End-->
        <!--Programs Start-->
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    BA Programs / University of Siegen
                </h2>
                <h5 class="under-head">
                    Majors based on the corporation with the University of Siegen and Azerbaijan State Oil and Industry
                    University/ BA programs
                </h5>
                <div class="program-cards phd">
                    @foreach ($phd1 as $item)
                    <a href="{{ route('phd_single.'.app()->getLocale(),$item->slug[app()->getlocale()]) }}">
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
        <!--Programs End-->
        <!--Programs Start-->
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    BA Programs /  Georgia State University
                </h2>
                <h5 class="under-head">
                    Majors based on the corporation with the University of Siegen and Azerbaijan State Oil and Industry
                    University/ BA programs
                </h5>
                <div class="program-cards phd">
                    @foreach ($phd2 as $item)
                    <a href="{{ route('phd_single.'.app()->getLocale(),$item->slug[app()->getlocale()]) }}">
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
        <!--Programs End-->
    </section>
@endsection