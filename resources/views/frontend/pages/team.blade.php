@extends('frontend.layouts.master')
@section('title') Team @endsection
@section('css')
    <style>
        .team-member:after{
            height: 340px;
        }
    </style>
@endsection
@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
        <div class="container">
            <div class="banner-inner rpt-10">
                <nav aria-label="breadcrumb">
{{--                    <h1 class="page-title">Our Team</h1>--}}
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Teams</li>
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


    <!-- Team Area start -->
    <section class="team-page-area pb-65 pt-80 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                        <span class="sub-title style-two mb-15">Our Amazing Team</span>
                        <h2>We Have Well Experience Team Member</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if(count($teams) > 0)
                    @foreach($teams as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6 item ">
                            <div class="team-member">
                                <div class="image">
                                    <img src="<?php if(!empty($team->image)){ echo '/images/teams/'.$team->image; } else{  echo 'assets/backend/images/users/user-dummy-img.jpg'; } ?>" alt="{{ucfirst(@$team->name)}}">
                                </div>
                                    <div class="content">
                                        <h5><a href="team-profile.html">{{ucfirst(@$team->name)}}</a></h5>
                                        <span class="designation">{{ucfirst(@$team->post)}}</span>
                                            <div class="social-style-one">
                                                @if(!empty(@$team->fb))
                                                    <a href="{{@$team->fb}}"><i class="fab fa-facebook-f"></i></a>
                                                @endif
                                                @if(!empty(@$team->twitter))
                                                    <a href="{{@$team->twitter}}"><i class="fab fa-twitter"></i></a>
                                                @endif
                                                @if(!empty(@$team->linkedin))
                                                    <a href="{{@$team->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                                                @endif
                                                @if(!empty(@$team->insta))
                                                <a href="{{@$team->insta}}"><i class="fab fa-instagram"></i></a>
                                                @endif
                                            </div>
                                    </div>

                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- Team Area end -->


@endsection
@section('js')
@endsection
