<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_users.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_session.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_authentication.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_service.php";

// creating session login and generate authentication form
if(isset($_POST["add_service"])){
    $required_post = array("ipAddress", "username", "code", "authenticationCode", 
                           "title", "description", "fullDescription");

    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    $ipAddress = clean_input(cleanInput($_POST["ipAddress"]));
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $authenticationCode = clean_input(cleanInput($_POST["authenticationCode"]));

    $title = clean_input(cleanInput($_POST["title"]));
    $description = clean_input(cleanInput($_POST["description"]));
    $fullDescription = clean_input(cleanInput($_POST["fullDescription"]));

    $dateCreated = date("Y-m-d H:i:s");

    if(!isset($_FILES["serviceIcon"])){
        $data["info"] = "Image Icon!";
        echo json_encode($data);
        die();
    }

    $serviceIcon = file_validator($_FILES["serviceIcon"], array('jpg', 'jpeg', 'png', 'svg'));
    if(!$serviceIcon){
        $data["info"] = "Error Icon";
        echo json_encode($data);
        die();
    }
    $ogIconName = $_FILES["serviceIcon"]['name'];
    $temp = explode('.', $ogIconName);
    $extension = strtolower(end($temp));
    $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
    $dateObj->setTimeZone(new DateTimeZone('Asia/Jakarta'));

    $timesm = $dateObj->format("Y.m.d.H.i.s.u");

    $iconName = "sunny-icon-".$timesm.".".$extension;
    $iconFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-icons/".$iconName;


    // check image
    $serviceImage = file_validator($_FILES["serviceImage"], array('jpg', 'jpeg', 'png', 'svg'));
    if(!$serviceImage){
        $data["info"] = "Error image";
        echo json_encode($data);
        die();
    }
    $ogImageName = $_FILES["serviceImage"]['name'];
    $temp = explode('.', $ogImageName);
    $extension = strtolower(end($temp));
    $imageName = "sunny-image-".$timesm.".".$extension;
    $imageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-images/".$imageName;

    
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

    if(!move_uploaded_file($_FILES["serviceIcon"]["tmp_name"], $iconFile)){
        $data["info"] = "Icon Uploading Failed";
        echo json_encode($data);
        die();
    }

    if(!move_uploaded_file($_FILES["serviceImage"]["tmp_name"], $imageFile)){
        $data["info"] = "Image Uploading Failed";
        echo json_encode($data);
        die();
    }

    $o_service = new Service();
    if($o_service->addService($ogIconName, $iconName, $title, $description, $ogImageName, $imageName, $fullDescription, $authenticationCode, $username, $dateCreated)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["edit_service"])){
    $required_post = array("ipAddress", "username", "code", "authenticationCode", 
                           "serviceID", "newTitle", "newDescription", "newFullDescription");

    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    // authentication data
    $ipAddress = clean_input(cleanInput($_POST["ipAddress"]));
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $authenticationCode = clean_input(cleanInput($_POST["authenticationCode"]));

    // input data
    $serviceID = clean_input(cleanInput($_POST["serviceID"]));
    $title = clean_input(cleanInput($_POST["newTitle"]));
    $description = clean_input(cleanInput($_POST["newDescription"]));
    $fullDescription = clean_input(cleanInput($_POST["newFullDescription"]));

    $dateCreated = date("Y-m-d H:i:s");

    if(!isset($_FILES["serviceIcon"])){
        $data["info"] = "Image Icon!";
        echo json_encode($data);
        die();
    }

    $serviceIcon = file_validator($_FILES["serviceIcon"], array('jpg', 'jpeg', 'png', 'svg'));
    if(!$serviceIcon){
        $data["info"] = "Error Icon";
        echo json_encode($data);
        die();
    }
    $ogIconName = $_FILES["serviceIcon"]['name'];
    $temp = explode('.', $ogIconName);
    $extension = strtolower(end($temp));
    $dateObj = DateTime::createFromFormat('U.u', microtime(TRUE));
    $dateObj->setTimeZone(new DateTimeZone('Asia/Jakarta'));

    $timesm = $dateObj->format("Y.m.d.H.i.s.u");

    $iconName = "sunny-icon-".$timesm.".".$extension;
    $iconFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-icons/".$iconName;


    // check image
    $serviceImage = file_validator($_FILES["serviceImage"], array('jpg', 'jpeg', 'png', 'svg'));
    if(!$serviceImage){
        $data["info"] = "Error image";
        echo json_encode($data);
        die();
    }
    $ogImageName = $_FILES["serviceImage"]['name'];
    $temp = explode('.', $ogImageName);
    $extension = strtolower(end($temp));
    $imageName = "sunny-image-".$timesm.".".$extension;
    $imageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-images/".$imageName;

    
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

    

    $o_service = new Service();
    $serviceBC = $o_service->getService($serviceID);
    if(!$serviceBC){
        $data["info"] = "Data Not Found";
        echo json_encode($data);
        die();        
    }

    $oldImageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-images/".$serviceBC["imageName"];
    $oldIconFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-icons/".$serviceBC["iconName"];

    if(file_exists($oldImageFile)){
        if(!unlink($oldImageFile)){
            $data["info"] = "Failed To Proccess Image";
            echo json_encode($data);
            die();
        }
    }
    if(file_exists($oldIconFile)){
        if(!unlink($oldIconFile)){
            $data["info"] = "Failed To Proccess Icon";
            echo json_encode($data);
            die();
        }    
    }

    if(!move_uploaded_file($_FILES["serviceIcon"]["tmp_name"], $iconFile)){
        $data["info"] = "Icon Uploading Failed";
        echo json_encode($data);
        die();
    }

    if(!move_uploaded_file($_FILES["serviceImage"]["tmp_name"], $imageFile)){
        $data["info"] = "Image Uploading Failed";
        echo json_encode($data);
        die();
    }

    if(!$o_authentication->verifyAuthentication($authenticationCode)){
        $data["info"] = "Failed to Verify Authentication";
        echo json_encode($data);
        die();
    }
    
    if($o_service->editService($serviceID, $ogIconName, $iconName, $title, $description, $ogImageName, $imageName, $fullDescription, $authenticationCode, $username, $dateCreated)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["delete_service"])){
    $required_post = array("ipAddress", "username", "code", "authenticationCode",
                           "serviceID");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    $ipAddress = clean_input(cleanInput($_POST["ipAddress"]));
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $authenticationCode = clean_input(cleanInput($_POST["authenticationCode"]));

    $serviceID = clean_input(cleanInput($_POST["serviceID"]));
    
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


    $o_service = new Service();
    $service = $o_service->getService($serviceID);
    if(!$service){
        $data["info"] = "Layanan Not Found";
        echo json_encode($data);
        die();
    }

    $iconFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-icons/".$service["iconName"];
    if(file_exists($iconFile)){
        if(!unlink($iconFile)){
            $data["info"] = "Failed To Proccess Image";
            echo json_encode($data);
            die();
        }
    }

    $imageFile = $_SERVER['DOCUMENT_ROOT']."/drives/drive-service/service-images/".$service["imageName"];
    if(file_exists($imageFile)){
        if(!unlink($imageFile)){
            $data["info"] = "Failed To Proccess Image";
            echo json_encode($data);
            die();
        }
    }
    
    
    if($o_service->deleteService($serviceID)){
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["get_service"])){
    $serviceID = clean_input(cleanInput($_POST['get_service']));
    $data["status"] = "ERROR";
    $data["info"] = "NULL";

    $o_service = new Service();
    $service = $o_service->getService($serviceID);
    if($service){
        $data["service"] = $service;
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }
    
    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["get_services"])){
    $o_service = new Service();
    $data["status"] = "success";
    $data["services"] = $o_service->getServices();
    echo json_encode($data);
    die();

}else{
    $data["info"] = "UNKNOWN CREATURE :)";
    echo json_encode($data);
    die();
}

