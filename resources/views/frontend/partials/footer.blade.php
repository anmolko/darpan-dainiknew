<!-- Footer Top Section Start -->
<div class="footer-top-section section bg-footer">
    <div class="container-fluid">
        <div class="row" style="    padding: 0 30px;">

            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-5 col-md-6 col-12">

                <!-- Title -->
                <h4 class="widget-title">हाम्रो बारे</h4>

                <div class="content fix">
                    @if(!empty(@$setting_data->website_description)) {!! ucfirst(@$setting_data->website_description) !!} @else
                        <p> Darpan dainik is an online news portal for all type of Nepali national, International, photography, business, sports, culture,politic etc. With the mission of being the paradigm in Nepal’s media fraternity "Darpan Dainik Pvt. Ltd.” a prominent media representative in the country. With people’s right to information as the primary objective,
                            <a href="/">"www.darpandainik.com"</a> and Darpan TV (Online TV) Under of Darpan Dainik Pvt. Ltd. was registered according to the law suit Government of Nepal. We will raise our continuous media role dedication towards socity and people.
                        </p>
                    @endif
                        <ol class="footer-contact">
                            <li>
                                @if(!empty(@$setting_data->facebook))
                                    <a href="{{ (!empty(@$setting_data->facebook)) ? @$setting_data->facebook : "#"  }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                                @endif
                                @if(!empty(@$setting_data->linkedin))
                                    <a href="{{ (!empty(@$setting_data->linkedin)) ? @$setting_data->linkedin : "#"  }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                                @endif
                                @if(!empty(@$setting_data->youtube))
                                    <a href="{{ (!empty(@$setting_data->youtube)) ? @$setting_data->youtube : "#"  }}"  target="_blank"><i class="fa-brands fa-youtube-play"></i></a>
                                @endif
                                @if(!empty(@$setting_data->instagram))
                                    <a href="{{ (!empty(@$setting_data->instagram)) ? @$setting_data->instagram : "#"  }}"  target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                @endif
                                @if(!empty(@$setting_data->ticktock))
                                    <a href="{{ (!empty(@$setting_data->ticktock)) ? @$setting_data->ticktock : "#"  }}"  target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                                @endif
                            </li>
                            @if(@$setting_data->phone !== null)
                                <li><a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif"><i class="fa fa fa-phone"></i>Office: <b>{{ @$setting_data->phone }} </b></a></li>
                            @endif
                            @if(@$setting_data->mobile !== null)
                                <li><a href="tel:@if(!empty(@$setting_data->mobile)) {{@$setting_data->mobile}} @else +9771238798 @endif"><i class="fa fa fa-newspaper-o"></i>News: <b>{{ @$setting_data->mobile }} </b></a></li>
                            @endif

                        </ol>
                </div>


            </div><!-- Footer Widget End -->


            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-2 col-md-6 col-12">
                @if(@$footer_nav_data1 !== null)
                    <!-- Title -->
                    <h4 class="widget-title"> @if(@$footer_nav_title1 !== null) {{@$footer_nav_title1}} @else समाचार @endif </h4>

                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                        <ul class="sidebar-category video-category">
                            @if(!empty($footer_nav_data1))
                                @foreach($footer_nav_data1 as $nav)
                                    @if(!empty($nav->children[0]))
                                    @else
                                        @if($nav->type == 'custom')
                                            <li>
                                                @if(str_contains(@$nav->slug,'http'))
                                                    <a href="{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                        @else
                                            <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                        @endif

                                        @elseif($nav->type == 'category')
                                            <li >
                                                <a href="{{url('category')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                        @elseif($nav->type == 'post')
                                            <li >
                                                <a href="{{url('blog')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                        @else
                                            <li >
                                                <a href="{{url('/')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif> @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                        @endif
                                    @endif
                                @endforeach
                            @endif

                        </ul>
                    </div><!-- Footer Widget Post ENd -->
                @endif
            </div><!-- Footer Widget End -->

            <!-- Footer Widget Start -->
            <div class="footer-widget col-xl-2 col-md-6 col-12">
                @if(@$footer_nav_data2 !== null)

                    <!-- Title -->
                    <h4 class="widget-title">@if(@$footer_nav_title2 !== null) {{@$footer_nav_title2}} @else अन्य @endif</h4>

                    <!-- Footer Widget Post Start -->
                    <div class="footer-widget-post">
                    <ul class="sidebar-category video-category">
                        <li >
                            <a href="/"> गृह पृष्ठ </a></li>
                        @if(!empty($footer_nav_data2))
                            @foreach($footer_nav_data2 as $nav)
                                @if(!empty($nav->children[0]))
                                @else
                                    @if($nav->type == 'custom')
                                        <li >
                                            @if(str_contains(@$nav->slug,'http'))
                                                <a href="{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @else
                                        <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @endif

                                    @elseif($nav->type == 'category')
                                        <li >
                                            <a href="{{url('category')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @else
                                        <li >
                                            <a href="{{url('/')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif> @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                    @endif
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div><!-- Footer Widget Post ENd -->
                @endif

            </div><!-- Footer Widget End -->

            <div class="footer-widget col-xl-3 col-md-6 col-12">
                <div class="footer-logo mb-25">
                    <a href="/"><img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php } ?>" alt="Logo"></a>
                </div>
                <div class="content">
                    <ol class="footer-contact">
                        @if(@$setting_data->broadcasting_registration !== null)
                            <li><i class="fa fa-tty"></i>सुचना बिभाग दर्ता नं: <b>{{ @$setting_data->broadcasting_registration }} </b></li>
                        @endif
                        @if(@$setting_data->company_registration !== null)
                            <li><i class="fa fa-building-o"></i>कम्पनी दर्ता नं: <b>{{ @$setting_data->company_registration }} </b></li>
                        @endif
                        @if(@$setting_data->chairman !== null)
                            <li><i class="fa fa-hand-o-right"></i>अध्यक्ष: <b>{{ @$setting_data->chairman }} </b></li>
                        @endif
                        @if(@$setting_data->operator !== null)
                            <li><i class="fa fa-hand-o-right"></i>सञ्चालक: <b>{{ @$setting_data->operator }} </b></li>
                        @endif
                        @if(@$setting_data->editor !== null)
                            <li><i class="fa fa-hand-o-right"></i>सम्पादक: <b>{{ @$setting_data->editor }} </b></li>
                        @endif
                        @if(@$setting_data->news_email !== null)
                            <li><a href="mailto:@if(!empty(@$setting_data->news_email)) {{@$setting_data->news_email}} @else example@gmail.com @endif"><i class="fa fa fa-send-o"></i><b>{{ @$setting_data->news_email }} </b></a></li>
                        @endif
                        @if(@$setting_data->ad_number !== null)
                            <li><a href="tel:@if(!empty(@$setting_data->ad_number)) {{@$setting_data->ad_number}} @else +9771238798 @endif"><i class="fa fa fa-bullhorn"></i>Ad: <b>{{ @$setting_data->ad_number }} </b></a></li>
                        @endif
                        @if(@$setting_data->ad_email !== null)
                            <li><a href="mailto:@if(!empty(@$setting_data->ad_email)) {{@$setting_data->ad_email}} @else example@gmail.com @endif"><i class="fa fa fa-keyboard-o"></i> <b>{{ @$setting_data->ad_email }} </b></a></li>
                        @endif
                    </ol>

                </div>


            </div><!-- Footer Widget End -->


            <!-- Footer Widget Start -->


        </div>
    </div>
