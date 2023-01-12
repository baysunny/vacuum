$(document).ready(function(){

    // === add service ===
    $("#form-add-service").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-add-service").prop("disabled", true)
        $("#btn-form-add-service").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $("#form-add-service :input").prop("disabled", true)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_service.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $("#form-add-service :input").prop("disabled", false);
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalAddService = bootstrap.Modal.getInstance($('#modal-add-service'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalAddService.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    })
                }
                $("#btn-form-add-service").prop("disabled", false)
                $("#btn-form-add-service").html("Tambah")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** edit service ***
    $("#form-edit-service").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-edit-service").prop("disabled", true)
        $("#btn-form-edit-service").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $("#form-edit-service :input").prop("disabled", true)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_service.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $("#form-edit-service :input").prop("disabled", false);
                    $("#form-edit-service .old-data").prop("disabled", true);
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalEditService = bootstrap.Modal.getInstance($('#modal-edit-service'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalEditService.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    });
                }
                $("#btn-form-edit-service").prop("disabled", false)
                $("#btn-form-edit-service").html("Update")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** delete service ***
    $("#form-delete-service").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-delete-service").prop("disabled", true)
        $("#btn-form-delete-service").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData(this)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_service.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalDeleteService = bootstrap.Modal.getInstance($('#modal-delete-service'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalDeleteService.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    });
                }
                $("#btn-form-delete-service").prop("disabled", false)
                $("#btn-form-delete-service").html("Delete")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })
})
