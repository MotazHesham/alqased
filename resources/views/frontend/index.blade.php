@extends('layouts.frontend')

@section('content')
    <!--==============================
            Hero Area
        ==============================-->
    <section class="hero hero--layout3">
        <div class="vs-carousel vsslider1" data-slide-show="1" data-fade="true" data-arrows="false">
            @foreach($sliders as $slider)
                <div>
                    <div class="hero-inner">
                        <div class="hero-bg3" data-bg-src="{{ $slider->image ? $slider->image->getUrl() : '' }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9">
                                    <div class="hero-content3">
                                        <span class="hero-subtitle">
                                            {{ $slider->title_1 ?? '' }}
                                        </span>
                                        <h1 class="hero-title">
                                            {{ $slider->title_2 ?? '' }}
                                        </h1>
                                        <p class="hero-text">
                                            {{ $slider->title_3 ?? '' }}
                                        </p>
                                        <div class="hero-btns">
                                            <a href="{{ $slider->button_url ?? '' }}" class="vs-btn">
                                                <span class="vs-btn__bar"></span>
                                                {{ $slider->button_name ?? '' }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            @endforeach
        </div>
        <div class="hero-slider--buttons">
            <div class="container">
                <div class="d-flex align-items-center">
                    <button class="icon-btn style7" data-slick-prev=".vsslider1">
                        <i class="fal fa-angle-double-left"></i>
                    </button>
                    <button class="icon-btn style7" data-slick-next=".vsslider1">
                        <i class="fal fa-angle-double-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
        Category Area
        ==============================-->
    <div class="cate--layout1 space-extra-bottom">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-auto">
                    <div class="cate-block--style">
                        <div class="cate-block__icon">
                            <img src="{{ asset('assets/img/icons/elevator.svg') }}" alt="cate icon" />
                        </div>

                        <h3 class="cate-block__title">
                            <a href="{{ route('frontend.products','elevator') }}">Elevator</a>
                        </h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-auto">
                    <div class="cate-block--style">
                        <div class="cate-block__icon">
                            <img src="{{ asset('assets/img/icons/escalator-stair.svg') }}" alt="cate icon" />
                        </div>

                        <h3 class="cate-block__title">
                            <a href="{{ route('frontend.products','escalator') }}">Escalator</a>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-auto">
                    <div class="cate-block--style">
                        <div class="cate-block__icon">
                            <img src="{{ asset('assets/img/icons/escalator-svgrepo-com.svg') }}" alt="cate icon" />
                        </div>

                        <h3 class="cate-block__title">
                            <a href="{{ route('frontend.products','autowalk') }}">Autowalk</a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
            About Area
        ==============================-->
    <section class="space-top space-extra-bottom z-index-common overflow-hidden">
        <div class="about-overlay--style2 position-absolute start-0 bottom-0">
            <img src="{{ asset('assets/img/main_bg.png') }}" alt="about" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="title-area text-center">
                        <span class="sec-icon">
                            <img src="{{ asset('assets/img/icons/logo-icon.png') }}" alt="icon" />
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
                    <div class="about-content">
                        <span class="sec-subtitle5">WHO WE ARE?</span>
                        
                        {!! $setting->who_we_are !!}

                        <a href="about.html" class="vs-btn" tabindex="0">
                            <span class="vs-btn__bar"></span>
                            More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
            Our Sucess
        ==============================-->
    <section class="sucess--layout1 z-index-common space-top" data-bg-src="assets/img/main_bg_transparent.png">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-3 col-md-6">
                    <div class="sucess-block--style1">
                        <div class="sucess-block__icon">
                            <img src="{{ asset('assets/img/icon03.png') }}" alt="sucess icon 1" />
                        </div>
                        <div class="sucess-block__number">{{ $setting->clients_count ?? 0 }}</div>
                        <p class="sucess-block__text">Client</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sucess-block--style1">
                        <div class="sucess-block__icon">
                            <img src="{{ asset('assets/img/icon06.png') }}" alt="sucess icon 1" />
                        </div>
                        <div class="sucess-block__number">{{ $setting->projects_count ?? 0 }}</div>
                        <p class="sucess-block__text">Project</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="sucess-block--style1">
                        <div class="sucess-block__icon">
                            <img src="{{ asset('assets/img/icon05.png') }}" alt="sucess icon 1" />
                        </div>
                        <div class="sucess-block__number">{{ $setting->products_count ?? 0 }}</div>
                        <p class="sucess-block__text">Products</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sucess-block--style1">
                        <div class="sucess-block__icon">
                            <img src="{{ asset('assets/img/icon04.png') }}" alt="sucess icon 1" />
                        </div>
                        <div class="sucess-block__number">{{ $setting->experience_count ?? 0 }}</div>
                        <p class="sucess-block__text">
                            Year of excperience
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
        Projects Area
        ==============================-->
    <section class="project--layout3 z-index-common space-top overflow-hidden">
        <div class="project__backlay position-absolute z-index-n1">
            <img src="assets/img/project/project-img-4.jpg" alt="Project" />
        </div>
        <div class="project__shape"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-8">
                    <div class="title-area text-center text-md-start color-white">
                        <span class="sec-subtitle2 color-white">AlQASED PROJECTS</span>
                        <h2 class="sec-title color-white">
                            PROJECTS COMPLETED
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4">
                    <div class="title-area">
                        <div class="d-flex align-items-center gap-2 justify-content-center justify-content-lg-end">
                            <button class="icon-btn style9" data-slick-prev=".vsslider3">
                                <i class="fal fa-angle-double-left"></i>
                            </button>
                            <button class="icon-btn style9" data-slick-next=".vsslider3">
                                <i class="fal fa-angle-double-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel vsslider3" data-dots="false" data-slide-show="2" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true"
                data-arrows="false">
                @foreach($projects as $project)
                    <div class="col-lg-6 col-md-6">
                        <div class="project-block">
                            <div class="project-block__media">
                                <a href="{{ route('frontend.projects.show',$project->id) }}">
                                    <img class="project-block__img" src="{{ $project->main_image ? $project->main_image->getUrl() : '' }}"
                                        alt="project details" />
                                </a>
                            </div>
                            <div class="project-block__content">
                                <span class="project-block__subtitle">{{ $project->address ?? '' }}</span>
                                <h3 class="project-block__title h4">
                                    <a class="project-block__title__link" href="{{ route('frontend.projects.show',$project->id) }}">
                                        {{ $project->title ?? '' }}
                                    </a>
                                </h3>
                                <p class="project-block__text">
                                    {{ $project->short_description ?? '' }}
                                </p>
                                <a class="project-block__link" href="{{ route('frontend.projects.show',$project->id) }}">
                                    READ MORE
                                    <svg width="54.014" height="13.002" viewBox="0 0 54.014 13.002">
                                        <path
                                            d="M1165.253,3152.64H1117.99v-2.29h47.263v-5.356q3.375,3.26,6.752,6.526-3.355,3.228-6.707,6.451l-.045.025Z"
                                            transform="translate(-1117.99 -3144.994)" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                            <div class="project-block__shape">
                                <svg width="269.005" height="79.003" viewBox="0 0 269.005 79.003">
                                    <g id="vector" transform="translate(-1274.998 -3125.997)">
                                        <path d="M1485.138,3139.828,1544,3204.5l-227.656.5-41.348-.971Z" fill="#d1242a" />
                                        <path d="M1368.187,3126l57.88,22.741-113.607,32.3-21.1,5.358Z" fill="#d1242a" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
            <div class="project-estimate" data-bg-src="{{ asset('assets/img/estimate-texures.png') }}">
                <div class="project-estimate__img">
                    <img src="{{ asset('assets/img/Frame-11.png') }}" alt="" />
                </div>
                <span class="project-estimate__letter">QASED</span>
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="project-title">
                            <span class="sec-subtitle3">Specialized Manufacturer With Global
                                Experience</span>

                            <p class="sec-text2 mb-3 pb-xl-2 just">
                                HANGZHOU SWORD ELEVATOR CO., LTD was
                                established in 2009 and is located at the
                                National Economic and Technological
                                Development Zone in Hangzhou, China. We are
                                an international comprehensive manufacturer
                                and service provider which integrate the
                                R&D, design, production, sales, installation
                                and after-sales maintenance of elevators and
                                escalators.Our annual production capacity is
                                up to 100,000 units, of which the
                                comprehensive strength ranks top in the
                                industry.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="brand--layout2 space-top space-extra-bottom">
        <div class="container">
            <div class="position-relative z-index-common">
                <div class="vs-carousel" data-dots="false" data-slide-show="5" data-lg-slide-show="3"
                    data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="1" data-center-mode="true"
                    data-arrows="false">
                    @foreach($partners as $partner)
                        <div>
                            <div class="brand-style">
                                <img src="{{ $partner->image ? $partner->image->getUrl() : '' }}" alt="brand" />
                            </div>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
