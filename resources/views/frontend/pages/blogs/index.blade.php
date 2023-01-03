@extends('frontend.layouts.master')
@section('title') Blog @endsection

@section('content')

        <!-- Page Banner Start -->
        <section class="page-banner-area pt-245 rpt-150 pb-170 rpb-100 rel z-1 bgc-lighter text-center">
            <div class="container">
                <div class="banner-inner rpt-10">
                    <h1 class="page-title wow fadeInUp delay-0-2s">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="/">home</a></li>
                            <li class="breadcrumb-item active">Blog </li>
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
                @if(count($allPosts) > 0)
                    <div class="col-lg-8">
                        <div class="row">

                          @foreach($allPosts as $post)
                            <div class="col-xl-6 col-md-6">
                                <div class="blog-grid-item wow fadeInUp delay-0-2s">
                                    <div class="image">
                                        <img src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="{{@$post->slug}}">
                                    </div>
                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li>
                                                <i class="fas fa-tasks-alt"></i>
                                                <a href="{{url('/blog/categories/'.@$post->category->slug)}}">{{ucwords(@$post->category->name)}}</a>
                                            </li>
                                            <li>
                                                <i class="far fa-calendar-alt"></i>
                                                <a href="{{route('blog.single',$post->slug)}}">{{date('M j, Y',strtotime(@$post->created_at))}}</a>
                                            </li>
                                        </ul>
                                        <h5><a href="{{route('blog.single',$post->slug)}}">
                                          {!! ucwords(Str::limit(@$post->title, 35,'...')) !!}
                                      </a></h5>
                                      
                                        <a class="read-more" href="{{route('blog.single',$post->slug)}}">Read More <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                          
                          @endforeach
                        {{ $allPosts->links('vendor.pagination.default') }}

                        </div>

                    </div>
                    <div class="col-lg-4">
                      <div class="row">
                            @include('frontend.pages.blogs.sidebar')
                      </div>
                    </div>
                  @else

                  <section class="no-results not-found">
                      <header class="page-header">
                          <h2 class="page-title">Nothing Found</h2>
                      </header>
                      <div class="page-content">
                          <p>It seems we can not find what you are looking for.</p>
                      
                      </div>
                  </section>
                  @endif
                </div>

                
            </div>
        </section>



@endsection