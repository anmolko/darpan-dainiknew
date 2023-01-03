@extends('frontend.layouts.master')
@section('title') Services @endsection
@section('css')
    <style>
           
    .corpkit-content > .corpkit-content-inner {
        padding-top: 0;
        padding-bottom: 0;
    }
</style>
@endsection
@section('content')


        <!-- Page Banner Start -->
        <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <h1 class="page-title wow fadeInUp delay-0-2s">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active">Services </li>
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
        

        <!-- Project Area start -->
        <section class="project-page-area pt-130 pb-100 rel z-1">
            <div class="container">
           
                <div class="row justify-content-center">
                    @if(count($allservices) > 0)
                    <div class="col-lg-8">
                        <div class="row">
                                @foreach($allservices as $service)
                                    <div class="col-md-6 item ">
                                        <div class="project-item style-two wow fadeInUp delay-0-2s">
                                            <div class="project-iamge">
                                                <img src="<?php if(@$service->banner_image){?>{{asset('/images/service/'.@$service->banner_image)}}<?php }?>" alt="Project">
                                                <div class="project-over">
                                                    <a class="details-btn" href="{{route('service.single',$service->slug)}}"><i class="far fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="project-content">
                                                <h5><a href="{{route('service.single',$service->slug)}}"> {!! ucwords(Str::limit(@$service->title, 35,'...')) !!}</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{ $allservices->links('vendor.pagination.default') }}
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                        @include('frontend.pages.services.sidebar')
                      </div>
                    </div>
                    @else

                    <section class="no-results not-found">
                        <header class="page-header">
                            <h2 class="page-title">Nothing Found</h2>
                        </header>
                        <div class="page-content">
                            <p>It seems we can not find what you are looking for.</p>
                        </div>
                    </section>
                    @endif

                </div>
            </div>
        </section>
        <!-- Project Area end -->

 

@endsection