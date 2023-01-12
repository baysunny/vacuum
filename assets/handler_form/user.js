$(document).ready(function(){

    // *** update user / triggers confirmation modal ***
    $("#form-update-user").on("submit", function(e) {
        e.preventDefault()
        $("#btn-form-update-user").prop("disabled", true)
        $("#btn-form-update-user").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        $(this).addClass("was-validated")
        var formData = new FormData(this)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_authentication.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(formData.get("newUsername").length < 1 || formData.get("newPassword").length < 1 || formData.get("newEmail").length < 1){
                    result.status = "failed"
                    result.info = "Input field!"
                }
                if(!validateEmail(formData.get("newEmail"))){
                    result.status = "failed"
                    result.info = "Email Error"
                }
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    $("#authentication-code").val(result.code)
                    $("#edit-username").val(result.user.username)
                    $("#new-username").val(formData.get("newUsername"))

                    $("#edit-password").val(result.user.showedPassword)
                    $("#new-password").val(formData.get("newPassword"))

                    $("#edit-email").val(result.user.email)
                    $("#new-email").val(formData.get("newEmail"))
                    var modalConfirmationUpdateUser = new bootstrap.Modal($('#modal-confirmation-update-user'))
                    modalConfirmationUpdateUser.show();
                }
                $("#btn-form-update-user").prop("disabled", false)
                $("#btn-form-update-user").html("Update")
        
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    
    // *** update user / confirmation modal ***
    $("#btn-form-confirmation-update-user").on("click", function(e) {
        e.preventDefault()
        $("#btn-form-confirmation-update-user").prop("disabled", true)
        let form = $("#form-confirmation-update-user")[0]
        $("#btn-form-confirmation-update-user").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData(form)
        formData.append("confirmationPassword", $("#confirmation-password").val())
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_user.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    var modalConfirmationUpdateUser = bootstrap.Modal.getInstance($('#modal-confirmation-update-user'))
                    var modalSuccess = new bootstrap.Modal($('#modal-success-notification'))

                    modalConfirmationUpdateUser.hide()
                    modalSuccess.show()
                    
                    $("#modal-success-notification").on("hidden.bs.modal", function(){
                        window.location.replace("/authentication/redirect.php?code="+formData.get("code")+"&authentication=logout")
                    });
                }
                $("#btn-form-confirmation-update-user").prop("disabled", false)
                $("#btn-form-confirmation-update-user").html("Update")
        
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })


    const validateEmail = (email) => {
      return email.match(
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      );
};

})