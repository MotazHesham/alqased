@extends('layouts.frontend')

@section('content')
    <!--==============================
            Breadcumb
        ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
            About Area
        ==============================-->
    <section class="space-top space-extra-bottom z-index-common overflow-hidden">
        <div class="about-overlay--style2 position-absolute start-0 bottom-0">
            <img src="{{ asset('assets/img/main_bg.png') }}" alt="about">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="title-area text-center">
                        <span class="sec-icon">
                            <img src="{{ asset('assets/img/icons/logo-icon.png') }}" alt="icon">
                        </span>
                        <span class="sec-subtitle2">Welcome To AlQased</span>
                        <h2 class="sec-title">
                            Al-Qased Elevators & Escalators Co.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row gx-60">
                <div class="col-lg-4">
                    <div class="img-box1--style2">
                        <img src="{{ asset('assets/img/About_pic.png') }}" />

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-content just ">
                        <span class="sec-subtitle5">WHO WE ARE?</span>
                        {!! $setting->who_we_are_more !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
        Client Area
    ==============================-->
    <section class="client--layout1 space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="title-area text-center">
                        <span class="sec-icon">
                            <img src="{{ asset('assets/img/icons/logo-icon.png') }}" alt="icon" />
                        </span>
                        <span class="sec-subtitle2">CLIENTS REVIEWS</span>
                        <h2 class="sec-title">
                            OUR TRUSTED FROM OVER 1,500 CLIENTS
                        </h2>
                    </div>
                </div>
            </div>
            <div class="vs-carousel row" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true"
                data-md-dots="true" data-slide-show="2" data-lg-slide-show="2" data-md-slide-show="1" data-sm-slide-show="1"
                data-xs-slide-show="1" data-center-mode="true">
                @foreach($client_reviews as $raw)
                    <div class="col">
                        <div class="client-block--style">
                            <div class="client-block__shape position-absolute end-0 top-0 z-index-n1"></div>
                            <div class="client-block__header">
                                <div class="client-block__avatar">
                                    <img src="{{ $raw->image ? $raw->image->getUrl() : '' }}" alt="client" />
                                </div>
                                <div class="client-block__info">
                                    <h3 class="client-block__name">
                                        {{ $raw->name ?? '' }}
                                    </h3>
                                    <span class="client-block__designation">General manager</span>
                                    <div class="client-block__ratings">
                                        <ul>
                                            @for($i = 0 ; $i < $raw->rate ; $i++)
                                                <li><i class="fas fa-star"></i></li>
                                            @endfor 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p class="client-block__text">
                                To my mind, the greatest reward for any
                                renovation being able to experience the
                                transformation from end. enjoy getting to see
                                how a renovation can go to a reality and lead to
                                an elevated mood.
                            </p>
                        </div>
                    </div> 
                @endforeach
            </div>
        </div>
    </section>
    <!--==============================
@endsection
