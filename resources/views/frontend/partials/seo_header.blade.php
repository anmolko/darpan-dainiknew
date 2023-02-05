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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--    For live site, social media sharing - uncomment only when updating header or seo-header in live site--}}
    {{--    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=63d38be7e591ca001a314048&product=inline-share-buttons&source=platform" async="async"></script>--}}

    @yield('css')
    @stack('styles')
</head>

<body>

<div id="main-wrapper">

    <!-- Header Top Start -->
    <div class="header-top section">
        <div class="container">
            <div class="row">

                <!-- Header Top Links Start -->
                <div class="header-top-links col-md-9 col-6">

                    <!-- Header Links -->
                    <ul class="header-links">
                        <li class="disabled block d-none d-md-block" style="padding-right: 0px;margin-right: 0px;">
                            <a href="#"><i class="fa fa-clock-o"></i> {{ getNepaliTodayDate() }}</a></li>
                        <li class="block d-md-block">
                            <a class="old-site" href="https://sub.darpandainik.com/" target="_blank"><i class="fa fa-globe"></i> पुरानो वेबसाइट </a>
                        </li>
                        {{--                        <li class="d-none d-md-block"><a href="#"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Sydney</span></a></li>--}}
                        {{--                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Sign Up</a></li>--}}
                        <li><a href="http://unicode.darpandainik.com/" target="_blank">Unicode to preeti</a></li>
                        <li><a href="https://preeti.darpandainik.com/" target="_blank">Preeti to unicode</a></li>
                    </ul>

                </div><!-- Header Top Links End -->

                <!-- Header Top Social Start -->
                <div class="header-top-social col-md-3 col-6">

                    <!-- Header Social -->
                    <div class="header-social">
                        @if(!empty(@$setting_data->facebook))
                            <a href="{{ (!empty(@$setting_data->facebook)) ? @$setting_data->facebook : "#"  }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        @endif
                        @if(!empty(@$setting_data->linkedin))
                            <a href="{{ (!empty(@$setting_data->linkedin)) ? @$setting_data->linkedin : "#"  }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        @endif
                        @if(!empty(@$setting_data->youtube))
                            <a href="{{ (!empty(@$setting_data->youtube)) ? @$setting_data->youtube : "#"  }}"  target="_blank"><i class="fa-brands fa-youtube-play"></i></a>
                        @endif
                        @if(!empty(@$setting_data->instagram))
                            <a href="{{ (!empty(@$setting_data->instagram)) ? @$setting_data->instagram : "#"  }}"  target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        @endif
                        @if(!empty(@$setting_data->ticktock))
                            <a href="{{ (!empty(@$setting_data->ticktock)) ? @$setting_data->ticktock : "#"  }}"  target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        @endif
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

            @if(count(getHomepageBanner('home-above-featured-post',0,1))> 0 )
                <!-- Header Banner -->
                    <div class="header-banner col-md-8 col-12">
                        @darpanloop(getHomepageBanner('home-besides-logo',0,1) as $banner)
                        <div class="banner">
                            <a href="{{@$banner->url}}" class="post-middle-banner">
                                <img src="{{asset('/images/banners/'.@$banner->image)}}" alt="{{$banner->name}}"  />
                            </a>
                        </div>
                        @enddarpanloop
                    </div>
                @endif

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
                                    <li class="home-nav {{request()->is('/') ? 'active' : ''}}">
                                        <a href="/">गृह पृष्ठ</a>
                                    </li>
                                    @if(!empty($top_nav_data))
                                        @foreach($top_nav_data as $nav)
                                            @if(!empty($nav->children[0]))
                                                <li class="{{request()->is(@$nav->slug)  ? 'active' : ''}} has-dropdown">
                                                    <a href="{{url('category')}}/{{$nav->slug}}">@if(@$nav->name == NULL) {{ucwords(@$nav->title)}} @else {{ucwords(@$nav->name)}} @endif</a>
                                                    <!-- Mega Menu Start -->
{{--                                                    @if(@$nav->slug !== 'अन्य')<div class="mega-menu">--}}

{{--                                                        <!-- Menu Tab List Start -->--}}
{{--                                                        <ul class="menu-tab-list nav">--}}
{{--                                                            @foreach($nav->children[0] as $childNav)--}}
{{--                                                                @if($childNav->type == 'custom')--}}
{{--                                                                    <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}}" >--}}
{{--                                                                        <a href="/{{@$childNav->slug}}" class="" @if(@$childNav->target !== NULL) target="_blank" @endif >--}}
{{--                                                                            @if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif--}}
{{--                                                                        </a>--}}
{{--                                                                    </li>--}}
{{--                                                                @elseif($childNav->type == 'category')--}}
{{--                                                                    <li  class="{{request()->is('category/'.@$childNav->slug) ? 'active' : ''}}">--}}
{{--                                                                        <a class="{{ ($loop->first) ? 'active' : ''}}"--}}
{{--                                                                           data-bs-toggle="tab" href="#menu-tab-{{@$childNav->id}}"--}}
{{--                                                                        > — @if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>--}}
{{--                                                                    </li>--}}
{{--                                                                @else--}}
{{--                                                                    <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}}">--}}
{{--                                                                        <a href="{{url('/')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL)--}}
{{--                                                                        target="_blank" @endif>--}}
{{--                                                                            @if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif--}}
{{--                                                                        </a>--}}
{{--                                                                    </li>--}}
{{--                                                                @endif--}}
{{--                                                            @endforeach--}}
{{--                                                        </ul><!-- Menu Tab List End -->--}}

{{--                                                        <!-- Menu Tab Content Start -->--}}
{{--                                                        <div class="tab-content menu-tab-content fix">--}}
{{--                                                            @foreach($nav->children[0] as $childNav)--}}
{{--                                                                @if($childNav->type == 'category')--}}
{{--                                                                    <div class="tab-pane fade {{ ($loop->first) ? 'show active' : ''}}" id="menu-tab-{{@$childNav->id}}">--}}
{{--                                                                        <div class="row">--}}

{{--                                                                            @darpanloop(getCategoryRelatedPost($childNav->slug,0,4) as $news)--}}
{{--                                                                            <div class="post post-small col-lg-3 col-md-4 mb-30">--}}
{{--                                                                                <div class="post-wrap">--}}

{{--                                                                                    <a href="{{ url(@$news->url()) }}" class="image">--}}
{{--                                                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">--}}

{{--                                                                                    </a>--}}
{{--                                                                                    <div class="content">--}}
{{--                                                                                        <h5 class="title">--}}
{{--                                                                                            <a href="{{ url(@$news->url()) }}">{{@$news->title}}</a>                                                                                            </h5>--}}
{{--                                                                                    </div>--}}
{{--                                                                                </div>--}}
{{--                                                                            </div>--}}
{{--                                                                            @enddarpanloop--}}

{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                @endif--}}
{{--                                                            @endforeach--}}

{{--                                                        </div><!-- Menu Tab Content End -->--}}

{{--                                                    </div><!-- Mega Menu End -->--}}
{{--                                                    @else--}}
                                                        <ul class="sub-menu">
                                                            @foreach($nav->children[0] as $childNav)
                                                                @if($childNav->type == 'custom')
                                                                    <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}}" >
                                                                        <a href="/{{@$childNav->slug}}" class="" @if(@$childNav->target !== NULL) target="_blank" @endif >
                                                                            @if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif
                                                                        </a>
                                                                    </li>
                                                                @elseif($childNav->type == 'category')
                                                                    <li  class="{{request()->is('category/'.@$childNav->slug) ? 'active' : ''}}">
                                                                        <a class="{{ ($loop->first) ? 'active' : ''}}"
                                                                           href="{{url('category')}}/{{$childNav->slug}}"
                                                                        >  @if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                    </li>
                                                                @else
                                                                    <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}}">
                                                                        <a href="{{url('/')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL)
                                                                        target="_blank" @endif>
                                                                            @if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
{{--                                                    @endif--}}
                                                </li>
                                            @else
                                                @if($nav->type == 'custom')
                                                    <li   class="{{request()->is(@$nav->slug.'*') ? 'active' : ''}} ">
                                                        <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @elseif($nav->type == 'category')
                                                    <li   class="{{request()->is('category/'.@$nav->slug.'*') ? 'active' : ''}} ">
                                                        <a href="{{url('category')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @else
                                                    <li   class="{{request()->is(@$nav->slug.'*') ? 'active' : ''}} ">
                                                        <a href="{{url('/')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->

                        <div class="mobile-logo d-md-none"><a href="/">
                                <img src="<?php if(@$setting_data->logo_white){?>{{asset('/images/settings/'.@$setting_data->logo_white)}}<?php }?>"  alt=" दर्पण दैनिक | Darpan Dainik " title=" दर्पण दैनिक | Darpan Dainik ">
                            </a>
                        </div>

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

                                    <li class="{{request()->is('/') ? 'active' : ''}}">
                                        <a href="/">गृह पृष्ठ</a>
                                    </li>
                                    @if(!empty($top_nav_data))
                                        @foreach($top_nav_data as $nav)
                                            @if(!empty($nav->children[0]))
                                                <li class="{{request()->is(@$nav->slug)  ? 'active' : ''}}">
                                                    <a href="{{url('category')}}/{{$nav->slug}}">@if(@$nav->name == NULL) {{ucwords(@$nav->title)}} @else {{ucwords(@$nav->name)}} @endif</a>
                                                    <!-- Submenu Start -->
                                                    <ul class="sub-menu">
                                                        @foreach($nav->children[0] as $childNav)
                                                            @if($childNav->type == 'custom')
                                                                <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}}" >
                                                                    <a href="/{{@$childNav->slug}}" class="" @if(@$childNav->target !== NULL) target="_blank" @endif >
                                                                        @if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif
                                                                    </a>
                                                                </li>
                                                            @elseif($childNav->type == 'category')
                                                                <li  class="{{request()->is('category/'.@$childNav->slug) ? 'active' : ''}}">
                                                                    <a class="{{ ($loop->first) ? 'active' : ''}}"
                                                                       href="{{url('category')}}/{{$childNav->slug}}"
                                                                    >  @if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                </li>
                                                            @else
                                                                <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}}">
                                                                    <a href="{{url('/')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL)
                                                                    target="_blank" @endif>
                                                                        @if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>

                                                </li>
                                            @else
                                                @if($nav->type == 'custom')
                                                    <li   class="{{request()->is(@$nav->slug.'*') ? 'active' : ''}} ">
                                                        <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @elseif($nav->type == 'category')
                                                    <li   class="{{request()->is('category/'.@$nav->slug.'*') ? 'active' : ''}} ">
                                                        <a href="{{url('category')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @else
                                                    <li   class="{{request()->is(@$nav->slug.'*') ? 'active' : ''}} ">
                                                        <a href="{{url('/')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                @endif
                                            @endif
                                        @endforeach
                                    @endif

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
{{--    <div class="breaking-news-section section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}

{{--                    <!-- Breaking News Wrapper Start -->--}}
{{--                    <div class="breaking-news-wrapper">--}}

{{--                        <!-- Breaking News Title -->--}}
{{--                        <h5 class="breaking-news-title float-start">नवीनतम खबर</h5>--}}

{{--                        <!-- Breaking Newsticker Start -->--}}
{{--                        <ul class="breaking-news-ticker float-start">--}}

{{--                            @darpanloop(getLatestPosts(0,8) as $latest_news_feature)--}}
{{--                            <li>--}}
{{--                                <a href="{{ url(@$latest_news_feature->url()) }}">--}}
{{--                                    {{@$latest_news_feature->title}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            @enddarpanloop--}}

{{--                        </ul><!-- Breaking Newsticker Start -->--}}

{{--                        <!-- Breaking News Nav -->--}}
{{--                        <div class="breaking-news-nav">--}}
{{--                            <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>--}}
{{--                            <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>--}}
{{--                        </div>--}}

{{--                    </div><!-- Breaking News Wrapper End -->--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div><!-- Breaking News Section End -->--}}

    <!-- Featured Above adds Start -->
    @if(count(getHomepageBanner('home-above-featured-post',0,1))> 0 )
        <div class="section mt-20">
            <div class="container">
                @darpanloop(getHomepageBanner('home-above-featured-post',0,1) as $banner)
                <div class="header-banner">
                    <div class="col-12 post-container featured">
                        <a href="{{@$banner->url}}" target="_blank" class="post-middle-banner">
                            <img src="{{asset('/images/banners/'.@$banner->image)}}" alt="{{$banner->name}}"  />
                        </a>
                    </div>
                </div>
                @enddarpanloop
            </div>
        </div>
@endif