</div><!-- Footer Top Section End -->

<!-- Footer Bottom Section Start -->
<div class="footer-bottom-section section bg-red">
    <div class="container">
        <div class="row">

            <!-- Copyright Start -->
            <div class="copyright text-center col">
                <p>© Copyright {{date("Y")}} 	<a
                        href="/"
                        class="theme-color"
                    >@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @endif</a>.

                    Developed by
                    <a href="https://www.canosoft.com.np/" class="theme-color"
                    >Canosoft Techonology </a
                    >. All right reserved.</p>
            </div><!-- Copyright End -->

        </div>
    </div>
</div><!-- Footer Bottom Section End -->


</div>


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('assets/frontend/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/frontend/js/plugins.js')}}"></script>
<!-- ycp JS -->
<script src="{{asset('assets/frontend/js/ycp.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
<script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("navigation-stick");
            } else {
                header.classList.remove("navigation-stick");
            }
        }
        @if(Session::has('success'))
        Toastify({
            text: "{{ Session::get('success')}}",
            duration: 4000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            positionLeft: false, // `true` or `false`
            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        }).showToast();
        @endif
        @if(Session::has('error'))
        Toastify({
            text: "{{ Session::get('error')}}",
            duration: 4000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            positionLeft: false, // `true` or `false`
            backgroundColor: "linear-gradient(to right, #0AB39C, #405189)",
        }).showToast();
        @endif
        @if(Session::has('warning'))
        Toastify({
            text: "{{ Session::get('error')}}",
            duration: 4000,
            destination: "https://github.com/apvarun/toastify-js",
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            positionLeft: false, // `true` or `false`
            backgroundColor: "linear-gradient(to right, #0AB39C, #405189)",
        }).showToast();
        @endif
    });

</script>
@yield('js')
@stack('scripts')
</body>
</html>
