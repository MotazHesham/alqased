@extends('layouts.frontend')

@section('content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Partners</h1> 
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li> Our Partners</li>
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
            <img src="assets/img/main_bg.png" alt="about">
        </div>

        <div class="container">
            <div class="row">
                @foreach($partners as $partner)
                    <div class="col-md-3">
                        <div class="certifi">
                            <img src="{{ $partner->image ? $partner->image->getUrl() : '' }}" alt="{{ $partner->name ?? '' }}" class="img-fluid">
                        </div>
                    </div> 
                @endforeach
            </div>

        </div>



    </section>
@endsection
