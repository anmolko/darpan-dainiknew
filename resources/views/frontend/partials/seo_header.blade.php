<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @if (\Request::is('/'))
        <title>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else दर्पण दैनिक @endif </title>
    @else
        <title>@yield('title') | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else दर्पण दैनिक  @endif </title>
    @endif
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php if(@$setting_data->favicon){?>{{asset('/images/settings/'.@$setting_data->favicon)}}<?php }?>">

    @yield('seo')

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugins.css')}}">
    <!-- ycp -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/ycp.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('assets/frontend/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{@$setting_data->google_analytics}}');
    </script>
    @yield('css')
    @stack('styles')
</head>

<body>


<!-- Main Wrapper -->
<div id="main-wrapper">

    <!-- Header Top Start -->
    <div class="header-top section">
        <div class="container">
            <div class="row">

                <!-- Header Top Links Start -->
                <div class="header-top-links col-md-9 col-6">

                    <!-- Header Links -->
                    <ul class="header-links">
                        <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i> २०७९ कार्तिक २४ गते ०४:३२</a></li>
                        <li class="d-none d-md-block"><a href="#"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Sydney</span></a></li>
                        {{--                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Sign Up</a></li>--}}
                        <li><a href="#">Unicode to preeti</a></li>
                        <li><a href="#">Preeti to unicode</a></li>
                    </ul>

                </div><!-- Header Top Links End -->

                <!-- Header Top Social Start -->
                <div class="header-top-social col-md-3 col-6">

                    <!-- Header Social -->
                    <div class="header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>

                </div><!-- Header Top Social End -->

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo -->
                <div class="header-logo col-md-4 d-none d-md-block">
                    <a href="/" class="logo">
                        <img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"  alt="Win Recruit Nepal" title="Win Recruit Nepal">
                    </a>
                </div>

                <!-- Header Banner -->
                <div class="header-banner col-md-8 col-12">
                    <div class="banner"><a href="#">
                            {{--                            <img src="{{asset('assets/frontend/img/gifs/test.gif')}}" alt="" />--}}

                            <img src="{{asset('assets/frontend/img/banner/header-banner-1.png')}}" alt="Header Banner"></a>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- Header End -->

    <!-- Menu Section Start -->
    <div class="menu-section section bg-dark" id="myHeader">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">

                        <div class="sticky-logo-nav">
                            <a href="/" class="logo">
                                <img src="<?php if(@$setting_data->logo_white){?>{{asset('/images/settings/'.@$setting_data->logo_white)}}<?php }?>"  alt="Win Recruit Nepal" title="Win Recruit Nepal">
                            </a>
                        </div>
                        <!-- Main Menu Start -->
                        <div class="main-menu float-start d-none d-md-block">

                            <nav>
                                <ul>

                                    <li class="active"><a href="/">गृह पृष्ठ</a>

                                    </li>
                                    <li><a href="/">समाचार</a></li>
                                    <li><a href="/">प्रवाश</a></li>
                                    <li><a href="/">अथ॔</a></li>
                                    <li><a href="/">रोचक</a></li>
                                    <li class="has-dropdown"><a href="/">प्रदेश</a>

                                        <!-- Mega Menu Start -->
                                        <div class="mega-menu">

                                            <!-- Menu Tab List Start -->
                                            <ul class="menu-tab-list nav">
                                                <li><a class="active" data-bs-toggle="tab" href="#menu-tab-one">all</a></li>
                                                <li><a data-bs-toggle="tab" href="#menu-tab-two">प्रदेश १</a></li>
                                                <li><a data-bs-toggle="tab" href="#menu-tab-one">मधेस प्रदेश</a></li>
                                                <li><a data-bs-toggle="tab" href="#menu-tab-two">बाग्मती</a></li>
                                                <li><a data-bs-toggle="tab" href="#menu-tab-one">गण्डकी</a></li>
                                                <li><a data-bs-toggle="tab" href="#menu-tab-two">लुम्बिनी</a></li>
                                                <li><a data-bs-toggle="tab" href="#menu-tab-one">कर्णाली</a></li>
                                            </ul><!-- Menu Tab List End -->

                                            <!-- Menu Tab Content Start -->
                                            <div class="tab-content menu-tab-content fix">

                                                <!-- Menu Tab Pane Start -->
                                                <div class="tab-pane fade show active" id="menu-tab-one">
                                                    <div class="row">

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="/" class="image"><img src="{{asset('assets/frontend/img/post/post-136.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="/">Marilyn Monroe’s beauty secrets the most</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="/" class="image"><img src="{{asset('assets/frontend/img/post/post-137.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="/">Hynpodia helps fmaletravelers find health.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="/" class="image"><img src="{{asset('assets/frontend/img/post/post-138.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-139.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-140.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">How do you solve the long tiredness.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-141.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Australia announced squad for Bangladesh tour</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-142.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Fance fry with chicken burger.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-143.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Fashion is about some thing that comes . . . . </a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                    </div>
                                                </div><!-- Menu Tab Pane End -->

                                                <!-- Menu Tab Pane Start -->
                                                <div class="tab-pane fade" id="menu-tab-two">
                                                    <div class="row">

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-140.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">How do you solve the long tiredness.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-141.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Australia announced squad for Bangladesh tour</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-142.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="#">Fance fry with chicken burger.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="{{asset('assets/frontend/img/post/post-143.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Fashion is about some thing that comes . . . . </a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="{{asset('assets/frontend/img/post/post-136.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Marilyn Monroe’s beauty secrets the most</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="{{asset('assets/frontend/img/post/post-137.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps fmaletravelers find health.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="{{asset('assets/frontend/img/post/post-138.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="{{asset('assets/frontend/img/post/post-139.jpg')}}" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                    </div>
                                                </div><!-- Menu Tab Pane End -->

                                            </div><!-- Menu Tab Content End -->

                                        </div><!-- Mega Menu End -->

                                    </li>
                                    <li><a href="/">मनोरञ्जन</a></li>
                                    <li><a href="/">समाज</a></li>
                                    <li class="has-dropdown"><a href="#">शिक्षा-स्वास्थ्य</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="#">शिक्षा</a></li>
                                            <li><a href="#">स्वास्थ्य</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>

                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->

                        <div class="mobile-logo d-md-none"><a href="/"><img src="{{asset('assets/frontend/img/logo-white.png')}}" alt="Logo"></a></div>

                        <!-- Header Search -->
                        <div class="col header-search mobile-search float-end">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->
                            <div class="header-search-form">
                                <form  method="get" id="searchform" action="{{route('searchBlog')}}" class="default-search-form">
                                    <input  id="s" name="s" type="text"  placeholder="Search keywords" oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
                                </form>
                            </div>

                        </div>


                        <!-- Mobile Menu Wrap -->
                        <div class="mobile-menu-wrap d-none">
                            <nav>
                                <ul>

                                    <li class="active has-dropdown"><a href="index.html">Home</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                            <li><a href="index-3.html">Home Three</a></li>
                                            <li><a href="index-4.html">Home Four</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>
                                    <li><a href="category-lifestyle.html">News</a></li>
                                    <li><a href="category-sports.html">Sports</a></li>
                                    <li><a href="category-lifestyle.html">Lifestyle</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="category-fashion.html">Beauty</a></li>
                                            <li><a href="category-lifestyle.html">travel</a></li>
                                            <li><a href="category-sports.html">Interior Design</a></li>
                                            <li><a href="category-lifestyle.html">Photography</a></li>
                                            <li><a href="category-fashion.html">fashion</a></li>
                                            <li><a href="category-sports.html">music</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>
                                    <li><a href="category-fashion.html">Fashion</a></li>
                                    <li><a href="category-politic.html">politic</a></li>
                                    <li><a href="#">pages</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="contact-us.html">contact</a></li>
                                            <li><a href="post-details.html">post details</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu"></div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Menu Section End -->

    <!-- Breaking News Section Start -->
    <div class="breaking-news-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breaking News Wrapper Start -->
                    <div class="breaking-news-wrapper">

                        <!-- Breaking News Title -->
                        <h5 class="breaking-news-title float-start">नवीनतम खबर</h5>

                        <!-- Breaking Newsticker Start -->
                        <ul class="breaking-news-ticker float-start">

                            @darpanloop(getLatestPosts(0,8) as $latest_news_feature)
                            <li>
                                <a href="{{ url(@$latest_news_feature->url()) }}">
                                    {{@$latest_news_feature->title}}
                                </a>
                            </li>
                            @enddarpanloop

                        </ul><!-- Breaking Newsticker Start -->

                        <!-- Breaking News Nav -->
                        <div class="breaking-news-nav">
                            <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>
                            <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>
                        </div>

                    </div><!-- Breaking News Wrapper End -->

                </div>
            </div>
        </div>
    </div><!-- Breaking News Section End -->

    <!-- Featured Above adds Start -->
    @if(count(getHomepageBanner('home-above-featured-post',0,1))> 0 )
        <div class="section">
            <div class="container">
                @darpanloop(getHomepageBanner('home-above-featured-post',0,1) as $banner)
                <div class="header-banner">
                    <div class="col-12 post-container featured">
                        <a href="{{@$banner->url}}" class="post-middle-banner">
                            <img src="{{asset('/images/banners/'.@$banner->image)}}" alt="{{$banner->name}}"  />
                        </a>
                    </div>
                </div>
                @enddarpanloop
            </div>
        </div>
@endif
