$(document).ready(function(){

    // === Login ===
    $("#form-login").on("submit", function(e) {
        e.preventDefault()
        $(this).addClass("was-validated")
        $("#login-button").prop("disabled", true)
        $("#login-button").html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
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
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    window.location.replace("/authentication/redirect.php?code="+result.code+"&authentication=login")
                }
                $("#login-button").prop("disabled", false)
                $("#login-button").html("Login")
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })
})
