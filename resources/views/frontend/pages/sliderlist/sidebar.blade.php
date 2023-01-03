
<div class="main-sidebar rmt-75">
    
    <div class="widget widget-category wow fadeInUp delay-0-4s">
        <h4 class="widget-title">All Slider Lists</h4>
        <ul>
        @if(!empty($slider_lists))
            @foreach(@$slider_lists as $slider)

            <li><a  class="@if(Request::url() === url('/slider-list/'.$slider->subheading)) active @endif" href="{{url('/slider-list/'.$slider->subheading)}}">{{ucwords(@$slider->list_header)}}</a> </li>
            @endforeach
        @endif
        </ul>
    </div>


</div>
