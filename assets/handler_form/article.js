$(document).ready(function(){

    // *** add article ***
    $("#form-add-article").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-add-article").prop("disabled", true)
        $("#btn-form-add-article").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $("#form-add-article :input").prop("disabled", true)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_article.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $("#form-add-article :input").prop("disabled", false);
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalAddArticle = bootstrap.Modal.getInstance($('#modal-add-article'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalAddArticle.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    })
                }
                $("#btn-form-add-article").prop("disabled", false)
                $("#btn-form-add-article").html("Tambah")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** edit article ***
    $("#form-edit-article").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-edit-article").prop("disabled", true)
        $("#btn-form-edit-article").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $("#form-edit-article :input").prop("disabled", true)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_article.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $("#form-edit-article .new-data").prop("disabled", false);
                    
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalEditArticle = bootstrap.Modal.getInstance($('#modal-edit-article'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalEditArticle.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    });
                }
                $("#btn-form-edit-article").prop("disabled", false)
                $("#btn-form-edit-article").html("Update")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** delete article ***
    $("#form-delete-article").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-delete-article").prop("disabled", true)
        $("#btn-form-delete-article").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_article.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $("#form-delete-article .new-data").prop("disabled", false);
                    
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalDeleteArticle = bootstrap.Modal.getInstance($('#modal-delete-article'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalDeleteArticle.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    });
                }
                $("#btn-form-delete-article").prop("disabled", false)
                $("#btn-form-delete-article").html("Delete")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })
})
