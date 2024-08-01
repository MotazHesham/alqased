@extends('layouts.frontend')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-bg.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">OUR PROJECTS</h1>
                <p class="breadcumb-text">
                    CLASSIC PROJECT IN KSA
                </p>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('frontend.home') }}">Home</a></li>
                        <li>OUR PROJECTS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="project--layout4 space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-70">
                @foreach($projects->chunk(3) as $chunk)
                    <div class="col-lg-6 col-md-6">
                        @foreach($chunk as $project)
                            <div class="project-block--style4">
                                <div class="project-block__media">
                                    <a href="{{ route('frontend.projects.show', $project->id  ) }}">
                                        <img class="project-block__img" src="{{ $project->main_image ? $project->main_image->getUrl() : '' }}"
                                            alt="project details">
                                    </a>
                                </div>
                                <div class="project-block__content">
                                    <span class="project-block__subtitle">{{ $project->address ?? '' }}</span>
                                    <h3 class="project-block__title h4">
                                        <a class="project-block__title__link" href="{{ route('frontend.projects.show', $project->id ) }}">
                                            {{ $project->title ?? '' }}
                                        </a>
                                    </h3>
                                </div>
                            </div> 
                        @endforeach
                    </div> 
                @endforeach
            </div>
            {{ $projects->links() }} 
        </div>
    </div>
@endsection
