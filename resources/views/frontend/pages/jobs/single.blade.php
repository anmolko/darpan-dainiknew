@extends('frontend.layouts.seo_master')
@section('title') Job List @endsection
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
        .single-post  .elementor-top-section {
            padding: 0;
        }
    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleJob->name)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Win Recruit Nepal @endif</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleJob->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleJob->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleJob->updated_at !=''){?>{{@$singleJob->updated_at}} <?php }else {?> {{@$singleJob->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleJob->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleJob->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Win Recruit Nepal @endif" />
    <meta property="og:image" content="<?php if(@$singleJob->image){?>{{asset('/images/job/'.@$singleJob->image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleJob->image){?>{{asset('/images/job/'.@$singleJob->image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
        <div class="container">
            <div class="banner-inner rpt-10">
            <!-- <h1 class="page-title wow fadeInUp delay-0-2s">{{ @$singleJob->title }}</h1> -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/jobs')}}">Jobs</a></li>
                        <li class="breadcrumb-item active">{{ @$singleJob->name }}</li>
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
                            <img src="{{ asset('/images/job/'.@$singleJob->image) }}" alt="Blog ">
                        </div>
                        <h3>{{ ucwords(@$singleJob->name) }}</h3>
                        <ul class="blog-meta mt-20 pb-30">
                            <li>
                                <i class="fas fa-tasks-alt"></i>
                                <a href="">{{ucwords(@$singleJob->category->name)}}</a>
                            </li>
                            <li>
                                <i class="far fa-calendar-alt"></i>
                                <a href="#">{{date('M j, Y',strtotime(@$singleJob->start_date))}} - {{date('M j, Y',strtotime(@$singleJob->end_date))}}</a>
                            </li>

                        </ul>
                        <div class="win-justify">
                            {!! $singleJob->description !!}
                        </div>
                        <div class="row justify-content-center">

                            <div class="col-lg-8">
                                <div class="shoping-cart-total pt-20 wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <h4 class="form-title mb-25 text-center">Job Information</h4>
                                    <table>
                                        <tbody>
                                        {{--                                        <tr>--}}
                                        {{--                                            <td>Company</td>--}}
                                        {{--                                            <td><span>{{ucwords(@$singleJob->)}}</span></td>--}}
                                        {{--                                        </tr>--}}
                                        <tr>
                                            <td>Salary</td>
                                            <td><span>{{@$singleJob->salary}}</span></td>
                                        </tr>
                                        <tr>
                                            <td>Min Qualification</td>
                                            <td><span>{{@$singleJob->min_qualification}}</span></td>
                                        </tr>
                                        <tr>
                                            <td>Required Number</td>
                                            <td><span>{{@$singleJob->required_number}}</span></td>
                                        </tr>

                                        {{--                                        <tr>--}}
                                        {{--                                            <td>Country</td>--}}
                                        {{--                                            <td>--}}
                                        {{--                                                <?php--}}
                                        {{--                                                if(!empty($singleJob->country)){--}}
                                        {{--                                                    foreach ($countries as $key=>$value){--}}
                                        {{--                                                        if($singleJob->country == $key){--}}
                                        {{--                                                            echo $value;--}}
                                        {{--                                                        }--}}
                                        {{--                                                    }--}}
                                        {{--                                                }--}}
                                        {{--                                                ?>--}}
                                        {{--                                            </td>--}}
                                        {{--                                        </tr>--}}
                                        </tbody>
                                    </table>
                                    @if($singleJob->formlink)
                                        <a href="{{@$singleJob->formlink}}" class="theme-btn style-two mt-25 w-100">Apply for Job Now</a>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tag-share pt-40 pb-25 wow fadeInUp delay-0-2s">

                        <div class="item">
                            <h5>Share :</h5>
                            <div class="social-style-three">
                                <a href="#"><i class="fab fa-facebook-f" onclick='fbShare("{{route('job.single',$singleJob->slug)}}")'></i></a>
                                <a href="#"><i class="fab fa-twitter"  onclick='twitShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>
                                <a href="#"><i class="fab fa-whatsapp" onclick='whatsappShare("{{route('job.single',$singleJob->slug)}}","{{ $singleJob->title }}")'></i></a>


                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    @include('frontend.pages.jobs.sidebar')


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
