@extends('frontend.layouts.seo_master')
@section('css')
    <style>
        .win-listing ul,.win-listing ol {
            list-style: none;
            padding-left: 0;
            list-style-type: none !important;
        }
        .win-listing ol li ol,.win-listing ol li ul,.nms-listing ul li ol, .win-listing ul li ul {
            padding-left: 30px;
        }
        .win-listing ul li::before,.win-listing ol li::before {
            content: "\f101";
            font-family: "Font Awesome 5 Pro";
            font-size: 16px;
            line-height: 28px;
            color: #46abe2;
            padding-right: 13px;
        }
        .win-listing ol li ol li::before,.win-listing ol li ul li::before,.win-listing ul li ol li::before ,.win-listing ul li ul li::before {
            content: "\f101";
            font-family: "Font Awesome 5 Pro";
            font-size: 16px;
            line-height: 28px;
            padding-right: 13px;
            color: #46abe2;
        }
        @media only screen and (min-width: 1000px) {

            .sticky-sidebar{
                width: 400px;
                height:720px;


        }
        .sticky-sidebar.stick {
            position:fixed;
            /* position: -webkit-sticky; */
            top: 80px;
            z-index: 10;
            /* border-radius: 0 0 0.5em 0.5em; */
            right: 75px;
        }


        #sticky-anchor{
            display:none;
        }

    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleService->name)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Win Recruitment Service @endif </title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleService->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleService->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleService->updated_at !=''){?>{{@$singleService->updated_at}} <?php }else {?> {{@$singleService->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleService->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleService->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else NMS Recruitment Service @endif" />
    <meta property="og:image" content="<?php if(@$singleService->image){?>{{asset('/images/service_categories/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleService->image){?>{{asset('/images/service_categories/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title">{{ @$singleService->name }}</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('service.frontend')}}">Category</a></li>
                        <li class="breadcrumb-item active">Service Category Single</li>
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

    <!-- Project Details Area start -->
    <section class="project-details-area pt-130 rel z-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s" style="margin-bottom: 20px">
                        <h2>{{ucwords(@$singleService->name)}}</h2>
                        <span class="sub-title-two">{!! @$singleService->short_description !!}</span>
                    </div>
                    <div class="details-image mb-15 wow fadeInUp delay-0-3s">
                        <img src="{{ asset('/images/service_categories/'.$singleService->image) }}" alt="{{@$singleService->slug}}">
                    </div>

                    <h4 class="title mb-15">Service Category Details</h4>
                    <div class="sub-title-two  mb-15 win-listing">
                        {!! @$singleService->list !!}
                    </div>

                    <hr class="mt-50">
                    <div class="next-prev-project py-65">
                        @if($previous_record !== null)
                            <div class="prev-project wow fadeInLeft delay-0-2s">
                                <div class="image" style="width: 155PX; padding-left: 0px">
                                    <img src="{{ asset('/images/service_categories/thumb/thumb_'.$previous_record->image) }}" alt="Project">
                                </div>
                                <div class="content">
                                    <h5><a href="{{route('service.single',$previous_record->slug)}}">{{$previous_record->name}}</a></h5>
{{--                                    <span class="category">Creative, Branding</span>--}}
                                     <a href="{{route('service.single',$previous_record->slug)}}" class="read-more"> <i class="far fa-arrow-left" style="padding-right: 5px"></i> View Details </a>
                                </div>
                            </div>
                        @endif
                        <a class="show-all" href="{{route('category.frontend')}}">
                            <i class="far fa-ellipsis-h"></i>
                            <i class="far fa-ellipsis-h"></i>
                            <i class="far fa-ellipsis-h"></i>
                        </a>

                            <div class="next-project wow fadeInRight delay-0-2s">
                                @if($next_record !== null)
                                <div class="image" style="width: 155PX; padding-left: 0px">
                                    <img src="{{ asset('/images/service_categories/thumb/thumb_'.$next_record->image) }}" alt="Project">
                                </div>
                                <div class="content">
                                    <h5><a href="{{route('service.single',$next_record->slug)}}">{{$next_record->name}}</a></h5>
                                    <a href="{{route('service.single',$next_record->slug)}}" class="read-more">View Details <i class="far fa-arrow-right"></i></a>
                                </div>
                                @endif
                            </div>

                    </div>
                    <hr>
                </div>
                <div id="sticky-anchor"></div>
                <div class="col-lg-4 sticky-sidebar">
                    <div class="row">
                        @include('frontend.pages.category.sidebar')
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Project Details Area end -->
@endsection
@section('js')
    <script>
        function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var footer_top = $(".sticky-stop").offset().top;
            var div_top = $('#sticky-anchor').offset().top;
            var div_height = $(".sticky-sidebar").height();

            var padding = 80;  // tweak here or get from margins etc

            if (window_top + div_height > footer_top - padding)
                $('.sticky-sidebar').css({top: (window_top + div_height - footer_top + padding) * -1})
            else if (window_top > div_top && window_top > 600) {
                $('.sticky-sidebar').addClass('stick');
                $('.sticky-sidebar').css({top: 120})
            } else {
                $('.sticky-sidebar').removeClass('stick');
                $('.sticky-sidebar').css({top: 0})
            }
        }

        $(function () {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        });
    </script>
@endsection
