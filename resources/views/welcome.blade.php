@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
@endsection
@section('content')
    <!-- Featured post Start -->
    <div class="hero-section section mt-5 mb-20">
        <div class="featured-post featured-post-2">
            <div class="featured post-container">
                <h2>
                    <a href="#">
                        रेखालाई उपराष्ट्रपति बनाएर शंकर पोखरेललाई उपचुनाव लडाउने प्रयास असफल </a>
                </h2>
                <div class="darpan-title">
                    <div class="darpan-author-wrap">
                        <div class="darpan-author">
                            <span class="author-img">
                                <img src="{{asset('assets/backend/images/canosoft-favicon.png')}}" alt="">
                            </span>
                            <span class="author-name"> दर्पण दैनिक </span>
                        </div>
                    </div>
                    <div class="darpan-post-time">
                        <img src="{{asset('assets/frontend/img/clock.png')}}" alt="">
                        <span>१ घन्टा अगाडि</span>
                    </div>
                    <div class="darpan-user-comment">
                        <img src="{{asset('assets/frontend/img/comment-icon.png')}}" alt="">
                        <span>2</span>
                    </div>
                </div>
                <p>२१ पुस, काठमाडौं । नेकपा माओवादी केन्द्रकी सांसद रेखा शर्मालाई राजीनामा गराएर एमाले महासचिव शंकर पोखरेललाई उपचुनाव लडाउने प्रयास तत्काललाई रोकिएको छ । नेकपा एमालेको समर्थनमा माओवादी केन्द्रका अध्यक्ष पुष्पकमल दाहाल प्रचण्ड प्रधानमन्त्री...</p>
                <div class="featured-post-feauted-img">
                    <a href="https://www.onlinekhabar.com/2023/01/1243176">
                        <img src="https://www.onlinekhabar.com/wp-content/uploads/2022/10/Shankar-pokharel-and-rekha-sharma.jpg" alt="रेखालाई उपराष्ट्रपति बनाएर शंकर पोखरेललाई उपचुनाव लडाउने प्रयास असफल" loading="lazy"> </a>
                </div>
            </div>
        </div>
        <div class="featured-post featured-post-2 pt-5 pb-2 ">
            <div class="featured post-container">
                <h2>
                    <a href="#">
                        रेखालाई उपराष्ट्रपति बनाएर शंकर पोखरेललाई उपचुनाव लडाउने प्रयास असफल </a>
                </h2>
                <div class="darpan-title">
                    <div class="darpan-author-wrap">
                        <div class="darpan-author">
                            <span class="author-img">
                                <img src="{{asset('assets/backend/images/canosoft-favicon.png')}}" alt="">
                            </span>
                            <span class="author-name"> दर्पण दैनिक </span>
                        </div>
                    </div>
                    <div class="darpan-post-time">
                        <img src="{{asset('assets/frontend/img/clock.png')}}" alt="">
                        <span>१ घन्टा अगाडि</span>
                    </div>
                    <div class="darpan-user-comment">
                        <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2021/img/comment-icon.png" alt="">
                        <span>2</span>
                    </div>
                </div>
            </div>
        </div>
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


    <!-- Post section start -->
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

            <!-- Samachar Post Row Start -->
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

                                    @darpanloop(getCategoryRelatedPost(35,2,4) as $news)
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
                                                    <a href="#" class="read-more">continue reading</a>

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
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                    </div><!-- Sidebar Post Slider End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>


                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Life Style Post Row End -->

            <div class="section">
                <div class="header-banner">
                    <div class="col-12 post-container home-post-between">
                        <a href="#" class="post-middle-banner">
                            <img src="{{asset('assets/frontend/img/gifs/test2.gif')}}" alt=""  />
                        </a>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-5 col-md-6 col-12 mb-50">

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
                                        <a class="image slider-image" href="#">
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

                <div class="col-lg-3 col-md-6 col-12 mb-50">

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
                            <div class="three-row-post-carousel row-post-carousel post-block-carousel madical-post-carousel">

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

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Single Sidebar -->
                    <div class="single-sidebar">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Tab List -->
                                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                    <a class="full-width active" data-bs-toggle="tab" href="#latest-news">मनोरञ्जन</a>
                                </div>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="latest-news">

                                        @darpanloop(getCategoryRelatedPost(6,0,4) as $news)
                                            <div class="post post-small post-list education-post post-separator-border">
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

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                </div><!-- Sidebar End -->

            </div>

            <div class="section">
                <div class="header-banner">
                    <div class="col-12 post-container home-post-between">
                        <a href="#" class="post-middle-banner">
                            <img src="{{asset('assets/frontend/img/gifs/test2.gif')}}" alt=""  />
                        </a>
                    </div>
                </div>
            </div>


            <!-- Sports Post Row Start -->
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

            </div><!-- Sports Post Row End -->

            <!-- Banner Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <a href="#" class="post-middle-banner"><img src="{{asset('assets/frontend/img/gifs/test.gif')}}" alt="Banner"></a>

                </div>

            </div><!-- Banner Row End -->

            <!-- Youtube Video Row Start -->
            <div class="row">

                <!-- Video Play List Start-->
                <div class="col-lg-8 col-12 mb-50">
                    <!-- Overlay Post Start -->
                    <div class="post post-overlay hero-post mb-30">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                <img src="{{asset('assets/frontend/img/post/post-46.jpg')}}" alt="post">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>

                            <!-- Category -->
                            <a href="#" class="category sports">Health</a>

                        </div>
                    </div><!-- Overlay Post End -->

                    <!-- Overlay Post Start -->
                    <div class="post post-overlay hero-post">
                        <div class="post-wrap">

                            <!-- Image -->
                            <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                <img src="{{asset('assets/frontend/img/post/post-47.jpg')}}" alt="post">
                                <span class="video-btn"><i class="fa fa-play"></i></span>
                            </a>

                            <!-- Category -->
                            <a href="#" class="category sports">sports</a>

                        </div>
                    </div><!-- Overlay Post End -->

                </div>
                <!-- Video Play List End-->

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Hot Categories</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <ul class="sidebar-category video-category">
                                        <li><a href="#">Business (20)</a></li>
                                        <li><a href="#">Photography (05)</a></li>
                                        <li><a href="#">Lifestyle (8)</a></li>
                                        <li><a href="#">Fashion (6)</a></li>
                                        <li><a href="#">Travel (20)</a></li>
                                        <li><a href="#">Foods (30)</a></li>
                                        <li><a href="#">Technology (26)</a></li>
                                        <li><a href="#">Education (04)</a></li>
                                        <li><a href="#">Video (40)</a></li>
                                        <li><a href="#">Health (3)</a></li>
                                    </ul>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <div class="sidebar-subscribe">
                                <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                                <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                                <!-- Newsletter Form -->
                                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Youtube Video Banner Row End -->

            <!-- Technology, Fashion & Other Post Row Start -->
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head gadgets-head">

                            <!-- Title -->
                            <h4 class="title">Technology</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel gadgets-post-carousel">

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-43.jpg')}}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="#">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-43.jpg')}}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="#">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head fashion-head">

                            <!-- Title -->
                            <h4 class="title">fashion</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel fashion-post-carousel">

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-44.jpg')}}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="#">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-44.jpg')}}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="#">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">Other News</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel">

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-45.jpg')}}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="#">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-45.jpg')}}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="#">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div><!-- Technology, Fashion & Other Post Row End -->

        </div>
    </div><!-- Post Section End -->

    <!-- Instagram Section Start -->
    <div class="instagram-section section">
        <div class="container-fluid ps-0 pe-0">

            <!-- Full Width Instagram Carousel Start -->
            <div class="fullwidth-instagram-carousel instagram-carousel">

                <a href="#" class="instagram-item"><img src="{{asset('assets/frontend/img/instagram/1.jpg')}}" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="{{asset('assets/frontend/img/instagram/2.jpg')}}" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="{{asset('assets/frontend/img/instagram/3.jpg')}}" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="{{asset('assets/frontend/img/instagram/4.jpg')}}" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="{{asset('assets/frontend/img/instagram/5.jpg')}}" alt="instagram"></a>
                <a href="#" class="instagram-item"><img src="{{asset('assets/frontend/img/instagram/6.jpg')}}" alt="instagram"></a>

            </div><!-- Full Width Instagram Carousel End -->
        </div>
    </div><!-- Instagram Section End -->

@endsection
@section('js')
@endsection
