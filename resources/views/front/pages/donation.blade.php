@extends('front.layouts.master')

@section('title')
Donation
@endsection
@section('lang')
@include('front.layouts.lang')
@endsection
@section('content')
    
    <!--Home Start-->
    <section id="page-head">
        <img src="{{ asset('front/') }}/./img/donation.png" alt="">
        <div class="head-bg"></div>
        <div class="background">
            <div class="container">
                <div class="row">
                    <h1 class="page-head-text">
                        Donation
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!--Home End-->
    <!--Donations Start-->
    <section id="about" class="donations donate">
        <div class="container">
            <div class="row">
                <div class="about-textbox donate">
                    <h2 class="about-head">
                        Azerbaijan State Oil and Industry University (ASOIU)
                    </h2>
                    <p class="about-body">
                        Being the pioneer oil and gas educational school across Europe and Asia, the Azerbaijan State
                        Oil Academy (now Azerbaijan State Oil and Industry University (ASOIU)) was founded in November
                        1920. During the period of its activities, ASOIU played a special role in developing national
                        education.
                    </p>
                    <form action="#">
                        <button class="main-btn">
                            About us
                        </button>
                    </form>
                </div>
                <div class="about-images">
                    <div class="bg-big"></div>
                    <div class="about-bg-1"></div>
                    <div class="about-bg-2"></div>
                    <div class="about-bg-3"></div>
                    <img class="about-img-2" src="{{ asset('front/') }}/./img/about-2.png" alt="">
                    <img class="about-img-3" src="{{ asset('front/') }}/./img/about-3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Donations End-->
    <!--Donations Form Start-->
    <section id="donate-form">
        <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('donation_post') }}">
                    @csrf
                    <h3 class="contact-head-red">
                        Donate now — Online donations
                    </h3>
                    <input type="text" name="name" class="contact-input" placeholder="Name, Surname*">
                    @error('name')
                    <span class="text-danger mt-2">{{ __('lang.name_required') }}</span> <br>
                    @enderror

                    <input type="text" name="company_name" class="contact-input" placeholder="Company name">
                    @error('company_name')
                    <span class="text-danger mt-2">{{ __('lang.company_required') }}</span> <br>
                    @enderror

                    <input type="text" name="email" class="contact-input" placeholder="E-mail*">
                    @error('email')
                    <span class="text-danger mt-2">{{ __('lang.email_required') }}</span> <br>
                    @enderror
                    
                    <textarea  class="contact-textarea" placeholder="Message*" name="msj" id="" cols="30"
                        rows="10"></textarea>
                    @error('msj')
                    <span class="text-danger mt-2">{{ __('lang.msj_required') }}</span> <br>
                    @enderror
                    <button type="submit" class="contact-btn">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!--Donations Form End-->
    <!--List Start-->
    <section id="donate-list">
        <div class="container">
            <div class="row">
                <h2 class="policies-head">
                    Donations
                </h2>
                <table class="polici-table">
                    <tr>
                        <th>Name</th>
                        <th>Donations</th>
                        <th>Date</th>
                        <th>Image</th>
                    </tr>
                    @foreach ($donations as $item)
                    <tr>

                        <td>{{ $item->translate('name') }}</td>
                        <td>{{ $item->translate('donation_name') }}</td>
                        <td>{{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                        </td>
                        <td>
                            <a data-fancybox="group" href="{{ asset($item->img) }}">
                                <img src="{{ asset('front') }}/./img/donate-icon.svg" alt="">
                            </a>
                        </td>

                    </tr>
                    @endforeach             
                </table>
            </div>
        </div>
    </section>
    <!--List End-->

@endsection