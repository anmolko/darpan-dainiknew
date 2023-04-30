<div class="btn-group view-btn" id="blog-status-button-{{$params['blog']->id}}">
    <button class="btn btn-light dropdown-toggle" style="width: 10em;" type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        {{ucwords(@$params['blog']->status)}}
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside" style="">
        @if($params['blog']->status == "draft")
            <li><a class="dropdown-item change-status" cs-update-route="{{route('blog-status.update',$params['blog']->id)}}" href="#" cs-status-value="publish">Published</a></li>
        @else
            <li><a class="dropdown-item change-status" cs-update-route="{{route('blog-status.update',$params['blog']->id)}}" href="#" cs-status-value="draft">Draft</a></li>
        @endif
    </ul>
</div>
