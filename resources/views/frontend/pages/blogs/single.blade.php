@extends('frontend.layouts.seo_master')
@section('title'){{ucfirst(@$singleBlog->title)}} @endsection
@section('css')
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=63bf92f3cb51d30019514cad&product=sticky-share-buttons' async='async'></script>
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
    .bottom{
        top:auto;
        bottom:0;
        position:absolute;
    }

    #st-1 .st-btn:hover {
        opacity: .7;
        top: 4px!important;
    }

    </style>
@endsection
@section('seo')
    <title>{{ucfirst(@$singleBlog->title)}} | @if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else दर्पण दैनिक @endif</title>
    <meta name='description' itemprop='description'  content='{{ucfirst(@$singleBlog->meta_description)}}' />
    <meta name='keywords' content='{{ucfirst(@$singleBlog->meta_tags)}}' />
    <meta property='article:published_time' content='<?php if(@$singleBlog->updated_at !=''){?>{{@$singleBlog->updated_at}} <?php }else {?> {{@$singleBlog->created_at}} <?php }?>' />
    <meta property='article:section' content='article' />
    <meta property="og:description" content="{{ucfirst(@$singleBlog->meta_description)}}" />
    <meta property="og:title" content="{{ucfirst(@$singleBlog->meta_title)}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="Coperation" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate"  content="en-us" />
    <meta property="og:site_name" content="@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @else Win Recruit Nepal @endif" />
    <meta property="og:image" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:url" content="<?php if(@$singleBlog->image){?>{{asset('/images/blog/'.@$singleBlog->image)}}<?php }?>" />
    <meta property="og:image:size" content="300" />
@endsection
@section('content')
    <!-- Blog Section Start -->
    <div class="blog-section section">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">
                <div class="col-lg-12 col-12 margin-bottom-30">

                    <div class="single-blog big-header" id="sticky-me">
                        <div class="blog-wrap header">
                            <h1 class="title">{{ucfirst(@$singleBlog->title)}}</h1>

                            <!-- Meta -->
                            <div class="meta fix">
                                 <span class="meta-item darpan-post-time darpan-author">
                                    <img src="{{asset('assets/backend/images/canosoft-favicon.png')}}" alt="">
                                    <span>दर्पण दैनिक</span>
                                </span>
                                <span class="meta-item news-hour-block">
                                    <img src="{{asset('assets/frontend/img/clock.png')}}" alt="">
                                    <span>{{$singleBlog->publishedDateNepali()}}</span>
                                </span>
                                <span class="meta-item news-hour-block">
                                    <img src="{{asset('assets/frontend/img/comment-icon.png')}}" alt="">
                                    <span><a href="#">0 प्रतिक्रिया</a></span>
                                </span>


                                <span>
                                    <div class="sharethis-inline-share-buttons"></div>
                                </span>

                            </div>




                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-12 mb-50">

                        <div class="single-blog mb-50" id="main-content">
                            <div class="blog-wrap">

                                <a href="#" class="post-middle-banner mb-4">
                                    <img src="{{asset('assets/frontend/img/gifs/test-banner.png')}}" alt=""  />
                                </a>


                                <div class="image"><img src="{{ asset('/images/blog/'.@$singleBlog->image) }}" alt="post"></div>
                                <a href="#" class="post-middle-banner mb-4">
                                    <img src="{{asset('assets/frontend/img/gifs/test5.gif')}}" alt=""  />
                                </a>

                                <div class="meta fix">
                                    <span class="font-btn">
                                        <a id="big">अ</a>
                                        <a id="normal">अ</a>
                                        <a id="small">अ</a>
                                    </span>
                                    @if(count($singleBlog->categories)>0)
                                        <span class="categories float-end">
                                            <i class="fa fa-tags"></i>

                                            @foreach($singleBlog->categories as $cat)
                                                <a href="#">{{$cat->name}}</a>
                                                {{($loop->last) ?"":"," }}
                                            @endforeach
                                        </span>
                                    @endif
{{--                                    <span class="meta-item view"><i class="fa fa-eye"></i>(3483)</span>--}}
                                </div>
                                <!-- Content -->
                                <div class="content editor-content" id="content">
                                    {{--                                    <!-- Description -->--}}
                                    {!! $singleBlog->description !!}

