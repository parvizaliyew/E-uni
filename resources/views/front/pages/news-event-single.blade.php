@extends('front.layouts.master')

@section('title')
    News-Events
@endsection

@section('lang')
@if (App::getLocale()==='az')
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current), $newsevent->slug['en'] ) }}">
        En
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'de', $current),$newsevent->slug['de']) }}">
        De
    </a>
</li>
@elseif(App::getLocale()==='en')
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current),$newsevent->slug['az']) }}">
        Az
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'de', $current) , $newsevent->slug['de']) }}">
        De
    </a>
</li>
@else
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'az', $current),$newsevent->slug['az']) }}">
        Az
    </a>
</li>
<span></span>
<li class="lang-item">
    <a href="{{ route(str_replace(app()->getLocale(), 'en', $current) , $newsevent->slug['en']) }}">
        En
    </a>
</li>    
@endif

@endsection

@section('content')

<section id="page-head">
    <img src="./img/news-bg.png" alt="">
    <div class="head-bg"></div>
    <div class="background">
        <div class="container">
            <div class="row">
                <h1 class="page-head-text">
                    News & Events
                </h1>
            </div>
        </div>
    </div>
</section>
<!--Home End-->
<!--Pages Start-->
<div id="pages">
    <div class="container">
        <ul class="pages polici-pages">
            <li class="page-item active">
                <a href="javascript:void(0)">
                    News
                </a>
            </li>
            <li class="page-item">
                <a href="javascript:void(0)">
                    Events
                </a>
            </li>
        </ul>
    </div>
</div>
<!--Pages End-->
<!--News Single Start-->
<section id="news-single">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="single-part">
                    <span class="card-type">
                    @if ($newsevent->type==1)
                    News
                    @else
                    Event
                    @endif    
                    </span>
                    <span class="news-date">
                        {{ Carbon\Carbon::parse($newsevent->date)->format('d.m.Y') }}
                    </span>
                </div>
                <h3 class="news_head">
                    {{ $newsevent->translate('title') }}
                </h3>
                <p class="news-single-text">
                   {!! $newsevent->translate('desc') !!}
                </p>
                
            </div>
            <div class="col-5">
                <img src="{{ asset($newsevent->img) }}" alt="">
            </div>
        </div>
    </div>
</section>
<!--News Single End-->
<!--Footer Start-->

@endsection