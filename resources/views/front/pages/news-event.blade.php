@extends('front.layouts.master')

@section('title')
    News-Events
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
<!--News Start-->
<section id="news">
    <div class="container">
        <div class="row">
            <div class="news-events-cards">
                @foreach ($news as $item)
                <div class="new-event-card">
                    <a href="{{ route('news_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                        <img class="news-img" src="{{ asset($item->img) }}" alt="">
                        <span class="card-type">news</span>
                        <h3 class="news_head">
                           {{ $item->translate('title') }}
                        </h3>
                        <p class="news_text">
                            {{ $item->translate('short_desc') }}
                        </p>
                        <div class="news-card-bottom">
                            <span class="news-date">
                                {{ Carbon\Carbon::parse($item->date)->format('d.m.Y') }}
                            </span>
                            <a class="news-link" href="{{ route('news_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                                ətraflı
                                <img src="{{ asset('front/') }}/./img/news-arrow.svg" alt="">
                            </a>
                        </div>
                    </a>
                </div>
                @endforeach

          
            </div>
        </div>
    </div>
</section>
<!--News End-->
<!--Events Start-->
<section id="events" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="news-events-cards">
                @foreach ($events as $item)
                <div class="new-event-card">
                    <a href="{{ route('event_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                        <img class="news-img" src="{{ asset($item->img) }}" alt="">
                        <span class="card-type">news</span>
                        <h3 class="news_head">
                            {{ $item->translate('title') }}
                        </h3>
                        <p class="news_text">
                            {{ $item->translate('short_desc') }}
                        </p>
                        <div class="news-card-bottom">
                            <span class="news-date">
                                {{ Carbon\Carbon::parse($item->date)->format('d.m.Y') }}
                            </span>
                            <a class="news-link" href="{{ route('event_single.'.app()->getLocale(),$item->slug[app()->getLocale()]) }}">
                                ətraflı
                                <img src="{{ asset('front/') }}/./img/news-arrow.svg" alt="">
                            </a>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>
<!--Events End-->
@endsection