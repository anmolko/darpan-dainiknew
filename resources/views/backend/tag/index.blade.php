@extends('backend.layouts.master')
@section('title', "Tags")
@section('css')
    <link rel="stylesheet" href="{{asset('assets/backend/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/backend/custom_css/datatable_style.css')}}">
    <link href="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <style>


    </style>
@endsection
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Tags</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                <li class="breadcrumb-item active">Tags</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4">
                    {!! Form::open(['id' => 'blog-tag-add-form','method'=>'post','class'=>'needs-validation','novalidate'=>'']) !!}
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="tag-title-input">Title</label>
                                <input type="text" name="name" class="form-control" id="tag-title-input"
                                       onclick="slugMaker('tag-title-input','tag-slug-input')"
                                       placeholder="Enter title" required>
                                <div class="invalid-feedback">
                                    Please enter the tags title.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="tag-slug-input">Slug</label>
                                <input type="text" name="slug" class="form-control" id="tag-slug-input"
                                       placeholder="Enter slug" required>
                                <div class="invalid-feedback">
                                    Please enter the tags slug.
                                </div>
                            </div>
                            <div>
                                <label class="form-label" for="description-input">Description</label>
                                <textarea class="form-control" id="description-input" placeholder="Enter description"  name="description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <!-- end card -->
                    <div class="text-end mb-3">
                        <button type="button" class="btn btn-success w-sm form-control" id="tag-add-button" cs-create-route="{{route('tag.store')}}">Submit</button>
                    </div>
                    {!! Form::close() !!}



                </div>
                <!-- end col -->

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Tag List</h4>
                        </div>
                        <div class="card-body">

                            <div class="row" >

                                <div class="table-responsive  mt-3 mb-1">
                                    <table id="tag-index" class="table align-middle table-nowrap table-striped">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Slug</th>
                                            <th>Count</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody id="blog-tag-list">
                                        @if(!empty($tags))
                                            @foreach($tags as  $tag)
                                                <tr id="tag-block-num-{{@$tag->id}}">
                                                    <td id="tag-td-name-{{@$tag->id}}">{{ ucwords(@$tag->name) }}</td>
                                                    <td id="tag-td-descp-{{@$tag->id}}">{{ (@$tag->description !== null) ? @$tag->description:"—" }}</td>
                                                    <td id="tag-td-slug-{{@$tag->id}}">{{ @$tag->slug }}</td>
                                                    <td id="tag-td-count-{{@$tag->id}}"><a href="{{route('tag.blog',@$tag->id)}}">{{ $tag->BlogsCount() }}</a></td>
                                                    <td >
                                                        <div class="row">

                                                            <div class="col text-center dropdown">
                                                                <a href="javascript:void(0);" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill fs-17"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2">
                                                                    <li><a class="dropdown-item cs-tag-edit" id="cs-role-tag-edit-{{$tag->id}}" cs-update-route="{{route('tag.update',$tag->id)}}" cs-edit-route="{{route('tag.edit',$tag->id)}}"><i class="ri-pencil-fill me-2 align-middle"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item cs-tag-remove" cs-delete-route="{{route('tag.destroy',$tag->id)}}"><i class="ri-delete-bin-6-line me-2 align-middle"></i>Delete</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end row-->
                            <form action="#" method="post" id="deleted-form">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="DELETE">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
    @include('backend.tag.modal.edit')


@endsection

