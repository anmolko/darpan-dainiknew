<!-- Left Sidebar start -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/backend/images/canosoft-favicon.png')}}" alt="" height="25">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php }else{ echo '/assets/backend/images/canosoft-logo.png'; }?>" alt="Logo" height="65">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/backend/images/canosoft-favicon.png')}}" alt="" height="40">
                    </span>
                     <span class="logo-lg">
                        <img src="<?php if(@$setting_data->logo_white){?>{{asset('/images/settings/'.@$setting_data->logo_white)}}<?php }else{ echo '/assets/backend/images/canosoft-logo.png'; }?>" alt="Logo" height="65">
                     </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="/" target="_blank">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                        <span class="badge badge-pill bg-success" data-key="t-new">{{Auth::user()->user_type}}</span>
                    </a>
                </li>

                <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link  @if(\Request::route()->getName() == 'homepage.index') active @endif" href="{{route('homepage.index')}}">
                    <i class="ri-home-gear-line"></i> <span data-key="t-forms">Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if(\Request::route()->getName() == 'menu.index') active @endif" href="{{route('menu.index')}}">
                    <i class="ri-stack-line"></i> <span data-key="t-forms">Menu</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if(\Request::route()->getName() == 'blogcategory.index') active @endif" href="{{route('blogcategory.index')}}">
                    <i class="ri-creative-commons-nd-line"></i> <span data-key="t-forms">Category</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link  @if(\Request::route()->getName() == 'tag.index') active @endif" href="{{route('tag.index')}}">
                    <i class="ri-price-tag-3-line"></i> <span data-key="t-forms">Tags</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'blog.index') active @endif" href="{{route('blog.index')}}">
                        <i class=" ri-todo-line"></i> <span data-key="t-widgets">All Posts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'ads.index') active @endif" href="{{route('ads.index')}}">
                        <i class="ri-advertisement-line"></i> <span data-key="t-widgets">Advertisements</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'pages.index') active @endif" href="{{route('pages.index')}}">
                        <i class="ri-pages-line"></i> <span data-key="t-widgets">Pages</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link @if(\Request::route()->getName() == 'alluser') active @endif" href="{{route('alluser')}}">
                        <i class="ri-account-circle-line"></i> <span data-key="t-widgets">User Mgmt.</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>

<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
