$(document).ready(function(){

    // edit service displaying new image
    function noPreview() {
        $('#edit-service-newImage').attr('src', '/drives/drive-service/service-images/general-image.jpg');
    }

    function selectImage(e) {
        $('#edit-service-newImage').attr('src', e.target.result);
    }

    $('#newFileImage').change(function() {
        var file = this.files[0];
        var match = ["image/jpeg", "image/png", "image/jpg", "image/gif"];
        if(typeof(file) === "undefined"){
            noPreview();
            return false;
        }
        if( !( (file.type == match[0]) || (file.type == match[1]) || (file.type == match[2]) || (file.type == match[3]) ) ){
            noPreview();
            return false;
        }
        var reader = new FileReader();
        reader.onload = selectImage;
        reader.readAsDataURL(this.files[0]);

    });

    // === add service generate form code ===
    $("#add-service").on("click", function(e) {
        e.preventDefault()
        $("#add-service").prop("disabled", true)
        $("#add-service").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData()
        formData.append("generate_authentication_code", "")
        formData.append("ipAddress", $("#my-ipAddress").text())
        formData.append("username", $("#my-username").text())
        formData.append("code", $("#my-code").text())
        formData.append("note", "add-service")
        // formData.append("justTest", "YESH")
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_authentication.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    $("#add-service-authentication-code").val(result.code)
                    var modalAddService = new bootstrap.Modal($('#modal-add-service'))
                    modalAddService.show()
                }
                $("#add-service").prop("disabled", false)
                $("#add-service").html('Tambah Layanan <span class="fa fa-plus"></span>')
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** trigger button > modal edit service ***
    $(".edit-service").on("click", function(e) {
        e.preventDefault()
        var serviceID = $(this).siblings(".service-id").text()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData()
        formData.append("get_service", serviceID)
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
                    var formData = new FormData()
                    formData.append("generate_authentication_code", "")
                    formData.append("ipAddress", $("#my-ipAddress").text())
                    formData.append("username", $("#my-username").text())
                    formData.append("code", $("#my-code").text())
                    formData.append("note", "edit-service")
                    // formData.append("justTest", "edit-service")
                    $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        enctype: "multipart/form-data",
                        url: "/assets/handler/handler_authentication.php",
                        data: formData,
                        success: function (data) {
                            var result2 = $.parseJSON(data)
                            if(result2.status != "success"){
                                $(".toast-body").html(result2.info)
                                var toastLiveExample = document.getElementById("liveToast")
                                var toast = new bootstrap.Toast(toastLiveExample)
                                toast.show()
                            }else{
                                $("#edit-service-authentication-code").val(result2.code)
                                $("#edit-service-id").attr("value", result.service.serviceID)
                                $("#edit-service-sunnyIcon").css({
                                    "mask":"url(/drives/drive-service/service-icons/" + result.service.iconName + ") no-repeat center / contain",
                                    "-webkit-mask":"url(/drives/drive-service/service-icons/" + result.service.iconName + ") no-repeat center / contain",
                                    "background-color":"#00A2E9",
                                    "transition":"all 0.3s ease-in-out"
                                })
                                $("#edit-service-title").attr("value", result.service.title)
                                $("#edit-service-description").val(result.service.description)
                                $("#edit-service-image").attr("src", "/drives/drive-service/service-images/" + result.service.imageName)
                                $("#edit-service-fullDescription").val(result.service.fullDescription)
                                var modalEditService = new bootstrap.Modal($('#modal-edit-service'))
                                modalEditService.show()
                            }
                        },error: function(){
                            alert("error in ajax form submission")
                        }
                    })
                    
                }
                $(".edit-service").prop("disabled", false)
                $(".edit-service").html("Edit")
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    }) 

    // *** trigger button > modal delete service ***
    $(".delete-service").on("click", function(e) {
        e.preventDefault()
        var serviceID = $(this).siblings(".service-id").text()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData()
        formData.append("get_service", serviceID)
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
                    var formData = new FormData()
                    formData.append("generate_authentication_code", "")
                    formData.append("ipAddress", $("#my-ipAddress").text())
                    formData.append("username", $("#my-username").text())
                    formData.append("code", $("#my-code").text())
                    formData.append("note", "delete-service")
                    // formData.append("justTest", "delete-service")
                    $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        enctype: "multipart/form-data",
                        url: "/assets/handler/handler_authentication.php",
                        data: formData,
                        success: function (data) {
                            var result2 = $.parseJSON(data)
                            if(result2.status != "success"){
                                $(".toast-body").html(result2.info)
                                var toastLiveExample = document.getElementById("liveToast")
                                var toast = new bootstrap.Toast(toastLiveExample)
                                toast.show()
                            }else{
                                $("#delete-service-authentication-code").val(result2.code)
                                $("#delete-service-id").attr("value", result.service.serviceID)
                                $("#delete-service-sunnyIcon").css({
                                    "mask":"url(/drives/drive-service/service-icons/" + result.service.iconName + ") no-repeat center / contain",
                                    "-webkit-mask":"url(/drives/drive-service/service-icons/" + result.service.iconName + ") no-repeat center / contain",
                                    "background-color":"#00A2E9",
                                    "transition":"all 0.3s ease-in-out"
                                })
                                $("#delete-service-title").html(result.service.title)
                                $("#delete-service-description").html(result.service.description)
                                var modalDeleteService = new bootstrap.Modal($('#modal-delete-service'))
                                modalDeleteService.show()
                            }
                        },error: function(){
                            alert("error in ajax form submission")
                        }
                    })
                    
                }
                $(".delete-service").prop("disabled", false)
                $(".delete-service").html("Delete")
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    }) 
})
