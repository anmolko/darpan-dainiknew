<div class="modal fade" id="edit_tag" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header p-3 ps-4 bg-soft-success">
                <h5 class="modal-title" id="myModalLabel">Edit Blog Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'PUT','class'=>'needs-validation updatetags','enctype'=>'multipart/form-data','novalidate'=>'']) !!}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="update-name"
                                   onclick="slugMaker('update-name','update-slug')" required>
                            <div class="invalid-feedback">
                                Please enter the category title.
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="slug" id="update-slug" required>
                            <div class="invalid-feedback">
                                Please enter the tag slug.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label" for="description-input">Description</label>
                            <textarea class="form-control" placeholder="Enter description"  name="description" id="update-description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="tag-update-button" >Update</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>
