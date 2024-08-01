<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Al-Qased</title>
    <meta name="author" content="vecuro" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="icon" href="{{ asset('assets/img/icons/logo-icon.png') }}">
    <!--==============================
    Google Fonts
    ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;500;600;700;800&family=Rubik:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!--==============================
    All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/app.min.css"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" />
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}" />
    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>

    @php($setting = \App\Models\Setting::first())
    <!--********************************
        Code Start From Here
      ******************************** -->
    <!--==============================
    Preloader
    ==============================-->
    <div class="preloader">
        <button class="vs-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo-black.png') }}" alt="logo" />
            <span class="loader"></span>
        </div>
    </div>
    <!--==============================
        Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle">
                <i class="fal fa-times"></i>
            </button>
            <div class="mobile-logo">
                <a href="{{ route('frontend.home') }}"><img src="{{ asset('assets/img/logo-black.png') }}" alt="Consik" class="logo" /></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="{{ route('frontend.home') }}">Home</a>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ route('frontend.about') }}">About</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('frontend.about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.certificates') }}">Certifictes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children">
                        <a href="#">Products</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('frontend.products','elevator') }}">Elevator</a></li>
                            <li><a href="{{ route('frontend.products','escalator') }}">Escalator</a></li>
                            <li><a href="{{ route('frontend.products','autowalk') }}">Autowalk</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('frontend.projects') }}">Our projects</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.partners') }}">Partners</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.contactus') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Sidemenu
    ============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls">
                <i class="far fa-times"></i>
            </button>
            <div class="widget">
                <div class="vs-widget-about">
                    <div class="footer-logo">
                        <a href="{{ route('frontend.home') }}"><img src="{{ asset('assets/img/logo-black.png') }}" alt="Consik" class="logo" /></a>
                    </div> 
                    <div class="footer-social">
                        <a href="{{ $setting->facebook ?? '' }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $setting->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $setting->instagram ?? '' }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $setting->behance ?? '' }}"><i class="fab fa-behance"></i></a> 
                    </div>
                </div>
            </div>

            <div class="widget">
                <h3 class="widget_title">Office Maps</h3>
                <div class="footer-map">
                    <iframe title="office location map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163720.11965853968!2d8.496481908353967!3d50.121347879150306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1651732317319!5m2!1sen!2sbd"
                        width="200" height="180" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
            Header Area
        ==============================-->
    <header class="vs-header header-layout3">
        <!-- Header Top -->
        <div class="header-topper position-relative">
            <div class="header-main position-relative">
                <div class="header-texures position-absolute end-0 top-0">
                    <img src="{{ asset('assets/img/textures/header-textures-1.svg') }}" alt="texture" />
                </div>
                <div class="container">
                    <div class="menu-top">
                        <div class="row justify-content-center justify-content-sm-between align-items-center gx-sm-0">
                            <div class="col-lg-3 col-md-4 col-auto">
                                <div class="header-logo">
                                    <a href="{{ route('frontend.home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""
                                            class="logo" /></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-auto">
                                <div class="header-infos">
                                    <div class="header-info">
                                        <div class="header-info_icon">
                                            <i>
                                                <img src="{{ asset('assets/img/icons/phone.svg') }}" alt="phone-icon" />
                                            </i>
                                        </div>
                                        <div class="media-body">
                                            <span class="header-info_label">Phone No</span>
                                            <div class="header-info_link">
                                                <a href="tel:+26921562148">+966 12 6614547</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-info d-none d-md-flex">
                                        <div class="header-info_icon">
                                            <i>
                                                <img src="{{ asset('assets/img/icons/email.svg') }}" alt="phone-icon" />
                                            </i>
                                        </div>
                                        <div class="media-body">
                                            <span class="header-info_label">Email Address</span>
                                            <div class="header-info_link">
                                                <a href="mailto:info@alqased.com">info@alqased.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="header-bottom sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="header-menu">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-block">
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="{{ route('frontend.home') }}">
                                                <span class="has-new-lable">
                                                    <i class="has-new-lable__icon">
                                                        <img src="assets/img/icons/house.svg" alt="" />
                                                    </i>
                                                    Home
                                                </span>
                                            </a>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="{{ route('frontend.about') }}">About</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('frontend.about') }}">About</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('frontend.certificates') }}">Certifictes</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="#">Products</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ route('frontend.products','elevator') }}">Elevator</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('frontend.products','escalator') }}">Escalator</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('frontend.products','autowalk') }}">Autowalk</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="{{ route('frontend.projects') }}">Our projects</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('frontend.partners') }}">Partners</a>
                                        </li>
                                    </ul>
                                </nav>
                                <button class="vs-menu-toggle d-inline-block d-lg-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="16.02"
                                        viewBox="0 0 38 16.02">
                                        <path d="M1268,206.78v-2h38v2Zm0-7.01v-2h38v2Zm0-7.01v-2h38v2Z"
                                            transform="translate(-1268 -190.76)" fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                            <div class="col-auto d-none d-vc-sm-block">
                                <div class="header-btns">
                                    <button class="icon-btn style3 sideMenuToggler d-none d-lg-inline-block">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="16.02"
                                                viewBox="0 0 38 16.02">
                                                <path d="M1268,206.78v-2h38v2Zm0-7.01v-2h38v2Zm0-7.01v-2h38v2Z"
                                                    transform="translate(-1268 -190.76)" fill="currentColor" />
                                            </svg>
                                        </i>
                                    </button>
                                    <a href="{{ route('frontend.contactus') }}" class="vs-btn d-none d-vc-sm-block">
                                        <span class="vs-btn__bar"></span>
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!--==============================
            Footer Area
    ==============================-->
    <footer class="footer-wrapper footer-layout3" data-bg-src="{{ asset('assets/img/footer/footer-bg.jpg') }}">
        <div class="footer-layout3__overlay"></div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="widget__logo">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="logo" />
                            </div>
                            <div class="vs-widget-about">
                                <p class="footer-text">
                                    {!! $setting->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">JOIN NEWSLETTER</h3>
                            <div class="vs-widget-about">
                                <p class="vs-widget-about__text">
                                    Subscribe and get latest news.
                                </p>
                                <div class="widget__submit position-relative">
                                    <input class="wp-block--submit__input" placeholder="Enter your email address...."
                                        type="search" name="s" />
                                    <button type="button" class="vs-btn style11">
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input id="footer-checkbox" class="widget__submit--checkbox" type="checkbox" />
                                    <label class="widget__submit--label" for="footer-checkbox">
                                        I agree that data will be saved for
                                        the purpose of making contact
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">FOLLOW US</h3>
                            <div class="footer-social">
                                <a href="{{ $setting->facebook ?? '' }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $setting->twitter ?? '' }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $setting->instagram ?? '' }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $setting->behance ?? '' }}"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text text-center text-lg-start">
                            © 2024 Alqased. All Rights Reserved By
                            <a href="#">Takamol </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    <!--********************************
            Code End  Here
      ******************************** -->
    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- WOW.js Animation -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Select 2 -->
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
