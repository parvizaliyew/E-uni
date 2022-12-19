@extends('front.layouts.master')

@section('title')
    Graduate
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')

    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/admission.png" alt="">
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
                    <a href="{{ route('u_graduate.'.app()->getLocale()) }}">
                        Undergraduate
                    </a>
                </li>
                <li class="page-item active">
                    <a href="{{ route('graduate.'.app()->getLocale()) }}">
                        Graduate
                    </a>
                </li>
                <li class="page-item">
                    <a href="{{ route('postgraduate.'.app()->getLocale()) }}">
                        Postgraduate
                    </a>
                </li>
                <li class="page-item">
                    <a href="{{ route('international.'.app()->getLocale()) }}">
                        International student
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Pages End-->
    <!--Undergraduate Start-->
    <section id="undergraudate">
        <div class="container">
            <div class="row">
                <div class="bachelor-text">
                    <p class="about-body">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum
                    </p>
                    <p class="about-body">
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia
                    </p>
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
                <div class="undergraduate-blocks post-mobile">
                    <h2 class="about-head">
                        Undergraduate Application Process
                    </h2>
                    <h5 class="under-head">
                        BA Programs ASOIU offers the following programs in undergraduate level:
                    </h5>
                    <div class="under-main-block">
                        <div class="bachelor-text">
                            <p class="about-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum
                            </p>
                            <p class="about-body">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock, a Latin professor at Hampden-Sydney College in Virginia
                            </p>
                            <p class="about-body">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English
                            </p>
                        </div>
                    </div>
                    <div class="leader-block leader-block-2">
                        <div class="thumb-text">
                            <h3 class="page-little-head">
                                Admission
                            </h3>
                            <p class="thumb-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets
                            </p>
                            <p class="thumb-body">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                                McClintock, a Latin professor at Hampden-Sydney College in Virginia
                            </p>
                        </div>
                        <div class="about-images">
                            <div class="bg-big"></div>
                            <div class="about-bg-1"></div>
                            <div class="about-bg-2"></div>
                            <div class="about-bg-3"></div>
                            <img class="about-img-1" src="{{ asset('front/') }}/./img/about-1.png" alt="">
                        </div>
                    </div>
                    <div class="part-text-block">
                        <div class="part-text">
                            <h3 class="page-little-head">
                                Readmission
                            </h3>
                            <p class="about-body">
                                Being the pioneer oil and gas educational school across Europe and Asia, the Azerbaijan
                                State Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU)) was founded
                                in November 1920. During the period of its activities, ASOIU played a special role in
                                developing national education
                            </p>
                            <p class="about-body">
                                Azerbaijan State Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU))
                                was founded in November 1920. During the period of its activities
                            </p>
                        </div>
                        <div class="part-text">
                            <h3 class="page-little-head">
                                Key Dates
                            </h3>
                            <p class="about-body">
                                Being the pioneer oil and gas educational school across Europe and Asia, the Azerbaijan
                                State Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU)) was founded
                                in November 1920. During the period of its activities, ASOIU played a special role in
                                developing national education
                            </p>
                        </div>
                    </div>
                    <div class="under-contact">
                        <h3 class="page-little-head">
                            Fields of Study
                        </h3>
                        <div class="contact-block">
                            <div class="col-4 list-spec">
                                <ul class="specialty-list">
                                    <li class="specialty-item">
                                        Computer Science
                                    </li>
                                    <li class="specialty-item">
                                        Information Technologies
                                    </li>
                                    <li class="specialty-item">
                                        Computer Engineering
                                    </li>
                                    <li class="specialty-item">
                                        Mathematics
                                    </li>
                                    <li class="specialty-item">
                                        Electrical and Electronics Engineering
                                    </li>
                                    <li class="specialty-item">
                                        Business Administration
                                    </li>
                                    <li class="specialty-item">
                                        Economics
                                    </li>
                                    <li class="specialty-item">
                                        Finance
                                    </li>
                                    <li class="specialty-item">
                                        International Studies
                                    </li>
                                    <li class="specialty-item">
                                        Public Affairs
                                    </li>
                                    <li class="specialty-item">
                                        Law
                                    </li>
                                    <li class="specialty-item">
                                        Communication and Digital Media
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <h2 class="contact-head">
                                    Have more questions? Contact us by phone or e-mail.
                                </h2>
                                <p class="location">
                                    <img src="{{ asset('front/') }}/./img/loc-icon2.svg" alt="">
                                    Baku, Azerbaijan, Azadlig Ave. 34
                                </p>
                                <a class="mail" href="mailTo:elnur.guliev01@gmail.com">
                                    <img src="{{ asset('front/') }}/./img/mail-icon2.svg" alt="">
                                    elnur.guliev01@gmail.com
                                </a>
                                <div class="phone-numbers">
                                    <img src="{{ asset('front/') }}/./img/phone-icon2.svg" alt="">
                                    <a href="tel:+994124934538">
                                        (+994) 12 493 4538
                                    </a>
                                    <a href="tel:+994124934538">
                                        (+994) 12 493 4538
                                    </a>
                                </div>
                                <div class="contact-buttons">
                                    <form action="#">
                                        <button class="contact-btn-first contact-btn">
                                            Request Information
                                        </button>
                                    </form>
                                    <form action="#">
                                        <button class="contact-btn">
                                            Apply
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Undergraduate End-->
 
@endsection