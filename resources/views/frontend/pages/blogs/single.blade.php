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
                                    <span class="categories float-end">
                                        <i class="fa fa-tags"></i>

                                        @foreach($singleBlog->categories as $cat)
                                            <a href="#">{{$cat->name}}</a>
                                            {{($loop->last) ?"":"," }}
                                        @endforeach
                                    </span>
{{--                                    <span class="meta-item view"><i class="fa fa-eye"></i>(3483)</span>--}}
                                </div>
                                <!-- Content -->
                                <div class="content editor-content" id="content">
                                    {{--                                    <!-- Description -->--}}
                                    {!! $singleBlog->description !!}
                                </div>


                                <div class="tags-social float-start">
                                    <a href="#" class="post-middle-banner mb-4">
                                        <img src="{{asset('assets/frontend/img/gifs/test-banner.png')}}" alt=""  />
                                    </a>
                                    <div class="tags float-start">
                                        <i class="fa fa-tags"></i>

                                        @foreach($singleBlog->tags as $tag)
                                            <a href="#">{{$tag->name}}</a>
                                            {{($loop->last) ?"":"," }}
                                        @endforeach
                                    </div>
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

                                    @foreach(@$singleBlog->relatedPostsByCategory() as $related)
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
                                    @endforeach
                                </div>

                            </div><!-- Post Block Body End -->

                        </div><!-- Post Block Wrapper End -->

                        <!-- Post Block Wrapper Start -->
                        <div class="post-block-wrapper">

                            <!-- Post Block Head Start -->
                            <div class="head">

                                <!-- Title -->
                                <h4 class="title">Leave a Comment</h4>

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

                    </div>

                <!-- Sidebar -->
                <div class="col-lg-3 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">Follow Us</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <div class="sidebar-social-follow">
                                        <div>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                                <h3>40,583</h3>
                                                <span>Fans</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                <h3>36,857</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                                <h3>50,883</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="dribbble">
                                                <i class="fa fa-dribbble"></i>
                                                <h3>4,743</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                    </div>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/banner/sidebar-banner-1.jpg')}}" alt="Sidebar Banner"></a>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="{{asset('assets/frontend/img/banner/sidebar-banner-2.jpg')}}" alt="Sidebar Banner"></a>

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
        });
</script>
@endsection
