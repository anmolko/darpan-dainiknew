@extends('frontend.layouts.master')
@section('title') Our Service Category @endsection
@section('css')
    <style>

    </style>
@endsection
@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title">Our Category</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Service Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="banner-shapes">
            <div class="circle wow zoomInLeft delay-0-2s" data-wow-duration="2s"></div>
            <img class="shape-one" src="{{asset('assets/frontend/images/shapes/hero-shape1.png')}}" alt="Shape">
            <img class="shape-two" src="{{asset('assets/frontend/images/shapes/hero-shape2.png')}}" alt="Shape">
        </div>
    </section>
    <!-- Page Banner End -->
    @if(count($service_categories) > 0)
    <!-- Project Carousel Area start -->
    <section class="project-carousel-area py-130 rel z-1">
        <div class="container">
            <div class="row justify-content-center pb-20">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center mb-30 wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                        <span class="sub-title style-two mb-15">Categories we provide</span>
                        <h2>Win Recruitment's popular service categories</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">

            <div class="project-three-active">

                @foreach($service_categories as $service)
                <div class="project-item style-three">
                    <div class="project-iamge">
                        <img src="<?php if(@$service->image){?>{{asset('/images/service_categories/thumb/thumb_'.@$service->image)}}<?php }?>" alt="Project">
                        <div class="project-over">
                            <a class="details-btn" href="{{route('category.single',$service->slug)}}"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="project-content">
                        <h5><a href="{{route('category.single',$service->slug)}}">{{$service->name}}</a></h5>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- Project Carousel Area end -->
    @endif

@endsection
@section('js')
@endsection
