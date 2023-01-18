@extends('frontend.layouts.master')
@section('title') समाचार @endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css" integrity="sha512-Aa+z1qgIG+Hv4H2W3EMl3btnnwTQRA47ZiSecYSkWavHUkBF2aPOIIvlvjLCsjapW1IfsGrEO3FU693ReouVTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')

    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-12 col-12 mb-50">
                        <div class="post-block-wrapper">

                        <!-- Post Block Body Start -->
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
                        </div><!-- Post Block Body End -->

                    </div>


                </div>



            </div><!-- Feature Post Row End -->

        </div>
    </div><!-- Post Section End -->

@endsection
