<div class="main-sidebar rmt-75">
    <div class="widget widget-search wow fadeInUp delay-0-2s">
        <h4 class="widget-title">Search</h4>
        <form  method="get" id="searchform" action="{{route('searchBlog')}}" class="default-search-form">
            <input  id="s" name="s" type="text"  placeholder="Find Keywords" oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required>
            <button type="submit" class="searchbutton far fa-search"></button>
        </form>
    </div>
    <div class="widget widget-category wow fadeInUp delay-0-4s">
        <h4 class="widget-title">Category</h4>
        <ul>
        @if(!empty($bcategories))
            @foreach(@$bcategories as $bcategory)
            <li><a  class="@if(Request::url() === url('/blog/categories/'.$bcategory->slug)) active @endif" href="{{url('/blog/categories/'.$bcategory->slug)}}">{{ucwords(@$bcategory->name)}}</a> <span>({{@$bcategory->blogs->count()}})</span></li>
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
