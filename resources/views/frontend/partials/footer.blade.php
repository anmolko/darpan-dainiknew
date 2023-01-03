
          <!-- footer area start -->
        <footer class="main-footer footer-two pt-80 bgc-lighter sticky-stop">
            <div class="container">
                <div class="row justify-content-xl-between justify-content-center">
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="footer-widget widget_about me-md-5 wow fadeInUp delay-0-2s">
                            <div class="footer-logo mb-25">
                                <a href="/"><img src="<?php if(@$setting_data->logo){?>{{asset('/images/settings/'.@$setting_data->logo)}}<?php } ?>" alt="Logo"></a>
                            </div>
                            <p>
						                    @if(!empty(@$setting_data->website_description)) {!! ucfirst(@$setting_data->website_description) !!} @else Win Recruit @endif

                            </p>
                            <div class="social-style-two pt-5">

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
                    <div class="col-xl-4 col-md-6">
					              @if(@$footer_nav_data1 !== null)

                          <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                              <h4 class="footer-title">@if(@$footer_nav_title1 !== null) {{@$footer_nav_title1}} @else Quick Links @endif</h4>
                              <ul class="list-style-two">
                                	@if(!empty($footer_nav_data1))
                                    @foreach($footer_nav_data1 as $nav)
                                      @if(!empty($nav->children[0]))
                                      @else
                                        @if($nav->type == 'custom')
                                        <li >
                                          @if(str_contains(@$nav->slug,'http'))
                                            <a href="{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                          @else
                                            <a href="/{{$nav->slug}}"  @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>  @if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
                                          @endif

                                        @elseif($nav->type == 'service')
                                        <li >
                                          <a href="{{url('service')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
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
                          </div>
					              @endif

                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8">
					              @if(@$footer_nav_data2 !== null)

                          <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-6s">
                            <h4 class="footer-title">@if(@$footer_nav_title2 !== null) {{@$footer_nav_title2}} @else Useful Links @endif</h4>
                                <ul class="list-style-two">
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

                                          @elseif($nav->type == 'service')
                                          <li >
                                            <a href="{{url('service')}}/{{$nav->slug}}" @if($nav->target == NULL)  @else target="{{$nav->target}}" @endif>@if($nav->name == NULL) {{$nav->title}} @else {{$nav->name}} @endif</a></li>
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
                          </div>
					              @endif

                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-30 pt-25 pb-10">
                <div class="container">
                    <div class="copyright-text text-center">
                        <p>© Copyright {{date("Y")}} 	<a
							href="/"
							class="theme-color"
							>@if(!empty(@$setting_data->website_name)) {{ucwords(@$setting_data->website_name)}} @endif</a>. Developed by
							<a href="https://www.canosoft.com.np/" class="theme-color"
							>Canosoft Techonology </a
							>. All right reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->


        <!-- Scroll Top Button -->
        <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>

    </div>
    <!--End pagewrapper-->

		<!-- EXTERNAL SCRIPTS
		============================================= -->


    <script src="{{asset('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Appear Js -->
    <script src="{{asset('assets/frontend/js/appear.min.js')}}"></script>
    <!-- Slick -->
    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select -->
    <script src="{{asset('assets/frontend/js/jquery.nice-select.min.js')}}"></script>
    <!-- Image Loader -->
    <script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Type Writer -->
    <script src="{{asset('assets/frontend/js/jquery.animatedheadline.min.js')}}"></script>
    <!-- Circle Progress -->
    <script src="{{asset('assets/frontend/js/circle-progress.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
    <!--  WOW Animation -->
    <script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('assets/frontend/js/script.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    </script>
      @yield('js')
      @stack('scripts')




	</body>


</html>


