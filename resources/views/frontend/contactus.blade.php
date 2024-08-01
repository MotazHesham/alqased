@extends('layouts.frontend')

@section('content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">CONTACT US</h1> 
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li>CONTACT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        Contact Area
        ==============================-->
    <div class="contact space-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="title-area text-center">
                        <span class="sec-icon">
                            <img src="{{ asset('assets/img/icons/logo-icon.png') }}" alt="icon">
                        </span>
                        <span class="sec-subtitle2">KEEP IN TOUCH</span>
                        <h2 class="sec-title">PLEASE DO NOT HESITATE TO CONTACT US</h2>
                    </div>
                </div>
            </div>
            <div class="contact__wrapper">
                <div class="row gx-60">
                    <div class="col-lg-7">
                        <form action="{{ route('frontend.contactus.store') }}" method="post" class="form--contact z-index-common">
                            @csrf
                            <h2 class="sec-title">SEND US A MESSAGE</h2>
                            <p class="sec-text">Feel some love, to see what we can do...</p>
                            
                            @if(session('message'))
                                <div class="row mb-2">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                                    </div>
                                </div>
                            @endif
                            <div class="row gx-20">
                                <div class="col-12 col-md-8 col-lg-12 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Complete Name"
                                        required>
                                    <div class="form-icon">
                                        <img src="{{ asset('assets/img/icons/ct-icon-1.svg') }}" alt="ct icon 1">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-12 form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email Address"
                                        required>
                                    <div class="form-icon">
                                        <img src="{{ asset('assets/img/icons/ct-icon-2.svg') }}" alt="ct icon 1">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-12 form-group">
                                    <input name="phone" type="text" class="form-control" placeholder="Phone No"
                                        required>
                                    <div class="form-icon">
                                        <img src="{{ asset('assets/img/icons/ct-icon-3.svg') }}" alt="ct icon 1">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-12 form-group">
                                    <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                    <div class="form-icon">
                                        <img src="{{ asset('assets/img/icons/ct-icon-4.svg') }}" alt="ct icon 1">
                                    </div>
                                </div>
                                <div class="col-12 form-group">
                                    <button class="vs-btn style3" type="submit">
                                        <span class="vs-btn__bar"></span>
                                        SEND MESSAGE
                                    </button>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <div class="col-lg-5">
                        <div class="contact__info">
                            <h4 class="text-white mb-4">Main branch</h4>
                            <div>
                                <div class="footer-info--style5">
                                    <div class="footer-info_icon">
                                        <i>
                                            <img src="{{ asset('assets/img/icons/phone-info.svg') }}" alt="phone-info">
                                        </i>
                                    </div>
                                    <div class="media-body">
                                        <span class="footer-info_label">Phone No:</span>
                                        <div class="footer-info_link">
                                            <a href="tel:{{ $setting->phone ?? '' }} ">{{ $setting->phone ?? '' }} </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-info--style5">
                                    <div class="footer-info_icon">
                                        <i>
                                            <img src="{{ asset('assets/img/icons/open-mail-info.svg') }}" alt="open-email-info">
                                        </i>
                                    </div>
                                    <div class="media-body">
                                        <span class="footer-info_label">Email Address:</span>
                                        <div class="footer-info_link">
                                            <a href="mailto:{{ $setting->email ?? '' }}">{{ $setting->email ?? '' }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-info--style5">
                                    <div class="footer-info_icon">
                                        <i>
                                            <img src="{{ asset('assets/img/icons/location-info.svg') }}" alt="location info">
                                        </i>
                                    </div>
                                    <div class="media-body">
                                        <div class="footer-info_link">
                                            {{ $setting->address ?? '' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-style">
                                <ul>
                                    <li>
                                        <a href="{{ $setting->facebook ?? '' }}"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $setting->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $setting->behance ?? '' }}"><i class="fab fa-behance"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $setting->instagram ?? '' }}"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Location Area
        ==============================-->
    <div class="loc--layout1 z-index-common space-top space-extra-bottom">
        <div class="loc-bg z-index-n1"></div>
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <span class="sec-subtitle">OUR LOCATION</span>
                    <h2 class="sec-title1">WHREE WE WORK</h2>
                </div>
            </div> 
            <div class="row"> 
                @foreach($worklocations as $location)
                    <div class="col-xl-6"> 
                        <div class="loc-block--style">
                            <div class="loc-block__body">
                                <div class="loc-block__img">
                                    <img src="{{ $location->image ? $location->image->getUrl() : '' }}" alt="loc">
                                </div>
                                <div class="loc-block__content">
                                    <h3 class="loc-block__title h5">
                                        <a href="#">
                                            {{ $location->name ?? '' }}
                                        </a>

                                    </h3>
                                    <p class="loc-block__text">{{ $location->address }} </p>
                                    <p class="loc-block__text"> {{ $location->phone }} </p>
                                    <p class="loc-block__text">{{ $location->email }}</p>
                                </div>
                            </div>

                        </div> 
                    </div>  
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-7">
                    <div class="located-map">
                        <img src="{{ $setting->work_locations ? $setting->work_locations->getUrl() : '' }}" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
