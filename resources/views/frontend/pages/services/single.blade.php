@extends('frontend.layouts.seo_master')
@section('css')
    <style>

    .custom-editor .media{
        display: block;
    }

    .custom-editor{
        font-size: 1.1875rem;
    }
    .canosoft-listing ul,.canosoft-listing ol {
        padding: 0;
        margin-left: 15px;
    }
		.home-one a.active {
		color: #fc653c !important;
	}

    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleService->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Win Recruit Nepal @endif </title>
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
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Win Recruit Nepal @endif" />
    <meta property="og:image" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection

@section('content')

        <!-- Page Banner Start -->
        <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('service.frontend')}}">Services</a></li>
                            <li class="breadcrumb-item active">{{ucwords(@$singleService->title)}}</li>
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

		        <!-- Blog Details Area start -->
				<section class="blog-details-area py-130 rel z-1">
            <div class="container">
                <div class="row medium-gap">
                    <div class="col-lg-8">
                        <div class="blog-details-content wow fadeInUp delay-0-2s">
                            <div class="image mb-45">
                                <img src="<?php if(@$singleService->banner_image){?>{{asset('/images/service/'.@$singleService->banner_image)}}<?php }?>" alt="{{@$singleService->slug}}">
                            </div>
                            <h3>{{ucwords(@$singleService->title)}}</h3>
                          
                            <div class="win-justify">
							    {!! @$singleService->description !!}
                            </div>
                        </div>
                        <div class="tag-share pt-40 pb-25 wow fadeInUp delay-0-2s">
                            
                            <div class="item">
                                <h5>Share :</h5>
                                <div class="social-style-three">
                                    <a href="#"><i class="fab fa-facebook-f" onclick='fbShare("{{route('service.single',$singleService->slug)}}")'></i></a>
                                    <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>
                                    <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('service.single',$singleService->slug)}}","{{ $singleService->title }}")'></i></a>


                                </div>
                            </div>
                        </div>
               
                       
                       
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
						@include('frontend.pages.services.sidebar')

                  
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Area end -->

@endsection
@section('js')
<script>
function fbShare(url) {
  window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function twitShare(url, title) {
    window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(title) + "+" + url + "", "_blank", "toolbar=no, scrollbars=yes, resizable=yes, top=200, left=500, width=600, height=400");
}
function whatsappShare(url, title) {
    message = title + " " + url;
    window.open("https://api.whatsapp.com/send?text=" + message);
}
</script>
@endsection
