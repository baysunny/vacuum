<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_users.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_session.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_authentication.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_article.php";


if(isset($_POST["add_article"])){
    $required_post = array("ipAddress", "username", "code", "authenticationCode",
                           "title", "description", "url");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";

    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    if(!isset($_FILES["articleImage"])){
        $data["info"] = "Image Error!";
        echo json_encode($data);
        die();
    }

    $articleImage = file_validator($_FILES["articleImage"], array('jpg', 'jpeg', 'png'));
    if(!$articleImage){
        $data["info"] = "Error image";
        echo json_encode($data);
        die();
    }
    
    $ogImageName = $_FILES["articleImage"]['name'];
    $temp = explode('.', $ogImageName);
    $extension = strtolower(end($temp));

    $ipAddress = clean_input(cleanInput($_POST["ipAddress"]));
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $authenticationCode = clean_input(cleanInput($_POST["authenticationCode"]));

    $title = clean_input(cleanInput($_POST["title"]));
    $description = clean_input(cleanInput($_POST["description"]));
    $url = clean_input(cleanInput($_POST["url"]));

    $dateCreated = date("Y-m-d H:i:s");
    $o_user = new Users();
    $user = $o_user->getUser($username);
    
    if(!$user){
        $data["info"] = "Authentication Error";
        echo json_encode($data);
        die();
    }

    if($user["level"] != 1){
        $data["info"] = "You Don't Have Authorization";
        echo json_encode($data);
        die();
    }

    // checking session
    $o_session = new Session();
    $session = $o_session->getSession($code);
    if(!$session){
        $data["info"] = "User Not Recognized!";
        echo json_encode($data);
        die();  
    }

    if($session["username"] != $username){
        $data["info"] = "SESSION ERROR";
        echo json_encode($data);
        die();
    }

    if($session["status"] != 1){
        $data["info"] = "SESSION EXPIRED";
        echo json_encode($data);
        die();
    }

    // checking authentication
    $o_authentication = new Authentication();
    $authentication = $o_authentication->getAuthentication($authenticationCode);
    if(!$authentication){
        $data["info"] = "Authentication Failed";
        echo json_encode($data);
        die();
    }

    if($authentication["ipAddress"] != $ipAddress){
        $data["info"] = "Authentication Error";
        echo json_encode($data);
        die();
    }

    if($authentication["status"] != 0){
        $data["info"] = "Form Expired";
        echo json_encode($data);
        die();
    }

    if(!$o_authentication->verifyAuthentication($authenticationCode)){
        $data["info"] = "Failed to Verify Authentication";
        echo json_encode($data);
        die();
    }
 
    $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
    $dateObj->setTimeZone(new DateTimeZone('Asia/Jakarta'));
    $articleName = "article-".$dateObj->format("Y.m.d.H.i.s.u").".".$extension;
    $imageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-article/article-images/".$articleName;
    
    if(!move_uploaded_file($_FILES["articleImage"]["tmp_name"], $imageFile)){
        $data["info"] = "Image Uploading Failed";
        echo json_encode($data);
        die();
    }
    
    $o_article = new Article();
    if($o_article->addArticle($title, $description, $ogImageName, $articleName, $url, $authenticationCode, $username, $dateCreated)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["edit_article"])){
    $required_post = array("username", "code", "articleID", "title", "description", "url");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";

    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    if(!isset($_FILES["articleImage"])){
        $data["info"] = "Image Error!";
        echo json_encode($data);
        die();
    }

    $articleImage = file_validator($_FILES["articleImage"], array('jpg', 'jpeg', 'png', 'gif'));
    if(!$articleImage){
        $data["info"] = "Error image";
        echo json_encode($data);
        die();
    }
    
    $ogImageName = $_FILES["articleImage"]['name'];
    $temp = explode('.', $ogImageName);
    $extension = strtolower(end($temp));
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $articleID = clean_input(cleanInput($_POST["articleID"]));
    $title = clean_input(cleanInput($_POST["title"]));
    $description = clean_input(cleanInput($_POST["description"]));
    $url = clean_input(cleanInput($_POST["url"]));
    $dateCreated = date("Y-m-d H:i:s");
    $o_user = new Users();
    $user = $o_user->getUser($username);
    
    if(!$user){
        $data["info"] = "Authentication Error";
        echo json_encode($data);
        die();
    }

    if($user["level"] != 1){
        $data["info"] = "You Don't Have Authorization";
        echo json_encode($data);
        die();
    }

    $o_session = new Session();
    $session = $o_session->getSession($code);
    if(!$session){
        $data["info"] = "User Not Recognized!";
        echo json_encode($data);
        die();  
    }

    if($session["username"] != $username){
        $data["info"] = "SESSION ERROR";
        echo json_encode($data);
        die();
    }

    if($session["status"] != 1){
        $data["info"] = "SESSION EXPIRED";
        echo json_encode($data);
        die();
    }


    $o_article = new Article();
    $articleBC = $o_article->getArticle($articleID);
    if(!$articleBC){
        $data["info"] = "Article Not Found!";
        echo json_encode($data);
        die();
    }

    $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
    $dateObj->setTimeZone(new DateTimeZone('Asia/Jakarta'));
    $imageName = "article-".$dateObj->format("Y.m.d.H.i.s.u").".".$extension;
    $imageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-article/article-images/".$imageName;
    $oldImageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-article/article-images/".$articleBC["imageName"];
    
    if(file_exists($oldImageFile)){
        if(!unlink($oldImageFile)){
            $data["info"] = "Failed To Proccess Image";
            echo json_encode($data);
            die();
        }
    }
    
    if(!move_uploaded_file($_FILES["articleImage"]["tmp_name"], $imageFile)){
        $data["info"] = "Image Uploading Failed";
        echo json_encode($data);
        die();
    }
    
    
    if($o_article->editArticle($articleID, $title, $description, $ogImageName, $imageName, $url)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["delete_article"])){
    $required_post = array("username", "code", "articleID");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }
  
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $articleID = clean_input(cleanInput($_POST["articleID"]));
    
    $o_user = new Users();
    $user = $o_user->getUser($username);
    
    if(!$user){
        $data["info"] = "Authentication Error";
        echo json_encode($data);
        die();
    }

    if($user["level"] != 1){
        $data["info"] = "You Don't Have Authorization";
        echo json_encode($data);
        die();
    }

    $o_session = new Session();
    $session = $o_session->getSession($code);
    if(!$session){
        $data["info"] = "User Not Recognized!";
        echo json_encode($data);
        die();  
    }

    if($session["username"] != $username){
        $data["info"] = "SESSION ERROR";
        echo json_encode($data);
        die();
    }

    if($session["status"] != 1){
        $data["info"] = "SESSION EXPIRED";
        echo json_encode($data);
        die();
    }


    $o_article = new Article();
    $articleBC = $o_article->getArticle($articleID);
    if(!$articleBC){
        $data["info"] = "Article Not Found";
        echo json_encode($data);
        die();
    }

    $oldImageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-article/article-images/".$articleBC["imageName"];
    if(file_exists($oldImageFile)){
        if(!unlink($oldImageFile)){
            $data["info"] = "Failed To Proccess Image";
            echo json_encode($data);
            die();
        }
    }
    
    
    if($o_article->deleteArticle($articleID)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST['get_article'])){
    $articleID = clean_input(cleanInput($_POST['get_article']));
    $data["status"] = "ERROR";
    $data["info"] = "NULL";

    $o_article = new Article();
    $article = $o_article->getArticle($articleID);
    if($article){
        $data["article"] = $article;
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }
    
    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST['get_articles'])){
    $o_article = new Article();
    $data["status"] = "success";
    $data["articles"] = $o_article->getArticles();
    echo json_encode($data);
    die();

}else{
    $data["info"] = "UNKNOWN CREATURE :)";
    echo json_encode($data);
    die();

}