@section('js')
    <script src="{{asset('assets/backend/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('assets/backend/custom_js/blog_category.js')}}"></script>

    <script src="{{asset('assets/backend/js/pages/form-validation.init.js')}}"></script>
    <!-- Sweet Alerts js -->
    <script src="{{asset('assets/backend/libs/sweetalert2/sweetalert2.min.js')}}"></script>

    <script>
        $('#tag-add-button').on('click', function(e) {
            var form            = $('#blog-tag-add-form')[0]; //get the form using ID
            if (!form.reportValidity()) { return false;}
            var formData        = new FormData(form); //Creates new FormData object
            var url             = $(this).attr("cs-create-route");
            var request_method  = 'POST'; //get form GET/POST method
            $.ajax({
                type : request_method,
                url : url,
                headers: {
                    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                },
                cache: false,
                contentType: false,
                processData: false,
                data : formData,
                success: function(response){

                    if(response.status=='slug duplicate'){
                        Toastify({ newWindow: !0, text: response.message, gravity: 'top', position: 'center', stopOnFocus: !0, duration: 3000, close: "close",className: "bg-warning",style: "style" == e.style ? { background: "linear-gradient(to right, #0AB39C, #405189)" } : "" }).showToast();
                        return;
                    }
                    ;
                    var category_edit   = '/auth/tags/'+response.tag.id+'/edit';
                    var category_update = '/auth/tags/'+response.tag.id;
                    var category_remove = '/auth/tags/'+response.tag.id;
                    var tag_count       = '/auth/tags/'+response.tag.id+'/blog';
                    var descp           = (response.tag.description ? response.tag.description : "—");
                    var tags            = (response.tag.count ? response.tag.count : "0");

                    if(response.status=='success') {
                        Swal.fire({
                            imageUrl: "/assets/backend/images/canosoft-logo.png",
                            imageHeight: 60,
                            html: '<div class="mt-2">' +
                                '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json"' +
                                'trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px">' +
                                '</lord-icon>' +
                                '<div class="mt-4 pt-2 fs-15">' +
                                '<h4>Success !</h4>' +
                                '<p class="text-muted mx-4 mb-0">' +
                                response.message +
                                '</p>' +
                                '</div>' +
                                '</div>',
                            timerProgressBar: !0,
                            timer: 2e3,
                            showConfirmButton: !1
                        });
                        var block = '<tr id="tag-block-num-'+response.tag.id+'">'+
                            '<td id="tag-td-name-'+response.tag.id+'">'+response.tag.name+'<span class="badge bg-success ms-1">New</span></td>'+
                            '<td id="tag-td-slug-'+response.tag.id+'">'+descp+'</td>'+
                            '<td id="tag-td-descp-'+response.tag.id+'">'+
                            response.tag.slug +'<span class="badge bg-success ms-1">New</span></td>'+
                            '<td id="tag-td-count-'+response.tag.id+'"><a href="'+tag_count+'">'+tags+'</a></td>'+
                            '<td>'+
                            '<div class="row">'+
                            '<div class="col text-center dropdown"> ' +
                            '<a href="javascript:void(0);" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false"> ' +
                            '<i class="ri-more-fill fs-17"></i> ' +
                            '</a> ' +
                            '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2"> ' +
                            '<li><a class="dropdown-item cs-tag-edit" id="cs-tag-edit-'+response.tag.id+'" cs-update-route="'+category_update+'" cs-edit-route="'+category_edit+'"><i class="ri-pencil-fill me-2 align-middle"></i>Edit</a></li>' +
                            '<li><a class="dropdown-item cs-tag-remove" cs-delete-route="'+category_remove+'"><i class="ri-delete-bin-6-line me-2 align-middle"></i>Delete</a></li> ' +
                            '</ul>' +
                            '</div>' +
                            '</div>' +
                            '</td>'+
                            '</tr>';
                        $("td.dataTables_empty").remove();
                        $("#blog-tag-list").prepend(block);
                    }
                    else{
                        Swal.fire({
                            imageUrl: "/assets/backend/images/canosoft-logo.png",
                            imageHeight: 60,
                            html: '<div class="mt-2">' +
                                '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
                                ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
                                'style="width:120px;height:120px"></lord-icon>' +
                                '<div class="mt-4 pt-2 fs-15">' +
                                '<h4>Oops...! </h4>' +
                                '<p class="text-muted mx-4 mb-0">' + response.message +
                                '</p>' +
                                '</div>' +
                                '</div>',
                            timerProgressBar: !0,
                            timer: 3000,
                            showConfirmButton: !1
                        });
                    }
                }, error: function(response) {
                    console.log(response);
                }



            });

        });

        function slugMaker(title, slug){
            $("#"+ title).keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                var regExp = /\s+/g;
                Text = Text.replace(regExp,'-');
                $("#"+slug).val(Text);
            });
        }

        $(document).ready(function () {
            var dataTable = $('#tag-index').DataTable({
                paging: true,
                searching: true,
                ordering:  false,
                lengthMenu: [[15, 20, 30, 50, 100, -1], [ 15, 20, 30, 50, 100, "All"]],
            });

        });

        $(document).on('click','.cs-tag-edit', function (e) {
            e.preventDefault();
            // console.log(action)
            var id= $(this).attr('id');
            var action = $(this).attr('cs-update-route');
            $.ajax({
                url: $(this).attr('cs-edit-route'),
                type: "GET",
                cache: false,
                dataType: 'json',
                success: function(dataResult){
                    // $('#id').val(data.id);
                    $("#edit_tag").modal("toggle");
                    $('#update-name').attr('value',dataResult.name);
                    $('#update-slug').attr('value',dataResult.slug);
                    $('#update-description').attr('value',dataResult.description);
                    $('.updatetags').attr('action',action);
                },
                error: function(error){
                    console.log(error)
                }
            });
        });




        $(document).on('click','.cs-tag-remove', function (e) {
            e.preventDefault();
            var form = $('#deleted-form');
            var action = $(this).attr('cs-delete-route');
            form.attr('action',action);
            var url = form.attr('action');
            var form_data = form.serialize();
            Swal.fire({
                imageUrl: "/assets/backend/images/canosoft-logo.png",
                imageHeight: 60,
                html: '<div class="mt-2">' +
                    '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
                    ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
                    'style="width:120px;height:120px"></lord-icon>' +
                    '<div class="mt-4 pt-2 fs-15">' +
                    '<h4>Are your sure? </h4>' +
                    '<p class="text-muted mx-4 mb-0">' +
                    'You want to Remove this Record ?</p>' +
                    '</div>' +
                    '</div>',
                showCancelButton: !0,
                confirmButtonClass: "btn btn-primary w-xs me-2 mt-2",
                cancelButtonClass: "btn btn-danger w-xs mt-2",
                confirmButtonText: "Yes!",
                buttonsStyling: !1,
                showCloseButton: !0
            }).then(function(t)
            {
                t.value
                    ?
                    $.post( url, form_data)
                        .done(function(response) {
                            if(response.status == "success") {
                                Swal.fire({
                                    imageUrl: "/assets/backend/images/canosoft-logo.png",
                                    imageHeight: 60,
                                    html: '<div class="mt-2">' +
                                        '<lord-icon src="https://cdn.lordicon.com/lupuorrc.json"' +
                                        'trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px">' +
                                        '</lord-icon>' +
                                        '<div class="mt-4 pt-2 fs-15">' +
                                        '<h4>Success !</h4>' +
                                        '<p class="text-muted mx-4 mb-0">' + response.message +'</p>' +
                                        '</div>' +
                                        '</div>',
                                    timerProgressBar: !0,
                                    timer: 2e3,
                                    showConfirmButton: !1
                                });

                                var category_block = '#tag-block-num-'+response.id;
                                setTimeout(function() {
                                    $(category_block).remove();
                                    if(response.count == 1){
                                        var block = '<tr class="odd">' +
                                            '<td valign="top" colSpan="5" class="dataTables_empty">No data available in table </td> ' +
                                            '</tr>';
                                        $("#blog-tag-list").prepend(block);
                                    }
                                }, 3000);
                            }else{
                                Swal.fire({
                                    imageUrl: "/assets/backend/images/canosoft-logo.png",
                                    imageHeight: 60,
                                    html: '<div class="mt-2">' +
                                        '<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"' +
                                        ' trigger="loop" colors="primary:#f06548,secondary:#f7b84b" ' +
                                        'style="width:120px;height:120px"></lord-icon>' +
                                        '<div class="mt-4 pt-2 fs-15">' +
                                        '<h4>Oops...! </h4>' +
                                        '<p class="text-muted mx-4 mb-0">' + response.message +'</p>' +
                                        '</div>' +
                                        '</div>',
                                    timerProgressBar: !0,
                                    timer: 3000,
                                    showConfirmButton: !1
                                });
                            }
                        })
                        .fail(function(response){
                            console.log(response)
                        })

                    :
                    t.dismiss === Swal.DismissReason.cancel &&
                    Swal.fire({
                        title: "Cancelled",
                        text: "Tag was not removed.",
                        icon: "error",
                        confirmButtonClass: "btn btn-primary mt-2",
                        buttonsStyling: !1
                    });
            });



        })

    </script>
@endsection
