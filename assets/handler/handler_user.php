<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_users.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_session.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_authentication.php";


if(isset($_POST["get_user"])){
    $required_post = array("username", "code");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    $data["code"] = "";

    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    $username = clean_input(cleanInput($_POST['username']));
    $code = clean_input(cleanInput($_POST['code']));
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
    
    $data["status"] = "success";
    $data["info"] = "success";
    $data["user"] = $user;

    echo json_encode($data);
    die();

}else if(isset($_POST["update_user"])){
    $required_post = array("ipAddress", "username", "code", "authenticationCode", 
                           "newUsername", "newPassword", "newEmail", "confirmationPassword");

    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    $data["code"] = "";

    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    $ipAddress = clean_input(cleanInput($_POST["ipAddress"]));
    $username = clean_input(cleanInput($_POST["username"]));
    $code = clean_input(cleanInput($_POST["code"]));
    $authenticationCode = clean_input(cleanInput($_POST["authenticationCode"]));

    $newUsername = clean_input(cleanInput($_POST['newUsername']));
    $newPassword = clean_input(cleanInput($_POST['newPassword']));
    $newEmail = clean_input(cleanInput($_POST['newEmail']));
    $confirmationPassword = clean_input(cleanInput($_POST['confirmationPassword']));

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

    if($user["showedPassword"] != $confirmationPassword){
        $data["info"] = "Password Salah";
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

    // checking the new data
    if(!preg_match("/^[A-Za-z0-9]*$/", $newUsername)){
        $data["info"] = "Wrong Format Username";
        echo json_encode($data);
        die();
    }

    if(!filter_var($newEmail, FILTER_VALIDATE_EMAIL)){
        $data["info"] = "Wrong Format Email";
        echo json_encode($data);
        die();
    }

    $newData = $o_user->getUser($newUsername);
    if($newData && $newUsername != $username){
        $data["info"] = "Username Already Used";
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

    if(!$o_authentication->verifyAuthentication($authenticationCode)){
        $data["info"] = "Failed to Verify Authentication";
        echo json_encode($data);
        die();
    }

    if($o_user->updateUser($user["userID"], $newUsername, $newPassword, $newEmail)){
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

