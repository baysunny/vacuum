<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_users.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_session.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_review_code.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_review.php";


if(isset($_POST["add_review"])){
    $required_post = array("ipAddress", "code", "name", "starRating", "email", "message");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    $ipAddress = clean_input(cleanInput($_POST["ipAddress"]));
    $name = clean_input(cleanInput($_POST['name']));
    $code = clean_input(cleanInput($_POST['code']));
    $starRating = clean_input(cleanInput($_POST['starRating']));
    $email = clean_input(cleanInput($_POST['email']));
    $message = clean_input(cleanInput($_POST['message']));

    $dateCreated = date("Y-m-d H:i:s");
    $inputImage = false;

    if($starRating < 1 || $starRating > 5){
        $data["info"] = "Error Star";
        echo json_encode($data);
        die();
    }

    if(!isset($_FILES["userImage"])){
        $data["info"] = "Error Form";
        echo json_encode($data);
        die();
    }

    $orgUserImageFile = file_validator($_FILES["userImage"], array('jpg', 'jpeg', 'png', 'gif'));
    if(!$orgUserImageFile){
        $userImageFile = "default.jpg";
        $orgUserImageFile = "default.jpg";
    }else{
        $inputImage = true;
        $orgUserImageFile = $_FILES["userImage"]['name'];
        $temp = explode('.', $orgUserImageFile);
        $extension = strtolower(end($temp));
        $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
        $dateObj->setTimeZone(new DateTimeZone('Asia/Jakarta'));
        $userImageFile = "user-".$dateObj->format("Y.m.d.H.i.s.u").".".$extension;
        $imageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-user/user-images/".$userImageFile;
    }

    $o_reviewCode = new Review_Code();
    $reviewCode = $o_reviewCode->getReviewCode($code);
    if(!$reviewCode || $reviewCode["ipAddress"] != $ipAddress){
        $data["info"] = "Error Authentication";
        echo json_encode($data);
        die();
    }

    if($reviewCode["status"] != 0){
        $data["info"] = "Form Expired";
        echo json_encode($data);
        die();
    }

    if(!$o_reviewCode->verifyReviewCode($code)){
        $data["info"] = "An Error Occured";
        echo json_encode($data);
        die();
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $data["info"] = "Wrong Format Email";
        echo json_encode($data);
        die();
    }

    
    if($inputImage){
        if(!move_uploaded_file($_FILES["userImage"]["tmp_name"], $imageFile)){
            $data["info"] = "Image Uploading Failed";
            echo json_encode($data);
            die();
        }    
    }
    

    $o_review = new Review();
    if($o_review->addReview($ipAddress, $code, $orgUserImageFile, $userImageFile, $name, $email, $message, $starRating, $dateCreated)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();  
    }
    
    
    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["delete_review"])){
    $required_post = array("username", "code", "reviewID");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }
  
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $reviewID = clean_input(cleanInput($_POST["reviewID"]));
    
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

    $o_review = new Review();
    $review = $o_review->getReview($reviewID);
    if(!$review){
        $data["info"] = "Review Not Found";
        echo json_encode($data);
        die();
    }

    $userImage = $_SERVER['DOCUMENT_ROOT']."/drives/drive-user/user-images/".$review["userImage"];
    
    if(file_exists($userImage)){
        if(!unlink($userImage)){
            $data["info"] = "Failed To Proccess Image";
            echo json_encode($data);
            die();
        }
    }
    
    if($o_review->deleteReview($reviewID)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["change_status_review"])){
    $required_post = array("username", "code", "reviewID", "currentStatus");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }
  
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $reviewID = clean_input(cleanInput($_POST["reviewID"]));
    $currentStatus = clean_input(cleanInput($_POST["currentStatus"]));
    
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
    
    $o_review = new Review();
    $review = $o_review->getReview($reviewID);
    if(!$review){
        $data["info"] = "Review Not Found";
        echo json_encode($data);
        die();
    }

    $status = $review["status"] == 1 ? 0 : 1;
    $dateApproved = date("Y-m-d H:i:s");
    if($o_review->updateReview($reviewID, $review["email"], $review["message"], $review["starRating"], $status, $username, $dateApproved)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["get_reviews"])){
    $o_review = new Review();
    $data["status"] = "success";
    $data["reviews"] = $o_review->getReviews();
    echo json_encode($data);
    die();

}else if(isset($_POST["get_review"])){
    $reviewID = clean_input(cleanInput($_POST['get_review']));
    $data["status"] = "ERROR";
    $data["info"] = "NULL";

    $o_review = new Review();
    $review = $o_review->getReview($reviewID);
    if($review){
        $data["review"] = $review;
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }
    
    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else{
    $data["info"] = "Not Recognized!";
    echo json_encode($data);
    die();

}

