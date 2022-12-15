@extends('front.layouts.master')

@section('title')
Bachelor Degree
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')

    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/academics-1.png" alt="">
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
                    <a href="{{ route('bachelor.'.app()->getLocale()) }}">
                        Bachelor degree
                    </a>
                </li>
                <li class="page-item">
                    <a href="#">
                        Master degree
                    </a>
                </li>
                <li class="page-item">
                    <a href="#">
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
                        {{ __('lang.bachelor_degree_1') }}
                    </p>
                    <p class="about-body">
                        To prepare qualified specialists with fundamental and applied knowledge in engineering economy
                        and management, to create an opportunity for them work in governmental and non-governmental
                        enterprises
                    </p>
                    <p class="about-body">
                        To tan the graduate's abilities and skills to work in a team and make justified decisions
                    </p>
                    <p class="about-body">
                        According to decision from the 9th of January 1997 of Cabinet of Ministers of AR About the list
                        of specialities and directions of the Higher and Secondary Education to confer bachelor degree
                        to the graduates mastered the whole program
                    </p>
                    <p class="about-body">
                        To raise the level of professor-lecturer staff, retrain them and improve knowledge and
                        experience of administrative workers and auxiliary staff for bachelor preparing on business
                        management and mechatronics specialities
                    </p>
                    <p class="about-body">
                        Professor lecturer staff of ZU and ASOIU to carry out together scientific research works on
                        business engineering, mechatronics problems meeting update international requirements, apply
                        investigation results in education systems and publish them in the advanced scientific press
                    </p>
                </div>
            </div>
        </div>
        <!--Degree End-->
        <!--Programs Start-->
        <div class="container">
            <div class="row">
                <h2 class="head-text">
                    Bachelor Programs
                </h2>
                <h5 class="under-head">
                    PARTNERSHIP PROGRAM WITH SIEGEN UNIVERSITY OF GERMANY
                </h5>
                <div class="program-cards">
                    @foreach ($bachelors as $item)
                    <a href="#">
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


@endsection