{{--                                    <div class="inside-editor-content col-lg-12 col-md-6 col-12">--}}
{{--                                        <a href="#"><img src="{{asset('assets/frontend/img/gifs/side3.gif')}}" alt="Sidebar Banner"></a>--}}
{{--                                        <a href="#"><img src="{{asset('assets/frontend/img/gifs/side3.gif')}}" alt="Sidebar Banner"></a>--}}
{{--                                        <a href="#"><img src="{{asset('assets/frontend/img/gifs/side3.gif')}}" alt="Sidebar Banner"></a>--}}
{{--                                    </div>--}}


                                </div>


                                <div class="tags-social float-start">
                                    <a href="#" class="post-middle-banner mb-4">
                                        <img src="{{asset('assets/frontend/img/gifs/test-banner.png')}}" alt=""  />
                                    </a>
                                    @if(count($singleBlog->tags)>0)
                                        <div class="tags float-start">
                                            <i class="fa fa-tags"></i>

                                            @foreach($singleBlog->tags as $tag)
                                                <a href="#">{{$tag->name}}</a>
                                                {{($loop->last) ?"":"," }}
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="blog-social float-end">
                                        <div class="sharethis-inline-share-buttons"></div>
                                    </div>

                                </div>

                            </div>
                        </div>


                        @if(@$previous !== null || @$next !== null)
                        <!-- Previous & Next Post Start -->
                        <div class="post-nav mb-50">
                            @if(@$previous !== null)
                                <a href="#" class="prev-post" style="border-right: {{ (@$next !== null) ?  '1px solid #f1f1f1':"none" }}   ">
                                    <span>अघिल्लो पोस्ट</span>
                                    {{@$previous->title}}</a>
                            @endif
                            @if(@$next !== null)
                                <a href="#" class="next-post">
                                <span>अर्को पोस्ट</span>
                                {{@$next->title}}</a>
                            @endif
                        </div><!-- Previous & Next Post End -->
                        @endif


                    @if(count(@$singleBlog->relatedPostsByCategory())>0)
                        <!-- Post Block Wrapper Start -->
                        <div class="post-block-wrapper mb-50">

                            <!-- Post Block Head Start -->
                            <div class="head">
                                <!-- Title -->
                                <h4 class="title">सम्बन्धित खबर</h4>
                            </div><!-- Post Block Head End -->

                            <!-- Post Block Body Start -->
                            <div class="body">

                                <div class="two-column-post-carousel column-post-carousel post-block-carousel slick-space">

                                    @darpanloop(@$singleBlog->relatedPostsByCategory() as $related)
                                        <div class="slick-slide">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay hero-post">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="{{ asset('/images/blog/'.@$related->image) }}" alt="post"></div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="#">  {{ @$related->title }} </a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $related->publishedDateNepali() }}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div>
                                    @enddarpanloop
                                </div>

                            </div><!-- Post Block Body End -->

                        </div><!-- Post Block Wrapper End -->
                    @endif


                   <!-- comments -->
                    <div class="post-block-wrapper mb-50">

                            <!-- Post Block Head Start -->
                            <div class="head">

                                <!-- Title -->
                                <h4 class="title">प्रतिक्रिया गर्नुहोस्</h4>

                            </div><!-- Post Block Head End -->

                            <!-- Post Block Body Start -->
                            <div class="body">

                                <div class="post-comment-form">
                                    <form action="#" class="row">

                                        <div class="col-md-6 col-12 mb-20">
                                            <label for="name">Name <sup>*</sup></label>
                                            <input type="text" id="name">
                                        </div>

                                        <div class="col-md-6 col-12 mb-20">
                                            <label for="email">Email <sup>*</sup></label>
                                            <input type="text" id="email">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label for="website">Website <sup>*</sup></label>
                                            <input type="text" id="website">
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label for="message">Message <sup>*</sup></label>
                                            <textarea id="message"></textarea>
                                        </div>

                                        <div class="col-12">
                                            <input type="submit" value="Submit Comment">
                                        </div>

                                    </form>
                                </div>

                            </div><!-- Post Block Body End -->

                        </div><!-- Post Block Wrapper End -->

                    <!-- End row Post Block -->
                    <div class="row ">

                        <div class="col-lg-12 col-12 mb-50">

                            <!-- Post Block Wrapper Start -->
                            <div class="post-block-wrapper">

                                <!-- Post Block Head Start -->
                                <div class="head education-head">

                                    <!-- Title -->
                                    <h4 class="title">World News</h4>
                                </div><!-- Post Block Head End -->

                                <!-- Post bottom -->
                                <div class="body pb-0">

                                    <div class="row">

                                        <!-- Post Start -->
                                        <div class="post education-post col-md-6 col-12 mb-20">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-61.jpg')}}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="#">The week when president Safari Resigned.</a></h4>

                                                    <!-- Read More -->
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                        <!-- Post Start -->
                                        <div class="post education-post col-md-6 col-12 mb-20">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-62.jpg')}}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="#">Political Allies Are Not Friend.</a></h4>

                                                    <!-- Read More -->
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                        <!-- Post Start -->
                                        <div class="post education-post col-md-6 col-12 mb-20">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-63.jpg')}}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="3">With every sneer, Just make safari be stronge.</a></h4>

                                                    <!-- Read More -->
                                                    <a href="#" class="read-more">continue reading</a>
                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                        <!-- Post Start -->
                                        <div class="post education-post col-md-6 col-12 mb-20">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a href="#" class="image"><img src="{{asset('assets/frontend/img/post/post-64.jpg')}}" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="#">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                    <!-- Read More -->
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                    </div>
                                </div><!-- Post Block Body End -->

                            </div><!-- Post Block Wrapper End -->

                        </div>
                    </div><!-- World Post Row End -->


                </div>

                <!-- Sidebar -->
                <div class="col-lg-3 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar banners -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/banner/sidebar-banner-1.jpg')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/banner/sidebar-banner-2.jpg')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/side1.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/side2.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/side3.gif')}}" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar posts-->
                        <div class="single-sidebar">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head education-head">

                                    <!-- Tab List -->
                                    <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                        <a class="active" data-bs-toggle="tab" href="#latest-news">ताजा अपडेट</a>
                                        <a data-bs-toggle="tab" href="#popular-news">लोकप्रिय</a>
                                    </div>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="latest-news">
                                            @darpanloop(@$latestPosts as $latest)
                                                <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="#">
                                                        <div class="meta fix sidebar-time">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{  $latest->getMinsAgoinNepali($latest->created_at->diffForHumans()) }}</span>
                                                        </div>
                                                        <img src="{{ asset('/images/blog/'.@$latest->image) }}" alt="post">

                                                    </a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="#">{{$latest->title}}</a></h5>

                                                        <!-- Meta -->


                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->
                                            @enddarpanloop
                                        </div>
                                        <div class="tab-pane fade" id="popular-news">

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-35.jpg')}}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="#">Home is not a place . . . . . . it’s a feeling.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-36.jpg')}}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="#">How do you solve the local political page problem.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-33.jpg')}}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="#">Hynpodia helps female travelers find health..</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list education-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="#"><img src="{{asset('assets/frontend/img/post/post-34.jpg')}}" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="#">How do you solve the IOS page problem.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                        </div>
                                    </div>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar banners -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/banner/sidebar-banner-2.jpg')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/side2.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/side3.gif')}}" alt="Sidebar Banner"></a>

                        </div>
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/gifs/side1.gif')}}" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

        </div>
    </div><!-- Blog Section End -->


