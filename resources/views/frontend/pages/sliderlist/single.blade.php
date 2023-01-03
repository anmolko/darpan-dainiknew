@extends('frontend.layouts.master')
@section('title')  {{ucwords(@$singleSlider->list_header)}} @endsection

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
   
	.widget-category ul li a.active {
			color: #fc653c !important;
		}
    </style>
@endsection


@section('content')

	        <!-- Page Banner Start -->
			<section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <!-- <h1 class="page-title wow fadeInUp delay-0-2s">{{ @$singleBlog->title }}</h1> -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/'.@$singleSlider->section->page->slug)}}">{{ucwords(@$singleSlider->section->page->name)}}</a></li>
                            <li class="breadcrumb-item active">{{ucwords(@$singleSlider->list_header)}}</li>
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
                                <img src="{{ asset('/images/section_elements/list_1/'.$singleSlider->list_image) }}" alt="{{@$singleSlider->list_header}}">
                            </div>
                            <h3>{{ucwords(@$singleSlider->list_header)}}</h3>
                          
                            <div class="win-justify">
                            {{@$singleSlider->list_description}}
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
					   @include('frontend.pages.sliderlist.sidebar')            
                  
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Area end -->
		
@endsection