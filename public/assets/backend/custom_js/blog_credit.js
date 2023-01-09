var loadFile = function(event) {
    var image = document.getElementById('image');
    var replacement = document.getElementById('current-img');
    replacement.src = URL.createObjectURL(event.target.files[0]);
};

function slugMaker(title, slug){
    $("#"+ title).keyup(function(){
        var Text = $(this).val();
        Text = Text.toLowerCase();
        var regExp = /\s+/g;
        Text = Text.replace(regExp,'-');
        $("#"+slug).val(Text);
    });
}
$(document).on('click','.cs-category-add', function (e) {
    e.preventDefault();
    $("#add_blog_category").modal("toggle");
});

$('#blog-category-add-button').on('click', function(e) {
    e.preventDefault();
    var form            = $('#blog-category-add-form')[0]; //get the form using ID
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
            if(response.status=='success') {
                var block = ' <div class="form-check form-check-info"> ' +
                    '<input class="form-check-input large" type="checkbox" value="'+response.category.id+'" id="formCheck'+response.category.id+'" checked>' +
                    '<label class="form-check-label check-label" for="formCheck'+response.category.id+'">' + response.category.name +
                    '</label>'+
                    '</div>';
                // $("").remove();
                $("#category-list").prepend(block);
                Toastify({ newWindow: !0, text: response.message, gravity: 'top', position: 'center', stopOnFocus: !0, duration: 3000, close: "close",className: "bg-success",style: "style" == e.style ? { background: "linear-gradient(to right, #0AB39C, #405189)" } : "" }).showToast();
                return;
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

// $(document).ready(function () {
//     createEditor('ckeditor-classic-blog');
// });
// function createEditor(id){
//     ClassicEditor.create(document.querySelector("#"+id))
//         .then( editor => {
//             window.editor = editor;
//             editor.ui.view.editable.element.style.height="200px";
//             editor.model.document.on( 'change:data', () => {
//                 $( '#' + id).text(editor.getData());
//             } );
//         } )
//         .catch(function(e){console.error(e)});
// }
