@extends('front.layouts.master')

@section('title')
{{ $akademic->translate('name') }}
@endsection

@section('lang')
@if (App::getLocale()==='az')
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current), $akademic?->slug['en'] ) }}">
        En
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'de', $current),$akademic?->slug['de']) }}">
        De
    </a>
</li>
@elseif(App::getLocale()==='en')
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current),$akademic?->slug['az']) }}">
        Az
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'de', $current) , $akademic?->slug['de']) }}">
        De
    </a>
</li>
@else
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current),$akademic?->slug['az']) }}">
        Az
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current) , $akademic?->slug['en']) }}">
        En
    </a>
</li>    
@endif

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
                        MBA Operations
                        Management
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--Program Start-->
    <section id="program">
        <div class="container">
            <div class="row">
                <div class="leader-block leader-block-2">
                    <div class="thumb-text">
                        <h3 class="about-little-head">
                            {{ $akademic->translate('title') }}
                        </h3>
                        {!! $akademic->translate('desc') !!}
                    </div>
                    <div class="about-images">
                        <div class="bg-big"></div>
                        <div class="about-bg-1"></div>
                        <div class="about-bg-2"></div>
                        <div class="about-bg-3"></div>
                        <img class="about-img-1" src="{{ asset($akademic->img) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Program End-->
@endsection