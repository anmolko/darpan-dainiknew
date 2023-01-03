@extends('frontend.layouts.master')
@section('title') Clients @endsection
@section('css')
    <style>

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
                        <li class="breadcrumb-item active">Clients</li>
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
            <div class="row justify-content-between align-items-end pb-30">
                <div class="col-xl-4">
                    <div class="section-title mb-30 wow fadeInUp delay-0-2s">
                        <span class="sub-title style-two mb-15">Win Recruitment Valuables</span>
                        <h2>List of our prestigious clients</h2>
                    </div>
                </div>
                <div class="col-xl-8 text-xl-end">
                    <ul class="project-filter filter-btns-one d-inline-flex mb-30 wow fadeInUp delay-0-4s">
                        <li data-filter="*" class="current">All</li>
                        @foreach($country as $key=>$value)
                        <li data-filter=".{{$key}}">{{$value}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="row project-active justify-content-center">
                @foreach(@$clients as $client)
                <div class="col-xl-4 col-md-6 item {{$client->country}}">
                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="col" style="margin: 0 20px 0 20px;">
                            <div class="feature-item wow fadeInUp delay-0-2s">
                                <div class="image" style="height: 155px;padding: 80px;">
                                    <img src="{{asset('/images/clients/'.@$client->image)}}" alt="{{$client->name}}">
                                </div>
                                <h5><a href="{{ ($client->link !== null) ? $client->link:'#' }}" style="color: white" target="{{ ($client->link !== null) ? '_blank':'' }}">{{$client->name}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Project Area end -->



@endsection
@section('js')
@endsection
