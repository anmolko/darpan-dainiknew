<div class="comment-block">
    {{--                                                            <div class="block-header">--}}
    {{--                                                                <div class="title">--}}
    {{--                                                                    <h2>Comments</h2>--}}
    {{--                                                                    <div class="tag">12</div>--}}
    {{--                                                                </div>--}}
    {{--                                                                <div class="group-radio">--}}
    {{--                                                                    <span class="button-radio">--}}
    {{--                                                                        <input id="latest" name="latest" type="radio" checked>--}}
    {{--                                                                        <label for="latest">Latest</label>--}}
    {{--                                                                    </span>--}}
    {{--                                                                                                                            <div class="divider"></div>--}}
    {{--                                                                                                                            <span class="button-radio">--}}
    {{--                                                                        <input id="popular" name="latest" type="radio">--}}
    {{--                                                                        <label for="popular">Popular</label>--}}
    {{--                                                                    </span>--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}


    <div class="writing">
        {!! Form::open(['route' => 'comments.store','method'=>'post','class'=>'needs-validation','id'=>'slider-list-form','novalidate'=>'','enctype'=>'multipart/form-data']) !!}

            <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{ ( Auth::user()->user_type == 'viewer') ? Auth::user()->id :1}}" readonly required>
            <input type="hidden" class="form-control" name="blog_id" id="blog_id" value="{{@$singleBlog->id}}" readonly required>
            <textarea name="comment" class="textarea" rows="8" autofocus></textarea><br/>
            <div class="footer">
                <div class="group-button">
                    <button type="submit" class="btn primary" id="send-comment">प्रतिक्रिया दिनुहोस्</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>


    @foreach($singleBlog->comments as $comment)
        <div class="comment">
            <div class="user-banner">
                <div class="user">
                    <div class="avatar" style="background-color:#fff5e9;border-color:#ffe0bd; color:#F98600">
                        {{getFirstLetters($comment->user->name)}}
                        <span class="stat green"></span>
                    </div>
                    <h5>{{ $comment->user->name }}</h5>
                </div>
                <button class="btn dropdown"><i class="ri-more-line"></i></button>
            </div>
            <div class="content">
                <p>
                    {{@$comment->comment}}
                </p>
            </div>
            <div class="footer">
                <div class="reactions">
                    <button class="btn react"><img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/325/thumbs-up_1f44d.png" alt="">4</button>
                    <button class="btn react"><img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/325/angry-face-with-horns_1f47f.png" alt="">1</button>
                </div>                <div class="divider"></div>
                <button type="button" class="replybutton" data-commentbox="panel-{{@$comment->id}}">Reply</button>
                <div class="divider"></div>
                <span class="is-mute">{{@$comment->getCommentedAgoinNepali()}}</span>
            </div>
            <div class="replybox writing" style="display:none" id="panel-{{@$comment->id}}">
                <textarea cols="35" class="textarea" rows="8"></textarea><br/>
                <div class="footer">
                    <div class="group-button">

                        <button class="btn primary">प्रतिक्रिया दिनुहोस्</button>
                        <button class="cancelbutton btn secondary">Cancel</button>

                    </div>

                </div>
            </div>
        </div>
        @if(count($comment->replies)>0)
            @foreach($comment->replies as $reply)
                <div class="reply comment">
                    <div class="user-banner">
                        <div class="user">
                            <div class="avatar">
                                <img src="https://images.unsplash.com/photo-1510227272981-87123e259b17?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=3759e09a5b9fbe53088b23c615b6312e" alt="">
                                <span class="stat green"></span>
                            </div>
                            <h5>Bessie Cooper</h5>
                        </div>
                        <button class="btn dropdown"><i class="ri-more-line"></i></button>
                    </div>
                    <div class="content">
                        <p><a href="#" class="tagged-user">@ {{ $comment->user->name }}</a>
                        {{@$reply->comment}}
                        </p>
                    </div>
                    <div class="footer">
                <button class="btn"><i class="ri-emotion-line"></i></button>
                <div class="reactions">
                    <button class="btn react"><img src="https://cdn-0.emojis.wiki/emoji-pics/apple/smiling-face-with-heart-eyes-apple.png" alt="">2</button>
                </div>
                <div class="divider"></div>
                <span class="is-mute">{{@$reply->getCommentedAgoinNepali()}}</span>
            </div>
                </div>
            @endforeach
        @endif
    @endforeach
    <div class="load">
        <span><i class="ri-refresh-line"></i>Loading</span>
    </div>
</div>
