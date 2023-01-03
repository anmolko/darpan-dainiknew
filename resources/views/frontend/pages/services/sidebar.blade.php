<div class="main-sidebar rmt-75">

    <div class="widget widget-category wow fadeInUp delay-0-4s">
        <h4 class="widget-title">Our Services</h4>
        <ul>
        @if(!empty($latestServices))
            @foreach($latestServices as $index => $latest)
            <li><a  class="@if(Request::url() === url('/service/'.$latest->slug)) active @endif " href="{{route('service.single',$latest->slug)}}">{{ucwords(@$latest->title)}}</a></li>
            @endforeach
        @endif
        </ul>
    </div>
    <div class="widget widget-recent-news wow fadeInUp delay-0-2s">
        <h4 class="widget-title">Recent News</h4>
        <ul>
            @if(!empty($latestPosts))
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
            @endif
        </ul>
    </div>

</div>
