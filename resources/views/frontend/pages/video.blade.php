@extends('frontend.layouts.master')
@section('title') भिडियो समाचार @endsection

@section('content')

    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-12 col-12 mb-50">
                    <div class="post-block-wrapper all-news-block">
                        <div class="head feature-head mb-3">
                            <h4 class="title">भिडियो समाचार</h4>
                        </div>
                        <div class="body">
                            <div class="row">
                                @darpanloop(@$videoPost as $news)
                                <!-- Post Start -->
                                <div class="post sports-post post-separator-border col-md-4 col-12">
                                    <div class="post-wrap">

                                    @if(@$news->type == 'youtube')
                                            <!-- Image -->
                                            <a href="{{@$news->url}}" class="image video-popup">
                                                <img src="{{ getYoutubeThumbnail(@$news->url) }}"  width="250" alt="post">
                                                <span class="video-btn"><i class="fa fa-play"></i></span>
                                            </a>
                                    @else
                                            <!-- Image -->
                                            <a href="{{@$news->url}}" class="image video-popup">
                                                <img src="{{ getVimeoThumbnail(@$news->url) }}"  width="250" alt="post">
                                                <span class="video-btn"><i class="fa fa-play"></i></span>
                                            </a>
                                        @endif

                                    </div>
                                </div><!-- Post End -->
                                @enddarpanloop


                                {{ $videoPost->links('vendor.pagination.default') }}


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
