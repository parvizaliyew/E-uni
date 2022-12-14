@extends('front.layouts.master')

@section('title')
    Alumni
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')

    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/alumni.png" alt="">
        <div class="head-bg"></div>
        <div class="background">
            <div class="container">
                <div class="row">
                    <h1 class="page-head-text">
                        Alumni
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--Alumni Start-->
    <section id="alumni">
        <div class="container">
            <div class="row">
                <div class="leader-block leader-block-2">
                    <div class="thumb-text vid-text">
                        <h3 class="about-little-head">
                            MBA with a major in Operations Management
                        </h3>
                        <p class="thumb-body">
                            Operations Management (OM) focuses on the management of resources and activities that
                            produce and deliver the goods and services for customers. OM can play a critical role in
                            enhancing a company’s competitive position by providing superior products and services
                        </p>
                        <p class="thumb-body">
                            Operations Management is a major for students who wish to be involved in the management of
                            the operations process, i.e. the process of manufacturing, service delivery, distribution,
                            and supply
                        </p>
                        <p class="thumb-body">
                            The major in OM provides a framework for linking all functional areas with specific skills
                            developed for OM. The major also provides an in-depth analysis of operations decisions such
                            as new product development, project planning and control, supply chain analysis, quality
                            assurance, project and process management techniques, and production systems planning
                        </p>
                    </div>
                    <div class="about-images alumni-vid">
                        <div class="bg-big"></div>
                        <div class="about-bg-1"></div>
                        <div class="about-bg-2"></div>
                        <div class="about-bg-3"></div>
                        <a data-fancybox href="https://www.youtube.com/watch?v=AC1cREPIw_o&amp">
                            <img class="about-img-1" src="{{ asset('front/') }}/./img/about-1.png" alt="">
                            <img class="vid-icon" src="{{ asset('front/') }}/./img/vid-icon.svg" alt="">
                        </a>
                    </div>
                </div>
                <!--Gallery Start-->
                <div id="undergraudate">
                    <div class="img-blocks">
                        <div class="img-block">
                            <a href="{{ asset('front/') }}/./img/under-1.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-1.png" alt="">
                            </a>
                        </div>
                        <div class="img-block">
                            <a href="./img/under-2.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-2.png" alt="">
                            </a>
                        </div>
                        <div class="img-block">
                            <a href="./img/under-3.png" data-fancybox="group">
                                <img src="{{ asset('front/') }}/./img/under-3.png" alt="">
                            </a>
                            <a href="./img/under-4.png" data-fancybox="group">
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
                <!--Gallery End-->
                <!--Our Alumni Start-->
                <div class="our-alumni post-mobile">
                    <h2 class="head-text">
                        Our Alumni
                    </h2>
                    <p class="about-body">
                        Azerbaijan State Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU)) was
                        founded in November 1920. During the period of its activities
                    </p>
                </div>
                <!--Our Alumni End-->
                <!--Staff Start-->
                <div class="alumni">
                    @foreach ($alumnis as $item)
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
                                <a class="staff-icon" target="_blank" href="{{ $item->ln }}">
                                    <img src="{{ asset('front/') }}/./img/linkedin-icon.svg" alt="">
                                </a>
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
                                                Being the pioneer oil and gas educational school across Europe and
                                                Asia, the Azerbaijan State
                                                Oil Academy (now Azerbaijan State Oil and Industry University
                                                (ASOIU)) was founded in November
                                                1920. During the period of its activities, ASOIU played a special
                                                role in developing national
                                                education.
                                            </p>
                                        </div>
                                    </div>
                                    <a href="#" class="cv-download">
                                        <img src="{{ asset('front/') }}/./img/down.svg" alt="">
                                        Download CV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--Staff End-->
            </div>
        </div>
    </section>
    <!--Alumni End-->
    <!--Students Start-->
    <section id="student">
        <div class="container">
            <div class="row">
                <div class="thumb-images">
                    <img class="thumb-1" src="{{ asset('front') }}/./img/thumb-1.png" alt="">
                    <img class="thumb-2" src="{{ asset('front') }}/./img/thumb-2.png" alt="">
                    <img class="thumb-3" src="{{ asset('front') }}/./img/thumb-3.png" alt="">
                    <img class="thumb-4" src="{{ asset('front') }}/./img/thumb-4.png" alt="">
                    <img class="thumb-5" src="{{ asset('front') }}/./img/thumb-1.png" alt="">
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
    <!--Footer Start-->
  
@endsection