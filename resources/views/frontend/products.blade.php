@extends('layouts.frontend')

@section('content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">OUR PRODUCTS</h1> 
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li>OUR PRODUCTS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Area -->
    <div class="vs-product-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="vs-product product-style1 item">
                            <div class="product-img">
                                <a href="{{ route('frontend.products.show',$product->id) }}">
                                    <img src="{{ $product->main_image ? $product->main_image->getUrl() : '' }}" alt="{{ $product->model ?? '' }}" class="w-100" />
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="product-content__header">
                                    <h3 class="product-title">
                                        <a class="text-inherit" href="{{ route('frontend.products.show',$product->id) }}">WD700P</a>
                                    </h3>

                                    <span class="product-price"><del>{{ $product->price }} SAR</del>{{ $product->get_price() }} SAR</span>
                                </div>
                                <div class="actions">
                                    <a href="{{ route('frontend.products.show',$product->id) }}" class="vs-btn flex-grow-1">More</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
    </div>
    <!-- Products Area End -->
@endsection
