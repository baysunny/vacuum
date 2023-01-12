$(document).ready(function(){

    $(".add-workArea").on("click", function(e) {
        e.preventDefault()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        
        var parentID = $(this).siblings("#add-workArea-parent-id").text();
        var parentName = "";
        if(parentID!=0){
            var parentName = $(this).siblings("#add-workArea-parent-name").text();
        }

        var formData = new FormData()
        formData.append("generate_authentication_code", "")
        formData.append("ipAddress", $("#my-ipAddress").text())
        formData.append("username", $("#my-username").text())
        formData.append("code", $("#my-code").text())
        formData.append("note", "add-workArea")
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
                    $("#add-workArea-authentication-code").val(result.code)
                    var modalAddWorkArea = new bootstrap.Modal($('#modal-add-workArea'))
                    modalAddWorkArea.show()
                }
                
                $(".add-workArea").prop("disabled", false)
                if(parentID != 0){
                    $("#add-subAreaof-"+parentID).html('<span class="fa fa-plus"></span> Tambah <strong>Sub Area Kerja</strong> (' +parentName+')')
                    $("#add-workArea-level").attr("value", 2)
                }else{
                    $("#add-workArea-level").attr("value", 1)
                    $("#add-mainArea").html('Tambah Area Kerja <span class="fa fa-plus"></span>')
                }

                $("#add-workArea-parentID").attr("value", parentID)
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    $(".delete-workArea").on("click", function(e) {
        e.preventDefault()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        
        var workAreaID = $(this).siblings("#delete-workArea-id").text();
        var parentID = $(this).siblings("#delete-workArea-parent-id").text();

        var parentName = "";
        var areaName = "";
        if(parentID != 0){
            parentName = $(this).siblings("#delete-workArea-parent-name").text();
        }
        areaName = $(this).siblings("#delete-workArea-name").text();
        
        var formData = new FormData()
        formData.append("generate_authentication_code", "")
        formData.append("ipAddress", $("#my-ipAddress").text())
        formData.append("username", $("#my-username").text())
        formData.append("code", $("#my-code").text())
        formData.append("note", "delete-workArea")
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
                    $("#to-delete-workArea-id").val(workAreaID)
                    $("#to-delete-workArea-name").html(areaName)
                    $("#delete-workArea-authentication-code").val(result.code)
                    var modalDeleteWorkArea = new bootstrap.Modal($('#modal-delete-workArea'))
                    modalDeleteWorkArea.show()
                }
                if(parentID != 0){
                    $("#delete-subAreaof-"+workAreaID).html('<span class="fa fa-close"></span>')
                    $("#delete-subAreaof-"+workAreaID).prop("disabled", false)
                }else{
                    $("#delete-workAreaof-"+workAreaID).html('<span class="fa fa-plus"></span> Hapus <strong>Area Kerja</strong> (' +areaName+')')
                    $("#delete-workAreaof-"+workAreaID).prop("disabled", false)
                }
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })
})