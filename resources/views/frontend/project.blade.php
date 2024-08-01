@extends('layouts.frontend')

@section('content')
    <!--==============================
        Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">PROJECT DETAILS</h1>
                <p class="breadcumb-text">CLASSIC PROJECT IN KSA</p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ asset('frontend.home') }}">Home</a></li>
                        <li><a href="{{ asset('frontend.projects') }}">OUR PROJECTS</a></li>
                        <li>PROJECT DETAILS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Details -->
    <section class="project--details space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="sec-subtitle6">{{ $project->address ?? '' }} </span>
                    <h2 class="pe-xl-3 mb-20">{{ $project->title ?? '' }}</h2>
                    <p class="text-18 project__text">
                        {!! $project->short_description !!}
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="info-box">
                        <ul>
                            <li>
                                <span class="info-box__title highlight">CLIENT:</span>
                                <span class="info-box__title">{{ $project->client }} </span>
                            </li>
                            <li>
                                <span class="info-box__title highlight">START:</span>
                                <span class="info-box__title">{{ $project->start }}</span>
                            </li>
                            <li>
                                <span class="info-box__title highlight">ENDING:</span>
                                <span class="info-box__title">{{ $project->end }}</span>
                            </li>
                            <li>
                                <span class="info-box__title highlight">TAG:</span>
                                <span class="info-box__title ">
                                    @foreach(explode(',',$project->tags) as $tag)
                                        <a href="#">{{ $tag }}</a>, 
                                    @endforeach
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="img-box1">
                <img src="{{ $project->main_image ? $project->main_image->getUrl() : '' }}" alt="Project Details">
            </div>
            <h3 class="project__title pt-3 mb-15">Projects details</h3>
            
            {!! $project->details !!}

            <div class="gx-30 pt-20" style="display: flex;flex-wrap: wrap;">
                @foreach($project->images as $image) 
                    <div class="  mb-30">
                        <img src="{{ $image->getUrl() }}" alt="project-details">
                    </div> 
                @endforeach
            </div>

            <h3 class="project__title pt-3 mb-30">Project Requirements</h3>
            {!! $project->requirements !!}

            <h3 class="project__title pt-3 mb-15">Project Results</h3>
            {!! $project->results !!}

            <div class="pagination--style2 mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-auto">
                        <div class="pagination-block--style1">
                            <div>
                                <a class="pagination-block__icon" href="{{ $previousItem ? route('frontend.projects.show',$previousItem->id) : '' }}">
                                    <svg width="58" height="15" viewBox="0 0 58 15" fill="none">
                                        <path d="M9 6H58V9H9V6Z" fill="currentColor" />
                                        <path d="M0 7.5L9 15V0L0 7.5Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                            <div class="pagination-block__content">
                                <h4 class="pagination-block__heading">
                                    <a href="{{ $previousItem ? route('frontend.projects.show',$previousItem->id) : '' }}">Previuse project</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto">
                        <div class="pagination__divider"></div>
                    </div>
                    <div class="col-lg-auto">
                        <div class="pagination-block--style2">
                            <div class="pagination-block__content text-end">
                                <h4 class="pagination-block__heading">
                                    <a href="{{ $nextItem ? route('frontend.projects.show',$nextItem->id) : '' }}">Next project</a>
                                </h4>
                            </div>
                            <div>
                                <a class="pagination-block__icon" href="{{ $nextItem ? route('frontend.projects.show',$nextItem->id) : '' }}">
                                    <svg width="57" height="15" viewBox="0 0 57 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 6H49V9H0V6Z" fill="currentColor" />
                                        <path d="M57 7.5L49 15V0L57 7.5Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Details end -->
@endsection
