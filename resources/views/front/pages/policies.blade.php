@extends('front.layouts.master')

@section('title')
    Policies
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
                        Regulations
                    </a>
                </li>
                <li class="page-item">
                    <a href="javascript:void(0)">
                        Academic Policies
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--Pages End-->
    <!--Regulations Start-->
    <section id="regulations">
        <div class="container">
            <div class="row">
                <h2 class="policies-head">
                    General University Policies
                </h2>
                <table class="polici-table">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Download</th>
                    </tr>
                  @foreach ($general as $item)
                  <tr>
                    <td>{{ $item->translate('name') }}</td>
                    <td>{{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('policies.download',$item->id) }}">
                            <img src="{{ asset('front/') }}/./img/download.svg" alt="">
                        </a>
                    </td>
                </tr>
                  @endforeach
                </table>
                <h2 class="policies-head">
                    Student Accounts and Financial Aid
                </h2>
                <table class="polici-table">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Download</th>
                    </tr>
                    @foreach ($financial as $item)
                    <tr>
                        <td>{{ $item->translate('name') }}</td>
                        <td>{{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('policies.download',$item->id) }}">
                                <img src="{{ asset('front/') }}/./img/download.svg" alt="">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    
                  
                </table>
            </div>
        </div>
    </section>
    <!--Regulations End-->
    <!--Academics Start-->
    <section id="academics-polici" style="display:none;">
        <div class="container">
            <div class="row">
                <h2 class="policies-head">
                    Academic Policies
                </h2>
                <table class="polici-table">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Download</th>
                    </tr>
                    @foreach ($academic as $item)
                    <tr>
                        <td>{{ $item->translate('name') }}</td>
                        <td>{{ Carbon\Carbon::parse($item->date)->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('policies.download',$item->id) }}">
                                <img src="{{ asset('front/') }}/./img/download.svg" alt="">
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </table>
            </div>
        </div>
    </section>
    <!--Academics End-->
    
@endsection