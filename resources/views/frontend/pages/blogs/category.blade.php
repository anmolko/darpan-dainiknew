@extends('frontend.layouts.master')
@section('title') {{ ucfirst( @$category->name )}} @endsection
@section('css')
<style>
.home-one a.active {
    color: #27aae1;
}
</style>
@endsection
@section('content')

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">

                <!-- Page Banner Start -->
                <div class="col-lg-8 col-12">
                    <div class="page-banner" style="background-image: url({{asset('assets/frontend/')}}img/bg/page-banner-politic.jpg)">
                        <h2>Category: <span class="category-politic">politic</span></h2>
                        <ol class="page-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">politic</li>
                        </ol>
                        <p>Vestibulum vulputate sit amet orci sed egestas. Integer lobortis metus in cursus moll condimentum arcu in diam pharetra, nec vehicula urna vehicula. Nullam iaculis odio orci, ut tristique nibh ultrices vitae. Praesent sit amet mauris iaculis, </p>
                    </div>
                </div><!-- Page Banner End -->

                <div class="page-banner-image col-lg-4 col-12 d-none d-lg-block"><img src="{{asset('assets/frontend/img/banner/page-banner-politic.jpg')}}" alt="Page Banner Image"></div>

            </div>
        </div>
    </div><!-- Page Banner Section End -->

    @if(count($allPosts)>3)
        <!-- Popular Section Start -->
        <div class="popular-section section bg-dark pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay">
                            <div class="post-wrap">

                                <!-- Image -->
                                <div class="image"><img src="{{asset('assets/frontend/img/post/post-149.jpg')}}" alt="post"></div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay">
                            <div class="post-wrap">

                                <!-- Image -->
                                <div class="image"><img src="{{asset('assets/frontend/img/post/post-150.jpg')}}" alt="post"></div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">With every sneer, Just make safari be stronge.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->

                        <!-- Overlay Post Start -->
                        <div class="post post-overlay">
                            <div class="post-wrap">

                                <!-- Image -->
                                <div class="image"><img src="{{asset('assets/frontend/img/post/post-151.jpg')}}" alt="post"></div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Title -->
                                    <h4 class="title"><a href="post-details.html">Going for your first step? here what you need to know.</a></h4>

                                    <!-- Meta -->
                                    <div class="meta fix">
                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>
                                    </div>

                                </div>

                            </div>
                        </div><!-- Overlay Post End -->



                    </div><!-- Popular Post Slider End -->

                </div>
            </div>
        </div>
    </div><!-- Popular Section End -->
    @endif

    <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-12 col-12 mb-50">
                    <div class="post-block-wrapper all-news-block">
                        <div class="body">
                            <div class="row">
                                @darpanloop(@$allPosts as $news)
                                <!-- Post Start -->
                                <div class="post sports-post post-separator-border col-md-4 col-12">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="{{ url(@$news->url()) }}"><img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="{{ url(@$news->url()) }}">{{@$news->title}}</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->
                                @enddarpanloop


                                {{ $allPosts->links('vendor.pagination.default') }}


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
