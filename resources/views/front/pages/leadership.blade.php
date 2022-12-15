@extends('front.layouts.master')

@section('title')
    E-Uni
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
                <a href="#">
                    History
                </a>
            </li>
            <li class="page-item">
                <a href="#">
                    About BA Programs
                </a>
            </li>
            <li class="page-item active">
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
<!--Little Page Start-->
<section id="little-pages">
    <div class="container">
        <div class="row">
            <ul class="little-pages">
                <li class="little-item active">
                    <a href="javascript:void(0)">
                        Leadership
                    </a>
                </li>
                <li class="little-item">
                    <a href="javascript:void(0)">
                        Teacher
                    </a>
                </li>
                <li class="little-item">
                    <a href="javascript:void(0)">
                        Staff
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Little Page End-->
<!--Leadership Start-->
<section id="leadership">
    <div class="container">
        <div class="row">
            @foreach ($liders as $key=>$val) 
            @if ($key%2==0)
            <div class="leader-block">
                <div class="about-images">
                    <div class="bg-big"></div>
                    <div class="about-bg-1"></div>
                    <div class="about-bg-2"></div>
                    <div class="about-bg-3"></div>
                    <img class="about-img-1" src="{{ asset($val->img) }}" alt="">
                </div>
                <div class="thumb-text">
                    <h3 class="thumb-head-1">
                        {{ $val->translate('position') }}
                    </h3>
                    <h2 class="thumb-head-2">
                        {{ $val->translate('name') }}
                    </h2>
                    <p class="thumb-body">
                        {{ $val->translate('desc') }}
                    </p>
                    <div class="thumb-comment">
                        <span>
                            “
                        </span>
                        <p>
                            {{ $val->translate('short_desc') }}
                        </p>
                    </div>
                </div>
            </div>
            @else
            <div class="leader-block leader-block-2">
                <div class="thumb-text">
                    <h3 class="thumb-head-1">
                        {{ $val->translate('position') }}
                    </h3>
                    <h2 class="thumb-head-2">
                        {{ $val->translate('name') }}
                    </h2>
                    <p class="thumb-body">
                        {{ $val->translate('desc') }}
                    </p>
                    <div class="thumb-comment">
                        <span>
                            “
                        </span>
                        <p>
                            {{ $val->translate('short_desc') }}
                        </p>
                    </div>
                </div>
                <div class="about-images">
                    <div class="bg-big"></div>
                    <div class="about-bg-1"></div>
                    <div class="about-bg-2"></div>
                    <div class="about-bg-3"></div>
                    <img class="about-img-1" src="{{ asset($val->img) }}" alt="">
                </div>
            </div>
            @endif
           
           
            @endforeach


        </div>
    </div>
</section>
<!--Leadership End-->
<!--Teacher Start-->
<section id="teacher" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="teacher-cards">
                @foreach ($teachers as $item)
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
                                    <img src="./img/close.svg" alt="" class="close-pop-up">
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
                                <a 
                                @if ($item->cv)
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
<!--Teacher End-->
<!--Staff Start-->
<section id="staff" style="display: none;">
    <div class="container">
        <div class="row">
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
                                <a  @if ($item->cv)
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
<!--Staff End-->

@endsection