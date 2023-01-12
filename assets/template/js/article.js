$(document).ready(function(){

    
    $(".copy-text").on("click", function(e) {
        var oldData = $(this).siblings(".old-data").select().val()
        document.execCommand("copy")

        alert("copied: " + oldData)

    })

    // *** trigger button > modal add article ***
    $("#add-article").on("click", function(e) {
        e.preventDefault()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData()
        formData.append("generate_authentication_code", "")
        formData.append("ipAddress", $("#my-ipAddress").text())
        formData.append("username", $("#my-username").text())
        formData.append("code", $("#my-code").text())
        formData.append("note", "add-article")
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
                    $("#add-article-authentication-code").val(result.code)
                    var modalAddArticle = new bootstrap.Modal($('#modal-add-article'))
                    modalAddArticle.show()
                }
                $("#add-article").prop("disabled", false)
                $("#add-article").html('Tambah Artikel <span class="fa fa-plus"></span>')
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** trigger button > modal edit article ***
    $(".edit-article").on("click", function(e) {
        e.preventDefault()
        var articleID = $(this).siblings(".article-id").text()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData()
        formData.append("get_article", articleID)
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
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    $("#edit-article-id").attr("value", result.article.articleID)

                    $("#edit-image").attr("src", "/drives/drive-article/article-images/" + result.article.imageName)


                    $("#edit-title").attr("value", result.article.title)
                    $("#edit-title").siblings(".new-data").attr("value", result.article.title)

                    $("#edit-description").attr("value", result.article.description)
                    $("#edit-description").siblings(".new-data").attr("value", result.article.description)

                    $("#edit-url").attr("value", result.article.url)
                    $("#edit-url").siblings(".new-data").attr("value", result.article.url)

                    var modalEditArticle = new bootstrap.Modal($('#modal-edit-article'))
                    modalEditArticle.show()
                }
                $(".edit-article").prop("disabled", false)
                $(".edit-article").html("Edit")
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })

    // *** trigger button > modal delete article ***
    $(".delete-article").on("click", function(e) {
        e.preventDefault()
        var articleID = $(this).siblings(".article-id").text()
        $(this).prop("disabled", true)
        $(this).html("<span class=\'spinner-border spinner-border-sm\'></span> Loading..")
        var formData = new FormData()
        formData.append("get_article", articleID)
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
                    $(".toast-body").html(result.info)
                    var toastLiveExample = document.getElementById("liveToast")
                    var toast = new bootstrap.Toast(toastLiveExample)
                    toast.show()
                }else{
                    $("#delete-article-id").attr("value", result.article.articleID)
                    $("#title").html("( " + result.article.title + " )")
                    
                    var modalDeleteArticle = new bootstrap.Modal($('#modal-delete-article'))
                    modalDeleteArticle.show()
                }
                $(".delete-article").prop("disabled", false)
                $(".delete-article").html("Delete")
                
            },error: function(){
                alert("error in ajax form submission")
            }
        })
    })    
})
