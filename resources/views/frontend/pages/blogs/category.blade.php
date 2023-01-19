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

    <!-- Post Header Section Start -->
    <div class="post-header-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1 border-bottom-1">
                <div class="col-12">
                    <div class="post-header category-header">

                        <div class="flex-1">
                            <!-- Title -->
                            <h3 class="title">{{ ucfirst( @$category->name )}} </h3>
                            @if(!countCategoryChildren(@$category->id))

                                <div class="pt-5 mb-remove">
                                    <ol class="page-breadcrumb pt-5 mb-remove">
                                        <li><a href="#">गृह पृष्ठ</a></li>
                                        <li class="active">{{ ucfirst( @$category->name )}} </li>
                                    </ol>
                                </div>
                            @endif
                        </div>


                    @if(countCategoryChildren(@$category->id))
                        <div class="meta fix category-single">

                            <div>
                                @foreach(categoryChildren(@$category->id) as $child)
                                    <a href="{{route('blog.category',$child->slug)}}" class="meta-item category">{{$child->name}}</a>
                                @endforeach
                            </div>
                            <div class="pt-5 mb-hide">
                                <ol class="page-breadcrumb">
                                    <li><a href="#">गृह पृष्ठ</a></li>
                                    <li class="active">{{ ucfirst( @$category->name )}} </li>
                                </ol>
                            </div>
                        </div>
                    @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(getCategoryRelatedPost(@$category->slug,0,3))
        <!-- Popular Section Start -->
        <div class="popular-section section pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider">


                        @darpanloop(getCategoryRelatedPost(@$category->slug,0,3) as $news)
                            <div class="post post-overlay">
                                <div class="post-wrap">

                                    <!-- Image -->
                                    <div class="image">
                                        <img src="{{ asset('/images/blog/'.@$news->image) }}" alt="post">
                                    </div>

                                    <!-- Content -->
                                    <div class="content">

                                        <!-- Title -->
                                        <h4 class="title">
                                            <a href="{{ url(@$news->url()) }}">{{@$news->title}}</a>
                                        </h4>

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
            </div>
        </div>
    </div><!-- Popular Section End -->
    @endif

    @if(count($allPosts)>0)
        <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-12 col-12 mb-50">
                    <div class="post-block-wrapper all-news-block">
                        <div class="body">
                            <div class="row">
                                @darpanloop(@$allPosts as $key=>$news)

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
    @endif

@endsection
