@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <!-- Featured post Start -->
    <div class="hero-section section mt-5 mb-20">
        @foreach($featured as $news)



        <div class="featured-post featured-post-2 {{!$loop->first ? "pt-5 pb-2":""}}">
            <div class="featured post-container">
                <h2>
                    <a href="{{ url(@$news->url()) }}">
                        {{@$news->title}} </a>
                </h2>
                <div class="darpan-title">
                    <div class="darpan-author-wrap">
                        <div class="darpan-author">
                            <span class="author-img">

                                <img src="{{ ($news->author->image !== null) ? asset('images/user/'.@$news->author->image) :  asset('assets/backend/images/canosoft-favicon.png')}}" alt="">
                            </span>
                            <span class="author-name"> {{ ucfirst(@$news->author->name)}}  </span>
                        </div>
                    </div>
                    <div class="darpan-post-time">
                        <img src="{{asset('assets/frontend/img/clock.png')}}" alt="">
                        <span>{{  @$news->getMinsAgoinNepali() }}</span>
                    </div>
                    <div class="darpan-user-comment">
                        <img src="{{asset('assets/frontend/img/comment-icon.png')}}" alt="">
                        <span>0</span>
                    </div>
                </div>
                @if($loop->first || $news->show_featured_image !== null )
                <p>  {{ (@$news->excerpt !== null) ? @$news->excerpt: @$news->shortContent(60)}}</p>
                <div class="featured-post-img">
                    <a href="{{ url(@$news->url()) }}">
                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="{{@$news->title}}" loading="lazy">
                    </a>
                </div>
                @endif
            </div>
        </div>

        @endforeach

    </div>

    <!-- Featured post below adds Section Start -->
    <div class="section">
        <div class="container">
            <div class="header-banner">
                <div class="col-12 post-container featured">
                    <a href="#" class="post-middle-banner">
                        <img src="{{asset('assets/frontend/img/gifs/test2.gif')}}" alt=""  />
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- First Post section start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- Latest Post Row Start -->
            <div class="row">

                <div class="col-lg-9 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head feature-head">

                            <!-- Title -->
                            <h4 class="title">ताजा अपडेट</h4>

                            <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>
                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <div class="row">

                                <!-- Post Wrapper Start -->
                                <div class="col-md-7 col-12 mb-20">


                                    @darpanloop(getLatestPosts(0,1) as $latest_news_feature)
                                        <!-- Post Start -->
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="{{ url(@$latest_news_feature->url()) }}"><img src="{{ asset('/images/blog/'.@$latest_news_feature->image) }}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ url(@$latest_news_feature->url()) }}">{{@$latest_news_feature->title}}</a></h4>
                                                    <!-- Description -->
                                                    <p>  {{ (@$latest_news_feature->excerpt !== null) ? @$latest_news_feature->excerpt: @$latest_news_feature->shortContent(60)}}</p>



                                                </div>

                                            </div>
                                        @enddarpanloop
                                    </div><!-- Post End -->


                                </div><!-- Post Wrapper End -->

                                <!-- Small Post Wrapper Start -->
                                <div class="col-md-5 col-12 mb-20">

                                    @darpanloop(getLatestPosts(1,4) as $latest_news_feature)

                                    <!-- Post Small Start -->
                                    <div class="post post-small post-list feature-post post-separator-border">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="{{ url(@$latest_news_feature->url()) }}"><img src="{{ asset('/images/blog/'.@$latest_news_feature->image) }}" alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="{{ url(@$latest_news_feature->url()) }}">{{@$latest_news_feature->title}}</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i> {{  @$latest_news_feature->getMinsAgoinNepali() }} </span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Post Small End -->
                                    @enddarpanloop


                                </div><!-- Small Post Wrapper End -->

                            </div>

                        </div><!-- Post Block Body End -->


                    </div><!-- Post Block Wrapper End -->
                    <div class="post-block-wrapper banner-below-post">
                        <div class="post-middle-banner">
                            <a href="#" class="post-middle-banner"><img src="{{asset('assets/frontend/img/banner/post-middle-1.jpg')}}" alt="Banner"></a>
                        </div>
                    </div>

                </div>

                <!-- Sidebar Ads Start -->
                <div class="col-lg-3 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

            <!-- Main News Post Row Start -->
            <div class="row ">

                <div class="col-lg-9 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">

                            <!-- Title -->
                            <h4 class="title">प्रमुख समाचार</h4>
                            <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>


                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">


                            <div class="row">

                                <!-- Small Post Wrapper Start -->
                                <div class="col-md-6 col-12 mb-20">

                                    @darpanloop(getCategoryRelatedPost(35,2,5) as $news)
                                    <div class="post post-small post-list life-style-post post-separator-border">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="{{ url(@$news->url()) }}">
                                                <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                            </a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Small Post End -->
                                    @enddarpanloop
                                </div><!-- Small Post Wrapper End -->


                                <div class="col-md-6 col-12 mb-20">
                                        @darpanloop(getCategoryRelatedPost(35,0,2) as $news)
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                <!-- Image -->

                                                <div class="image">
                                                    <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                            </div><!-- Overlay Post End -->
                                        @enddarpanloop
                                </div>



                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-3 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head life-style-head">

                                    <!-- Title -->
                                    <h4 class="title">Make It Mordern</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Slider Start -->
                                    <div class="sidebar-post-carousel post-block-carousel life-style-post-carousel">

                                        <!-- Post Start -->
                                        <div class="post life-style-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-25.jpg')}}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="#">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                    <!-- Read More Button -->
                                                    <a href="#" class="read-more">पुरा पढ्नुहोस् <i class="fa fa-angle-right"></i></a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                        <!-- Post Start -->
                                        <div class="post life-style-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-25.jpg')}}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="#">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                    <!-- Read More Button -->
                                                    <a href="#" class="read-more">पुरा पढ्नुहोस् </a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                    </div><!-- Sidebar Post Slider End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>


                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Main News Post Row End -->

            <div class="section">
                <div class="header-banner">
                    <div class="col-12 post-container home-post-between">
                        <a href="#" class="post-middle-banner">
                            <img src="{{asset('assets/frontend/img/gifs/test2.gif')}}" alt=""  />
                        </a>
                    </div>
                </div>
            </div>

            <!-- Politics Post Row Start -->
            <div class="row">

                <div class="col-lg-8 col-md-6 col-12 mb-50 flex-grow">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">

                            <!-- Title -->
                            <h4 class="title">राजनीति</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="four-row-post-carousel row-post-carousel post-block-carousel education-post-carousel">

                                @darpanloop(getCategoryRelatedPost(33,0,8) as $news)

                                    <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image slider-image" href="{{ url(@$news->url()) }}">
                                            <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                        </a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="inner-title title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                @enddarpanloop



                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-6 col-12 mb-50 flex-grow">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head madical-head">

                            <!-- Title -->
                            <h4 class="title">विचार</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="four-row-post-carousel row-post-carousel post-block-carousel madical-post-carousel">

                                @darpanloop(getCategoryRelatedPost(9,0,9) as $news)
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                    {{--                                        <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-31.jpg')}}" alt="post"></a>--}}

                                    <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title">
                                                <a href="{{ url(@$news->url()) }}">
                                                    {{@$news->title}}
                                                </a>
                                            </h4>
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @enddarpanloop



                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div><!-- Politics Post Row End -->

            <div class="section">
                <div class="header-banner">
                    <div class="col-12 post-container home-post-between">
                        <a href="#" class="post-middle-banner">
                            <img src="{{asset('assets/frontend/img/gifs/test2.gif')}}" alt=""  />
                        </a>
                    </div>
                </div>
            </div>

            <!-- World Post Row Start -->
            <div class="row ">

                <!-- Sidebar Start -->
                <div class="col-lg-3 col-12 mb-50">
                    <div class="row sidebar-sticky">

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/side2.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                    </div>
                </div><!-- Sidebar End -->

                <div class="col-lg-9 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">

                            <!-- Title -->
                            <h4 class="title">अथ॔</h4>
                            <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <div class="row">

                                @darpanloop(getCategoryRelatedPost(2,0,6) as $news)
                                    <div class="post education-post col-md-6 col-12 mb-20">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="{{ url(@$news->url()) }}">
                                            <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                        </a>
                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                            <!-- Read More Button -->
                                            <a href="{{ url(@$news->url()) }}" class="read-more">पुरा पढ्नुहोस् <i class="fa fa-angle-right"></i></a>

                                        </div>

                                    </div>
                                </div><!-- Post End -->
                                @enddarpanloop

                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>



            </div><!-- World Post Row End -->

            <!-- education/health Post Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">शिक्षा-स्वास्थ्य</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <div class="row">

                                <!-- Overlay Post Wrapper Start -->
                                <div class="col-lg-8 col-12">

                                    <div class="row">

                                        @foreach(getCategoryRelatedPost(8,0,3) as $news)
                                            <div class="post post-overlay post-large sports-post {{ ($loop->first) ? "col-12":"col-6"}} mb-20">
                                                <div class="post-wrap">

                                                    <!-- Image -->

                                                    <div class="image">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->
                                        @endforeach
                                    </div>

                                </div><!-- Overlay Post Wrapper End -->

                                <!-- Post Wrapper Start -->
                                <div class="col-lg-4 col-12">
                                    <div class="row">

                                        <div class="col-lg-12 col-md-6 col-12 mb-20">

                                            @foreach(getCategoryRelatedPost(8,3,1) as $news)

                                                <!-- Post Start -->
                                                <div class="post sports-post">
                                                    <div class="post-wrap">

                                                        <!-- Image -->

                                                        <a class="image" href="{{ url(@$news->url()) }}">
                                                            <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                        </a>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                            <!-- Description s-->
                                                            <p>  {{ (@$latest_news_feature->excerpt !== null) ? @$latest_news_feature->excerpt: @$latest_news_feature->shortContent(60)}}</p>

                                                        </div>
                                                    </div>
                                                </div><!-- Post End -->
                                            @endforeach

                                        </div>

                                        <div class="col-lg-12 col-md-6 col-12 mb-20">

                                            @foreach(getCategoryRelatedPost(8,4,3) as $news)
                                                <div class="post post-small post-list sports-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ url(@$news->url()) }}">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>
                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div><!-- Post Wrapper End -->

                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div><!-- education/health Post Row End -->

            <!-- Banner Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <a href="#" class="post-middle-banner"><img src="{{asset('assets/frontend/img/gifs/test.gif')}}" alt="Banner"></a>

                </div>

            </div><!-- Banner Row End -->





        </div>
    </div><!-- First Post Section End -->

    <!-- Second Post section start -->
    <div class="popular-section background section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">

                            <!-- Title -->
                            <h4 class="title">प्रदेश सम्बन्धित</h4>

                            <a href="#" class="all-news ml-15 align" style=""><i class="fa fa-angle-right"></i></a>

                        @if(countCategoryChildren(4))
                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list life-style-post-tab-list nav d-none d-md-block">
                                @foreach(categoryChildren(4) as $child)
                                <li><a class="{{($loop->first) ? "active":""}}" data-bs-toggle="tab" href="#pradesh-cat-{{$child->id}}">{{$child->name}}</a></li>
                                @endforeach

                            </ul><!-- Tab List End -->
                            @endif


                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                            @foreach(categoryChildren(4) as $child)

                                <div class="tab-pane fade {{ ($loop->first) ? "show active":""}}" id="pradesh-cat-{{$child->id}}">

                                    <div class="row">

                                     @foreach(getCategoryRelatedPost($child->id,0,7) as $news)
                                            @if($loop->first)
                                            <!-- Overlay Post Start -->
                                            <div class="post post-large post-overlay life-style-post post-separator-border col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <div class="image"><img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post"></div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Overlay Post End -->
                                            @else
                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="{{ url(@$news->url()) }}">
                                                    <img src="{{ asset('/images/blog/'.@$news->image) }}"alt="post">
                                                </a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h3 class="title2"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h3>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->
                                            @endif
                                     @endforeach

                                    </div>

                                </div>
                            @endforeach

                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>
            </div>
            <div class="row">

                <div class="col-12">

                    <a href="#" class="post-middle-banner"><img src="{{asset('assets/frontend/img/gifs/test.gif')}}" alt="Banner"></a>

                </div>

            </div>
        </div>
    </div><!-- Second Post Section End -->

    <div class="post-section section mt-50">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head feature-head">
                            <h4 class="title">समाज</h4>
                            <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>
                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    @darpanloop(getCategoryRelatedPost(7,0,2) as $news)
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="{{ url(@$news->url()) }}">
                                                    <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                </a>
                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
        {{--                                                <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>--}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @enddarpanloop
                                </div>


                                <!-- Small Post Wrapper Start -->
                                <div class="col-md-6 col-12 mb-20">

                                    @darpanloop(getCategoryRelatedPost(7,2,8) as $news)
                                        <div class="post post-small post-list feature-post post-separator-border">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="{{ url(@$news->url()) }}">
                                                <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                            </a>
                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    @enddarpanloop

                                </div>

                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <a href="#" class="post-middle-banner"><img src="{{asset('assets/frontend/img/gifs/test.gif')}}" alt="Banner"></a>

                </div>

            </div>
            <!-- Entertainment Section Start -->
            <div class="hero-section background section mt-30 mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col post-block-wrapper">
                            <div class="head feature-head mb-3">
                                <h4 class="title">मनोरञ्जन</h4>
                                <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="row row-1">

                                <div class="order-lg-2 col-lg-6 col-12">

                                    <!-- Hero Post Slider Start -->
                                    <div class="post-carousel-1">

                                        @darpanloop(getCategoryRelatedPost(6,0,4) as $news)

                                        <!-- Overlay Post Start -->
                                        <div class="post post-large post-overlay hero-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <div class="image">
                                                    <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                </div>

                                                <!-- Category -->


                                                <!-- Content -->
                                                <div class="content">
                                                    <!-- Title -->
                                                    <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Overlay Post End -->
                                        @enddarpanloop

                                    </div><!-- Hero Post Slider End -->

                                </div>

                                <div class="order-lg-1 col-lg-3 col-12">
                                    <div class="row row-1">
                                        @darpanloop(getCategoryRelatedPost(6,4,2) as $news)
                                            <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <div class="image">
                                                    <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                </div>


                                                <!-- Content -->
                                                <div class="content">
                                                    <!-- Title -->
                                                    <h4 class="title" style="font-size: 20px;"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div><!-- Overlay Post End -->
                                        @enddarpanloop


                                    </div>
                                </div>

                                <div class="order-lg-3 col-lg-3 col-12">
                                    <div class="row row-1">

                                        @darpanloop(getCategoryRelatedPost(6,6,2) as $news)
                                            <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </div>


                                                    <div class="content">
                                                        <!-- Title -->
                                                        <h4 class="title" style="font-size: 20px;"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->
                                        @enddarpanloop


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Entertainment Section End -->

            <!-- Farms Row Start -->
            <div class="row">
                <div class="col-lg-9 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">कृषि</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                @foreach(getCategoryRelatedPost(36,0,3) as $news)
                                    @if($loop->first)
                                        <div class="post sports-post post-separator-border">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="{{ url(@$news->url()) }}">
                                                <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                            </a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                </div>

                                                <p>  {{ (@$latest_news_feature->excerpt !== null) ? @$latest_news_feature->excerpt: @$latest_news_feature->shortContent(60)}}</p>

                                                <!-- Read More -->
                                                <a href="{{ url(@$news->url()) }}" class="read-more">पुरा पढ्नुहोस् <i class="fa fa-angle-right"></i></a>

                                            </div>

                                        </div>
                                    </div>
                                    @else
                                        <div class="post post-small post-list sports-post post-separator-border">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="{{ url(@$news->url()) }}">
                                                <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                            </a>
                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Small Post End -->
                                    @endif
                                @endforeach
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    @foreach(getCategoryRelatedPost(36,3,3) as $news)
                                        @if($loop->first)
                                            <div class="post sports-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ url(@$news->url()) }}">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>

                                                        <p>  {{ (@$latest_news_feature->excerpt !== null) ? @$latest_news_feature->excerpt: @$latest_news_feature->shortContent(60)}}</p>

                                                        <!-- Read More -->
                                                        <a href="{{ url(@$news->url()) }}" class="read-more">पुरा पढ्नुहोस् <i class="fa fa-angle-right"></i></a>

                                                    </div>

                                                </div>
                                            </div>
                                        @else
                                            <div class="post post-small post-list sports-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ url(@$news->url()) }}">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>
                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            <!-- Small Post Start -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>
                <!-- Sidebar Start -->
                <div class="col-lg-3 col-12 mb-50">
                    <div class="row">

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->
            </div><!-- Farms Row End -->

            <div class="row">

                <div class="col-12 mb-5">

                    <a href="#" class="post-middle-banner"><img src="{{asset('assets/frontend/img/gifs/test.gif')}}" alt="Banner"></a>

                </div>

            </div>

        </div>
    </div>

    <!-- Feature Section Start -->
    <div class="popular-section section pt-50 pb-50">
        <div class="container">
            <div class="post-block-single">
                <div class="head feature-head mb-3">
                    <h2 class="title">फिचर</h2>
                    <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <!-- Feature Post Slider Start -->
            <div class="popular-post-slider slick-space">

                @darpanloop(getCategoryRelatedPost(5,0,8) as $news)
                    <div class="slick-slide">
                        <div class="post post-overlay post-small post-dark popular-post">
                            <div class="post-wrap">

                                <!-- Image -->

                                <div class="image">
                                    <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                </div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @enddarpanloop

            </div><!-- Popular Post Slider End -->
        </div>
    </div>



    <div class="post-section section mt-50">
        <div class="container">
            <!-- Sports Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">खेल</h4>
                            <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>


                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <div class="row">

                                <!-- Post Wrapper Start -->
                                <div class="col-lg-4 col-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-12 mb-20">

                                            @foreach(getCategoryRelatedPost(3,3,6) as $news)
                                                <div class="post post-small post-list sports-post post-separator-border">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a class="image" href="{{ url(@$news->url()) }}">
                                                            <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                        </a>
                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div><!-- Post Wrapper End -->
                                <!-- Overlay Post Wrapper Start -->
                                <div class="col-lg-8 col-12">

                                    <div class="row">

                                        @foreach(getCategoryRelatedPost(3,0,3) as $news)
                                            <div class="post post-overlay post-large sports-post {{ ($loop->last) ? "col-12":"col-6"}} mb-20">
                                                <div class="post-wrap">

                                                    <!-- Image -->

                                                    <div class="image">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->
                                        @endforeach
                                    </div>

                                </div><!-- Overlay Post Wrapper End -->



                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div>

            <!-- amtarvarta Row -->
            <div class="row">
                <div class="col-lg-3 col-12 mb-50">
                    <div class="row">

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/homepageadds.gif')}}" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

                <div class="col-lg-9 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">अन्तर्वार्ता</h4>
                            <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>


                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    @foreach(getCategoryRelatedPost(10,0,3) as $news)
                                        @if($loop->last)
                                            <div class="post sports-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ url(@$news->url()) }}">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>
                                                        <!-- Read More -->
                                                        <a href="{{ url(@$news->url()) }}" class="read-more">पुरा पढ्नुहोस् <i class="fa fa-angle-right"></i></a>

                                                    </div>

                                                </div>
                                            </div>
                                        @else
                                            <div class="post post-small post-list sports-post post-separator-border">
                                                <div class="post-wrap" style="padding-bottom: 26px;">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ url(@$news->url()) }}">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>
                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    @foreach(getCategoryRelatedPost(36,3,3) as $news)
                                        @if($loop->first)
                                            <div class="post sports-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ url(@$news->url()) }}">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>
                                                        <!-- Read More -->
                                                        <a href="{{ url(@$news->url()) }}" class="read-more">पुरा पढ्नुहोस् <i class="fa fa-angle-right"></i></a>

                                                    </div>

                                                </div>
                                            </div>
                                        @else
                                            <div class="post post-small post-list sports-post post-separator-border">
                                                <div class="post-wrap" style="padding-bottom: 26px;">

                                                    <!-- Image -->
                                                    <a class="image" href="{{ url(@$news->url()) }}">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>
                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        @endif
                                    @endforeach
                                </div>

                            </div>
                            <!-- Small Post Start -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>
                <!-- Sidebar Start -->

            </div><!-- amtarvarta Row End -->


            <div class="row">

                <div class="col-12 mb-5">

                    <a href="#" class="post-middle-banner"><img src="{{asset('assets/frontend/img/gifs/test.gif')}}" alt="Banner"></a>

                </div>

            </div>

            <!-- World Post Row Start -->
            <div class="row ">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">

                            <!-- Title -->
                            <h4 class="title">विश्व</h4>
                            <a href="#" class="all-news align" style=""><i class="fa fa-angle-right"></i></a>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <div class="row">
                                @darpanloop(getCategoryRelatedPost(34,0,6) as $news)
                                    <div class="post education-post col-md-6 col-12 mb-20">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a href="{{ url(@$news->url()) }}" class="image">
                                                <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                            </a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h2 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                <!-- Read More -->
                                                <a href="{{ url(@$news->url()) }}" class="read-more">पुरा पढ्नुहोस् <i class="fa fa-angle-right"></i></a>

                                            </div>

                                        </div>
                                    </div>
                                @enddarpanloop


                            </div>

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Other News Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head education-head">

                                    <!-- Title -->
                                    <h4 class="title">अन्य</h4>
                                    <a href="#" class="all-news"><i class="fa fa-angle-right"></i></a>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Start -->
                                    <div class="row">

                                        @darpanloop(getCategoryRelatedPost(38,0,8) as $news)
                                            <div class="post post-small post-list life-style-post post-separator-border col-lg-12 col-md-6 col-12">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a href="{{ url(@$news->url()) }}" class="image">
                                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                                    </a>
                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h2>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{@$news->publishedDateNepali()}}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                        @enddarpanloop


                                    </div><!-- Sidebar Post End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                    </div>
                </div><!-- Other News End -->

            </div><!-- World Post Row End -->

        </div>
    </div>

@endsection
@section('js')

@endsection
