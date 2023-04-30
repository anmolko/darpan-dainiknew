<div class="row">

    <div class="btn-group-vertical gap-2 mt-4 mt-sm-0 fs-18">
        <a class="btn btn-outline-primary btn-icon waves-effect waves-light" href="{{ url($params['blog']->url()) }}" target="_blank"><i class="ri-eye-line"></i></a>
        <a class="btn btn-outline-success btn-icon waves-effect waves-light" href="{{route('blog.edit',$params['blog']->id)}}"><i class="ri-pencil-fill"></i></a>
        <a class="btn btn-outline-danger btn-icon waves-effect waves-light cs-blog-remove" cs-delete-route="{{route('blog.destroy',$params['blog']->id)}}"><i class="ri-delete-bin-6-line"></i></a>
    </div>
</div>
