@extends('frontend.layouts.master')
@section('title') Client Testimonials @endsection
@section('css')
    <style>
        .blog-meta li:not(:last-child) {
            margin-right: 15px;
        }
        .blog-meta li:not(:first-child) {
            padding-left: 15px;
            border-left: 2px solid #0066ff;
        }
        .justify-content{
            text-align: justify;
            font-size: 18px;
        }
    </style>
@endsection
@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
        <div class="container">
            <div class="banner-inner rpt-10">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Client Testimonials</li>
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

    <!-- Blog List Area start -->
    <section class="blog-list-area py-130 rel z-1">
        <div class="container">
            <div class="row">
                @foreach($testimonials as $testimonial)
                <div class="col-lg-6">
                    <div class="blog-list-item wow fadeInUp delay-0-2s" style="height: 350px;">

                        <div class="blog-content" style="align-items: start;">
                            <div class="content" >
                                <ul class="blog-meta">
                                    <li>
                                        <img src="{{asset('/images/testimonial/'.@$testimonial->image)}}" alt="Author" style="height: 90px; width: 90px">
                                        <h5 style="padding-left: 12px; color:#46abe2;font-weight: lighter">{{ucwords($testimonial->name)}}</h5>
                                    </li>
                                    <li>

                                        <h5 style="font-weight: lighter">{{ucwords($testimonial->position)}}</h5>
                                    </li>
                                </ul>
                                <p class="justify-content">{!! @$testimonial->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{ $testimonials->links('vendor.pagination.default') }}
        </div>
    </section>
    <!-- Blog List Area end -->

@endsection
@section('js')
@endsection
