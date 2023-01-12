(function () {
  
    var formData = new FormData()
    formData.append("get_services", "000")
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
                // alert("Load Icon / Running justTest system...")
                for(var i=0; i<result.services.length; i++){
                    $('#sunnyIcon-'+result.services[i].serviceID).css({
                        "mask":"url(/drives/drive-service/service-icons/" + result.services[i].iconName + ") no-repeat center / contain",
                        "-webkit-mask":"url(/drives/drive-service/service-icons/" + result.services[i].iconName + ") no-repeat center / contain",
                        "background-color":"#00A2E9",
                        "transition":"all 0.3s ease-in-out"
                    })
                }
            }
            
        },error: function(){
            alert("error in ajax form submission")
        }
    })    
})()

