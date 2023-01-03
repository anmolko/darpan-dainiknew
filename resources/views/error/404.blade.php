@extends('frontend.layouts.master')
@section('title')  Page Not Found @endsection
@section('content')
  
    <!-- Error Page Area start -->
    <section class="error-page-area py-130 rel z-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="error-content rmb-75 wow fadeInLeft delay-0-2s">
                        
                        <h1>OPPS!</h1>
                        <h3>This Page Can’t be Found</h3>
                        <p>Start building your first prototype in no time. Ogency intuitive drag & drop interface gives you all the building blocks</p>
                        <a href="/" class="theme-btn style-two mt-15 mb-50">Go to Home <i class="fas fa-angle-double-right"></i></a>
                        <div class="follow-us">
                            <h4>Follow Us</h4>
                            <div class="social-style-two">
                                @if(!empty(@$setting_data->facebook))
                                  <a href="@if(!empty(@$setting_data->facebook)) {{@$setting_data->facebook}} @endif" target="_blank" class="social-fb"
                                  ><i class="fab fa-facebook-f"></i
                                  ></a>
                                @endif
                                @if(!empty(@$setting_data->youtube))

                                  <a href="@if(!empty(@$setting_data->youtube)) {{@$setting_data->youtube}} @endif" target="_blank" class="social-youtube"
                                  ><i class="fab fa-youtube"></i
                                  ></a>
                                @endif
                                @if(!empty(@$setting_data->instagram))

                                  <a href="@if(!empty(@$setting_data->instagram)) {{@$setting_data->instagram}} @endif" target="_blank" class="social-instagram"
                                  ><i class="fab fa-instagram"></i
                                  ></a>
                                @endif
                                @if(!empty(@$setting_data->linkedin))

                                  <a href="@if(!empty(@$setting_data->linkedin)) {{@$setting_data->linkedin}} @endif" target="_blank" class="social-linkedin"
                                  ><i class="fab fa-linkedin-in"></i
                                  ></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="error-image wow fadeInRight delay-0-2s">
                        <img src="{{asset('assets/frontend/images/background/404.png')}}" alt="404 Error">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Error Page Area end -->

@endsection
