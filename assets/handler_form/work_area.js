$(document).ready(function(){

    $("#form-add-workArea").on("submit", function(e) {
        e.preventDefault()
        
        $("#btn-form-add-workArea").prop("disabled", true)
        $("#btn-form-add-workArea").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $("#form-add-workArea :input").prop("disabled", true)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_work_area.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalAddWorkArea = bootstrap.Modal.getInstance($('#modal-add-workArea'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalAddWorkArea.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    })
                }
                $("#form-add-workArea :input").prop("disabled", false)
                $("#btn-form-add-workArea").html("Tambah")
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    $("#form-delete-workArea").on("submit", function(e) {
        e.preventDefault()
        
        $("#btn-form-delete-workArea").prop("disabled", true)
        $("#btn-form-delete-workArea").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData(this)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_work_area.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalDeleteWorkArea = bootstrap.Modal.getInstance($('#modal-delete-workArea'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalDeleteWorkArea.hide();
                    modalSuccess.show();

                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        location.reload();
                    })
                }
                $("#btn-form-delete-workArea").html("Delete")
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })
})