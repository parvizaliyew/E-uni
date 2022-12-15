@extends('front.layouts.master')

@section('title')
    Contact
@endsection

@section('lang')
@include('front.layouts.lang')
@endsection

@section('content')

    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/contact.png" alt="">
        <div class="head-bg"></div>
        <div class="background">
            <div class="container">
                <div class="row">
                    <h1 class="page-head-text">
                        {{ __('lang.contact') }}
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--Contact Start-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h3 class="contact-head">
                        {{ __('lang.information') }}
                    </h3>
                    <p class="location">
                        <img src="{{ asset('front/') }}/./img/loc-icon.svg" alt="">
                        {{ $setting->translate('adress') }}
                    </p>
                    <a class="mail" href="mailTo:elnur.guliev01@gmail.com">
                        <img src="{{ asset('front/') }}/./img/mail-icon.svg" alt="">
                        {{ $setting->email }}
                    </a>
                    <div class="phone-numbers">
                        <img src="{{ asset('front/') }}/./img/phone-icon.svg" alt="">
                        <a target="__blank" href="tel:{{ str_replace(' ','',$setting->phone_1) }}">
                            {{ $setting->phone_1 }}
                        </a>
                        <a target="__blank" href="tel:{{ str_replace(' ','',$setting->phone_2) }}">
                            {{ $setting->phone_2 }}
                        </a>
                    </div>
                    <div class="follow">
                        <p class="follow-text">
                            {{ __('lang.follow_us') }}
                        </p>
                        <a target="__blank" href="{{ $setting->ins }}">
                            <img src="{{ asset('front/') }}/./img/insta-icon.svg" alt="">
                        </a>
                        <a target="__blank" href="{{ $setting->fb }}">
                            <img src="{{ asset('front/') }}/./img/face-icon.svg" alt="">
                        </a>
                        <a target="__blank" href="{{ $setting->tw }}">
                            <img src="{{ asset('front/') }}/./img/twit-icon.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="contact-head-red">
                        {{ __('lang.get_in_touch') }}
                    </h3>
                    <p class="contact-text">
                        {{ __('lang.message_bellow') }}
                    </p>
                    <form method="POST" action="{{ route('contact_post') }}">
                        @csrf
                        <input class="contact-input" name="name" type="text" placeholder="{{ __('lang.name_surname') }}">
                        @error('name')
                        <span class="text-danger mt-2">{{ __('lang.name_required') }}</span> <br>
                        @enderror
                        <input class="contact-input" name="email" type="email" placeholder="{{ __('lang.email') }}">
                        @error('email')
                        <span class="text-danger mt-2">{{ __('lang.email_required') }}</span> <br>
                        @enderror
                        <input class="contact-input" name="subject" type="text" placeholder="{{ __('lang.subject') }}">
                        @error('subject')
                        <span class="text-danger mt-2">{{ __('lang.subject_required') }}</span> <br>
                        @enderror
                        <textarea class="contact-textarea" name="msj" cols="30" rows="10" placeholder="{{ __('lang.message') }}"></textarea>
                        @error('msj')
                        <span class="text-danger mt-2">{{ __('lang.msj_required') }}</span> <br>
                        @enderror
                        <button type="submit" class="contact-btn">{{ __('lang.send') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->
 
@endsection