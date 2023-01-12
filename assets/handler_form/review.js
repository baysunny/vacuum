$(document).ready(function(){

    // *** add review ***
    $("#form-add-review").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-add-review").prop("disabled", true)
        $("#btn-form-add-review").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $("#form-add-review :input").prop("disabled", true)
        var rating = $("#input-star-rating button .text-warning").length
        formData.append("starRating", rating)
        
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_review.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $("#form-add-review :input").prop("disabled", false);
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalAddReview = bootstrap.Modal.getInstance($('#modal-add-review'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalAddReview.hide()
                    modalSuccess.show()

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload()
                    });
                }
                $("#btn-form-add-review").prop("disabled", false)
                $("#btn-form-add-review").html("Tambah")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** delete review ***
    $("#form-delete-review").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-delete-review").prop("disabled", true)
        $("#btn-form-delete-review").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
         
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_review.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalDeleteReview = bootstrap.Modal.getInstance($('#modal-delete-review'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalDeleteReview.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    });
                }
                $("#btn-form-delete-review").prop("disabled", false)
                $("#btn-form-delete-review").html("Delete")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** change status review ***
    $("#form-change-status-review").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-change-status-review").prop("disabled", true)
        $("#btn-form-change-status-review").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var currentStatus = 0;
        if($('#change-status-review-sh').is(':checked')){
            currentStatus = 1
        }
        var formData = new FormData(this)
        formData.append("currentStatus", currentStatus)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_review.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalChangeStatusReview = bootstrap.Modal.getInstance($('#modal-change-status-review'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalChangeStatusReview.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    });
                }
                $("#btn-form-change-status-review").prop("disabled", false)
                $("#btn-form-change-status-review").html("i dont know")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

   
})
