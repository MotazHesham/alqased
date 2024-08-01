@extends('layouts.frontend')

@section('content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">PRODUCT DETAILS</h1> 
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route("frontend.home") }}">Home</a></li>
                        <li><a href="{{ route('frontend.products',$product->type) }}">OUR PRODUCTS</a></li>
                        <li>PRODUCT DETAILS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Area -->
    <div class="vs-product-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slide-row row gx-15">
                        <div class="col-md-2">
                            <div class="product-thumb-slide vs-carousel" data-slide-show="4" data-md-slide-show="4"
                                data-sm-slide-show="3" data-xs-slide-show="3" data-asnavfor=".product-big-img"
                                data-vertical="true" data-sm-vertical="false">
                                @foreach($product->images as $image)
                                    <div>
                                        <div class="thumb"><img src="{{ $image->getUrl('thumb') }}" alt="Product Image">
                                        </div>
                                    </div> 
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true"
                                data-asnavfor=".product-thumb-slide">
                                @foreach($product->images as $image)
                                    <div class="img"><img src="{{ $image->getUrl() }}" alt="Product Image">
                                    </div> 
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-about">
                        <div class="product-rating">
                            <span class="product-instock">
                                @if($product->is_available)
                                    <i class="far fa-check"></i>Available
                                @else 
                                    <span style="color:red"><i class="fas fa-times"></i> Not Available</span>
                                @endif
                            </span>

                        </div>
                        <h4>{{ $product->name }}</h4>
                        <h2 class="product-title">
                            {{ $product->short_description ?? '' }}
                        </h2>
                        <p class="product-price"><del>{{ $product->price }} SAR</del> {{ $product->get_price()  }} SAR</p>

                        <div class="product_meta">
                            <span class="sku_wrapper">Model: <span class="sku">{{ $product->model ?? '' }}</span></span>
                            <span class="sku_wrapper">Load: <span class="sku">{{ $product->load ?? '' }}</span></span>
                            <span class="sku_wrapper">Speed: <span class="sku">{{ $product->speed ?? '' }}</span></span>

                        </div>

                    </div>
                </div>
            </div>
            <div class="product-description">
                <div class="product-description__tab">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">DESCRIPTION</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">
                                ADDITIONAL
                                INFORMATION
                            </button>
                        </li>

                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="description">
                            {!! $product->description !!}
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="description">
                            <div class="product-information">
                                <div class="product-information__item">
                                    <span class="product-information__name">
                                        Max stop

                                    </span>
                                    <span>{{ $product->max_stop ?? '' }}</span>
                                </div>
                                <div class="product-information__item">
                                    <span class="product-information__name">
                                        Max rise

                                    </span>
                                    <span>{{ $product->max_rise ?? '' }}</span>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Products Area End -->
@endsection
