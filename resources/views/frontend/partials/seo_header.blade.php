<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Win Recruit Nepal"/>
		<link rel="canonical" href="https://winrecruitnepal.com/" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

        @yield('seo')

		<!-- FAVICON AND TOUCH ICONS -->

		<link rel="shortcut icon" type="image/x-icon" href="<?php if(@$setting_data->favicon){?>{{asset('/images/settings/'.@$setting_data->favicon)}}<?php }?>">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@400;500;600&amp;family=Kumbh+Sans:wght@400;500;700&amp;family=Shadows+Into+Light&amp;display=swap" rel="stylesheet">
    
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flaticon.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome-5.14.0.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.min.css')}}">
    <!-- Type Writer -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.animatedheadline.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.min.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">

		 <!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id={{@$setting_data->google_analytics}}"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', '{{@$setting_data->google_analytics}}');
		</script>
    <style>
      .main-menu .navbar-collapse li.active a {
          color: #27aae1;
      }
    </style>
        @yield('css')

	</head>

  <body class="home-one">
    <div class="page-wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader"></div> -->

        <!-- main header -->
        <header class="main-header {{request()->is('/') ? 'header-two' : 'header-three menu-absolute'}} ">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="/">
                              @if(request()->is('/'))
                              <img src="<?php if(@$setting_data->logo_white){?>{{asset('/images/settings/'.@$setting_data->logo_white)}}<?php } ?>" alt="Logo white">

                              @else
                              <img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"  alt="Win Recruit Nepal" title="Win Recruit Nepal">
                              
                              @endif
                            </a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                   <div class="mobile-logo my-15">
                                       <a href="/">
                                       @if(request()->is('/'))
                                        <img src="<?php if(@$setting_data->logo_white){?>{{asset('/images/settings/'.@$setting_data->logo_white)}}<?php } ?>" alt="Logo white">

                                        @else
                                        <img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }?>"  alt="Win Recruit Nepal" title="Win Recruit Nepal">
                                        
                                        @endif
                                       </a>
                                   </div>
                                   
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                       
                                        <li class="{{request()->is('/') ? 'active' : ''}} ">
                                          <a href="/" >Home</a>
                                        </li>

                                        @if(!empty($top_nav_data))
                                          @foreach($top_nav_data as $nav)
                                              @if(!empty($nav->children[0]))

                                                  <li id="{{@$loop->index}}" class="{{request()->is(@$nav->slug)  ? 'active' : ''}} dropdown">
                                                      <a href="#" class="">@if(@$nav->name == NULL) {{ucwords(@$nav->title)}} @else {{ucwords(@$nav->name)}} @endif </a>

                                                      <ul >

                                                          @foreach($nav->children[0] as $childNav)
                                                              @if($childNav->type == 'custom')

                                                                  <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}} @if(!empty($childNav->children[0])) dropdown @endif ">
                                                                      <a href="/{{@$childNav->slug}}" class="" @if(@$childNav->target !== NULL) target="_blank" @endif >@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                          <a href="/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif
                                                                  </li>
                                                              @elseif($childNav->type == 'post')
                                                                  <li  class="{{request()->is('blog/'.@$childNav->slug) ? 'active' : ''}}  @if(!empty($childNav->children[0]))  dropdown @endif active">
                                                                      <a href="{{url('blog')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                          <a href="/{{@$childNav->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif
                                                                  </li>
                                                              @elseif($childNav->type == 'service')
                                                                  <li  class="{{request()->is('service/'.@$childNav->slug) ? 'active' : ''}}  @if(!empty($childNav->children[0]))  dropdown @endif active">
                                                                      <a href="{{url('service')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL) target="_blank" @endif>@if(@$childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                          <a href="/{{@$childNav->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif
                                                                  </li>
                                                              @else
                                                                  <li  class="{{request()->is(@$childNav->slug) ? 'active' : ''}}  @if(!empty($childNav->children[0]))  dropdown @endif active">
                                                                      <a href="{{url('/')}}/{{@$childNav->slug}}"  @if(@$childNav->target !== NULL) target="_blank" @endif>@if($childNav->name == NULL) {{@$childNav->title}} @else {{@$childNav->name}} @endif</a>
                                                                      @if(!empty($childNav->children[0]))
                                                                          <ul >
                                                                              @foreach($childNav->children[0] as $key => $lastchild)
                                                                                  @if($lastchild->type == 'custom')
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                          <a href="/{{@$childNav->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif >@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'service')
                                                                                      <li  class="{{request()->is('service/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('service')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @elseif($lastchild->type == 'post')
                                                                                      <li  class="{{request()->is('blog/'.@$lastchild->slug) ? 'active' : ''}}  active">
                                                                                          <a href="{{url('blog')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if(@$lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a></li>
                                                                                  @else
                                                                                      <li  class="{{request()->is(@$lastchild->slug) ? 'active' : ''}} active">
                                                                                              <a href="{{url('/')}}/{{@$lastchild->slug}}"  @if(@$lastchild->target !== NULL) target="_blank" @endif>@if($lastchild->name == NULL) {{@$lastchild->title}} @else {{@$lastchild->name}} @endif</a>
                                                                                          </li>
                                                                                  @endif
                                                                              @endforeach
                                                                          </ul>
                                                                      @endif

                                                                  </li>
                                                              @endif
                                                          @endforeach

                                                      </ul>
                                                  </li>

                                              @else
                                                  @if($nav->type == 'custom')
                                                      <li   class="{{request()->is(@$nav->slug.'*') ? 'active' : ''}} ">
                                                          <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @elseif($nav->type == 'service')
                                                      <li   class="{{request()->is('service/'.@$nav->slug.'*') ? 'active' : ''}} ">
                                                          <a href="{{url('service')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @elseif($nav->type == 'post')
                                                      <li   class="{{request()->is('blog/'.@$nav->slug.'*') ? 'active' : ''}} ">
                                                          <a href="{{url('blog')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @else
                                                      <li   class="{{request()->is(@$nav->slug.'*') ? 'active' : ''}} ">
                                                          <a href="{{url('/')}}/{{$nav->slug}}" >@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                                  @endif
                                              @endif
                                          @endforeach
                                      @endif
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        
                   
                        
                        <!-- Menu Button -->
                        <div class="menu-btns">
                           <a href="{{route('contact')}}" class="theme-btn {{request()->is('/') ? 'style-three' : ''}}">Contact <i class="fas fa-angle-double-right"></i></a>
                           
                        
                        </div>

                      
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>