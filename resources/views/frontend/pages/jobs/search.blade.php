@extends('frontend.layouts.master')
@section('title') Search | Jobs @endsection
@section('css')
    <style>
        .text-flow {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2; /* number of lines to show */
            line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
@endsection
@section('content')

    <!-- Page Banner Start -->
    <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h1 class="page-title wow fadeInUp delay-0-2s">Search Result For : <strong>{{$title}}</strong></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/jobs')}}">Job</a></li>
                        <li class="breadcrumb-item active">Search</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="banner-shapes">
            <div class="circle wow zoomInLeft delay-0-2s" data-wow-duration="2s"></div>
            <img class="shape-one" src="{{asset('assets/frontend/images/shapes/hero-shape1.png')}}" alt="Shape">
            <img class="shape-two" src="{{asset('assets/frontend/images/shapes/hero-shape2.png')}}" alt="Shape">
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- Blog Grid Area start -->
    <section class="blog-grid-area py-130 rel z-1">
        <div class="container">
            <div class="row ">
                @if(count($alljobs) > 0)
                    <div class="col-lg-8">
                        @foreach($alljobs as $job)
                            <div class="blog-list-item wow fadeInUp delay-0-2s animated" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="image" style="height: auto;align-self: auto;width: 300px;">
                                    <img src="<?php if(@$job->image){?>{{asset('/images/job/'.@$job->image)}}<?php }?>" alt="{{$job->name}}" style="object-fit: cover;height: 100%;">
                                </div>
                                <div class="blog-content">
                                    <div class="content">
                                        <ul class="blog-meta">
                                            <li>

                                                <img src="{{ ($job->created_by !== null) ? asset('images/user/'.\App\Models\User::find($job->created_by)->image) :  asset('assets/backend/images/default.png')}}" alt="Author">
                                                <a href="#">{{  ucfirst(\App\Models\User::find($job->created_by)->name)}}</a>
                                            </li>
                                            <li>
                                                <i class="far fa-calendar-alt"></i>
                                                <a href="#">{{date('M j, Y',strtotime(@$job->start_date))}} - {{date('M j, Y',strtotime(@$job->end_date))}}</a>
                                            </li>
                                        </ul>
                                        <h4><a href="{{route('job.single',@$job->slug)}}">{{$job->name}}</a></h4>
                                        <div class="text-flow">{!! $job->description !!}</div>
                                        <a class="read-more" href="{{route('job.single',@$job->slug)}}">Read More <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $alljobs->links('vendor.pagination.default') }}

                    </div>
                    <div class="col-lg-4">
                        @include('frontend.pages.jobs.index_sidebar')
                    </div>
                @else

                    <section class="no-results not-found">
                        <header class="page-header">
                            <h2 class="page-title">Nothing Found</h2>
                        </header>
                        <div class="page-content">
                            <p>It seems we cannot find what you are looking for.</p>

                        </div>
                    </section>
                @endif
            </div>


        </div>
    </section>



@endsection
