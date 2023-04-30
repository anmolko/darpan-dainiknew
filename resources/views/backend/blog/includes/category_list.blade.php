@foreach($params['categories'] as $key=>$category)
    <a  href="{{route('blogcategory.blog',@$category->id)}}">{{ ucfirst(@$category->name) }}
    </a>{{($loop->last) ?"":"," }}
    @if (($key+1) % 5 === 0)
        <br>
    @endif
@endforeach