@endsection

@section('js')

    <script>
        $(window).scroll(function () {
            var threshold = 300;
            if ($(window).scrollTop() >= threshold){
                $('#sticky-me').addClass('sticky-header');
            }else{
                $('#sticky-me').removeClass('sticky-header');
            }


            var check = $("#main-content").height() + 250;
            if ($(window).scrollTop() > check)
                $('#sticky-me').addClass('bottom');
            else
                $('#sticky-me').removeClass('bottom');
        });

        $(document).ready(function () {

            var size = '22';
            $("#big").on("click",function(){
                size = size + 2;
                if(size<26 ){
                    $("#content p").css("font-size",size + "px");
                }else{
                    $("#content p").css("font-size",26 + "px");
                }
            });
            $("#normal").on("click",function(){
                size = 20;
                $("#content p").css("font-size",size + "px");
            });
            $("#small").on("click",function(){
                size = size - 2;
                if(size>14){
                    $("#content p").css("font-size",size+ "px");
                } else {
                    $("#content p").css("font-size",16+ "px");
                }
            });

            var number = $('.editor-content'). find('p').size();
            console.log(number);

            if(number => 2){
                var banner1 = '<div class="inside-editor-content col-lg-12 col-md-6 col-12"> ' +
                    '<a href="#">' +
                    '<img src="{{asset('assets/frontend/img/gifs/side3.gif')}}" alt="Sidebar Banner"></a>' +
                '</div>';
                $( ".editor-content p:nth-child(2)" ).after().append(banner1);

            }

            if(number => 4){
                var banner2 = '<div class="inside-editor-content col-lg-12 col-md-6 col-12"> ' +
                    '<a href="#">' +
                    '<img src="{{asset('assets/frontend/img/gifs/middle1.gif')}}" alt="Sidebar Banner"></a>' +
                    '<a href="#">' +
                    '<img src="{{asset('assets/frontend/img/gifs/middle2.jpeg')}}" alt="Sidebar Banner"></a>' +
                    '<a href="#">' +
                    '<img src="{{asset('assets/frontend/img/gifs/middle3.gif')}}" alt="Sidebar Banner"></a>' +
                    '</div>';
                $( ".editor-content p:nth-child(4)").after().append(banner2);
            }

            // $('.editor-content > p').each(function (i) {
            //
            //     $(this).after('ONE Single OF IMAGE ADS');
            //
            // });

        });
</script>
@endsection
