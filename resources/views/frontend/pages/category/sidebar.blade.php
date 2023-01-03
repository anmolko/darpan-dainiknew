<div class="main-sidebar rmt-75">
    @if(!empty($service_categories))
        <div class="widget widget-category wow fadeInUp delay-0-4s">
            <h4 class="widget-title">Service Categories</h4>
            <ul>
                @foreach(@$service_categories as $bcategory)
                    <li><a  class="@if(Request::url() === url('/our-category/'.$bcategory->slug)) active @endif" href="{{url('/our-category/'.$bcategory->slug)}}">{{ucwords(@$bcategory->name)}}</a></li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(!empty($latestPosts))
        <div class="widget widget-recent-news wow fadeInUp delay-0-2s">
            <h4 class="widget-title">Our News</h4>
            <ul>
                @foreach($latestPosts as $index => $latest)
                    <li>
                        <div class="image">
                            <img src="<?php if(@$latest->image){?>{{asset('/images/blog/thumb/thumb_'.@$latest->image)}}<?php }?>" alt="News">
                        </div>
                        <div class="content">
                            <h5><a href="{{route('blog.single',@$latest->slug)}}">{{ucwords(@$latest->title)}}</a></h5>
                            <span class="date">
                                <i class="far fa-calendar-alt"></i>
                                <a href="{{route('blog.single',@$latest->slug)}}">{{date('j M, Y',strtotime(@$latest->created_at))}}</a>
                            </span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

</div>
