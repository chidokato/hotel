setTimeout(function() {
    $('#hidden').fadeOut('fast');
}, 5000); // <-- time in milliseconds

$(document).ready(function(){
    $('#changepassword').change(function(){
        if ($(this).is(":checked")) {
            $(".pass").removeAttr('disabled');
        }else{
            $(".pass").attr('disabled','');
        }
    });
});

// change category lang
$(document).ready(function(){
    $("#parent").change(function(){
        var id = $(this).val();
        // alert(id);
        $.get("ajax/change_cate_lang/"+id,function(data){
            $("#list_parent").html(data);
        });
    });
}); // change sản phẩm show màu sắc
// change category lang

// upload images
function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('.image-upload-wrap').hide();
      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();
      $('.image-title').html(input.files[0].name);
    };
    reader.readAsDataURL(input.files[0]);
        } else {
    removeUpload();
    }
}
// upload images

// change tỉnh thành quận huyện
$(document).ready(function(){
    $("select#province").change(function(){
        var id = $(this).val();
        $.get("ajax/change_province/"+id,function(data){
            $("#district").html(data);
        });
    });
});
$(document).ready(function(){
    $("select#district").change(function(){
        var id = $(this).val();
        $.get("ajax/change_district/"+id,function(data){
            $("#ward").html(data);
        });
    });
});

// change sort by category
$(document).ready(function(){
    $("select#sort_by").change(function(){
        var sort_by = $(this).val();
        $.get("ajax/change_SortBy/"+sort_by,function(data){
            $("#parent").html(data);
        });
        $.get("ajax/change_SortBy_parent/"+sort_by,function(data){
            $("#load_category").html(data);
        });
    });

    $("select#parent").change(function(){
        var id = $(this).val();
        // alert(id);
        $.get("ajax/change_parent/"+id,function(data){
            $("#load_category").html(data);
        });
    });

    $("input#view").blur(function(){
        var view = $(this).val();
        var id = $(this).parents('#category').find('input[name="id"]').val();
        // alert(id);
        $.get("ajax/update_category_view/"+id+"/"+view,function(data){
            // $("#load_category").html(data);
        });
    });
});