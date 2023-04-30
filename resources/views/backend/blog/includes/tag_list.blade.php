@foreach($params['tags']  as $key=>$tag)
    <a href="{{route('tag.blog',@$tag->id)}}">{{ucfirst(@$tag->name)}}
    </a>{{($loop->last) ?"":"," }}
    @if (($key+1) % 3 === 0)
        <br>
    @endif
@endforeach
