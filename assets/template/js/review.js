$(document).ready(function(){

    $(".star-rating").on("click", function(e) {
        e.preventDefault()
        var currentStar = $(this).find(".fa-star")

        if(currentStar.hasClass("text-warning")){
            // (alert("tru"))
            var nextStars = $(this).nextAll().find(".fa-star")
            nextStars.removeClass("text-warning").addClass("text-dark")
        }else if(currentStar.hasClass("text-dark")){
            // alert("not dark")    
            currentStar.removeClass("text-dark").addClass("text-warning")
            var prevStars = $(this).prevAll().find(".fa-star")
            prevStars.removeClass("text-dark").addClass("text-warning")
        }   
    })

    // *** trigger button > modal add review ***
    $("#generate-review-code").on("click", function(e) {
        e.preventDefault()
        var ipAddress = $("#my-ipAddress").text()
        $(this).prop("disabled", true);
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData()
        formData.append("generate_code", "000")
        formData.append("ipAddress", ipAddress)
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            url: "/assets/handler/handler_review_code.php",
            data: formData,
            success: function (data) {
                var result = $.parseJSON(data)
                if(result.status != "success"){
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    $("#review-code").val(result.code)
                    // alert(result.code)
                  
                    var modalAddReview = new bootstrap.Modal($('#modal-add-review'))
                    modalAddReview.show()

                    
                }
                $("#generate-review-code").prop("disabled", false);
                $("#generate-review-code").html("Klik Untuk Masukan Review Kamu")
        
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** trigger button > modal delete review ***
    $(".delete-review").on("click", function(e) {
        e.preventDefault()
        var reviewID = $(this).siblings(".review-id").text()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span>")
        var formData = new FormData()
        formData.append("get_review", reviewID)
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
                    $("#delete-review-id").attr("value", result.review.reviewID)
                    $("#delete-review-star-rating").html(createStarRatingIcon(result.review.starRating))
                    $("#delete-review-email").html(result.review.email)
                    $("#delete-review-message").html(result.review.message)
                    if(result.review.status==1){
                        $("#delete-review-info").html("<span class='fa fa-exclamation-circle'></span> Ditampilkan")
                        $("#delete-review-sh").prop("checked", true)
                    }else if(result.review.status==0){
                        $("#delete-review-info").html("<span class='fa fa-exclamation-circle'></span> Tidak Ditampilkan")
                        $("#delete-review-sh").prop("checked", false)
                    }
                    var modalDeleteReview = new bootstrap.Modal($('#modal-delete-review'))
                    modalDeleteReview.show()
                }
                $(".delete-review").prop("disabled", false);
                $(".delete-review").html("<span class='fa fa-lg fa-close text-danger'></span>")                       
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** trigger radio (checkbox) > modal show/hide review ***
    $(".sh-review").on("click", function(e) {
        e.preventDefault()
        var reviewID = $(this).siblings(".review-id").text()
        $(this).prop("disabled", true)
        $(this).siblings(".review-status-loading-animation").removeClass("d-none")
        var formData = new FormData()
        formData.append("get_review", reviewID)
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
                    $("#change-status-review-id").attr("value", result.review.reviewID)
                    $("#change-status-review-star-rating").html(createStarRatingIcon(result.review.starRating))
                    $("#change-status-review-email").html(result.review.email)
                    $("#change-status-review-message").html(result.review.message)
                    if(result.review.status==1){
                        $("#change-status-review-info").html("<span class='fa fa-exclamation-circle'></span> Ditampilkan")
                        $("#change-status-review-sh").prop("checked", true)
                        $("#btn-form-change-status-review").html("Sembunyikan")
                    }else if(result.review.status==0){
                        $("#change-status-review-info").html("<span class='fa fa-exclamation-circle'></span> Tidak Ditampilkan")
                        $("#change-status-review-sh").prop("checked", false)
                        $("#btn-form-change-status-review").html("Tampilkan")
                    }
                    
                    
                    var modalChangeStatusReview = new bootstrap.Modal($('#modal-change-status-review'))
                    modalChangeStatusReview.show()
                    

                }
                $(".sh-review").prop("disabled", false);
                $(".review-status-loading-animation").addClass("d-none")                       
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })



    function createStarRatingIcon(n){
        var result = ""
        for(var i=0; i<5; i++){
            if(i < n){
                result += "<span class=\'fa fa-star text-warning\'></span>"
            }else{
                result += "<span class=\'fa fa-star text-dark\'></span>"
            }
            

        }return result
    }

})