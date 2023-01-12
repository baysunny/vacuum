<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_users.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_session.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_authentication.php";

// creating session login and generate authentication form
if(isset($_POST["authentication_login"])){
    $required_post = array("authentication_login", "ipAddress", "username", "password");
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
    $password = clean_input(cleanInput($_POST["password"]));

    $dateCreated = date("Y-m-d H:i:s");
    $o_user = new Users();
    $user = $o_user->getUser($username);
    if(!$user){
        $data["info"] = "Authentication Error";
        echo json_encode($data);
        die();
    }else{
        if($user["showedPassword"] != $password){
            $data["info"] = "Authentication Error";
            echo json_encode($data);
            die();
        }else{
            $code = "";
            $session = new Session();
            while(True){
                $code = generate_code();
                if(!$session->getSession($code)){
                    break;
                }
            }
            if($session->generateSession($ipAddress, $username, $code, 0, $dateCreated)){
                $data["status"] = "success";
                $data["info"] = "success";
                $data["code"] = $code;
                echo json_encode($data);
                die();
            }
            $data["info"] = "Login Failed";
            echo json_encode($data);
            die();
        }
    }
    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["verify_login"])){
    $required_post = array("verify_login", "code");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }
    
    $code = clean_input(cleanInput($_POST["code"]));
    $o_session = new Session();
    $session = $o_session->getSession($code);
    if(!$session){
        $data["info"] = "Not Recognized!";
        echo json_encode($data);
        die();  
    }

    if($session["status"] != 0){
        $data["info"] = "SESSION EXPIRED";
        echo json_encode($data);
        die();
    }else{
        if($o_session->verifySession($code)){
            $data["status"] = "success";
            $data["info"] = "success";
            $data["session"] = $session;
            echo json_encode($data);
            die();
        }else{
            $data["info"] = "Failed To Verify";
            echo json_encode($data);
            die();
        }
    }

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();  

}else if(isset($_POST['verify_session'])){
    $required_post = array("verify_session", "username", "code");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }
    
    $code = clean_input(cleanInput($_POST["code"]));
    $username = clean_input(cleanInput($_POST["username"]));
    $o_session = new Session();
    $session = $o_session->getSession($code);
    if(!$session){
        $data["info"] = "Not Recognized!";
        echo json_encode($data);
        die();  
    }

    if($session["username"] != $username){
        $data["info"] = "SESSION ERROR";
        echo json_encode($data);
        die();
    }

    if($session["status"] == 1){
        $data["status"] = "success";
        $data["info"] = "SESSION IS RUNNING";
        $data["session"] = $session;
        echo json_encode($data);
        die();
    }
    

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();  

}else if(isset($_POST["authentication_logout"])){
    // EMPTY LOL !!
}else if(isset($_POST["generate_authentication_code"])){ // authentication form
    $required_post = array("ipAddress", "username", "code", "note");
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
    $code = clean_input(cleanInput($_POST['code']));
    $note = clean_input(cleanInput($_POST['note']));
    
    $dateCreated = date("Y-m-d H:i:s");
    $o_user = new Users();
    $user = $o_user->getUser($username);
    
    if(!$user){
        $data["info"] = "User Not Recognized!";
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
        $data["info"] = "Authentication Error";
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
    // generate authentication
    $code = "";
    $o_authentication = new Authentication();
    while(True){
        $code = generate_code();
        if(!$o_authentication->getAuthentication($code)){
            break;
        }
    }

    if(isset($_POST["justTest"])){
        $data["status"] = "success";
        $data["info"] = "success";
        $data["user"] = "baysunny";
        $data["code"] = $code;
        echo json_encode($data);
        die();   
    }

    if($o_authentication->generateAuthentication($ipAddress, $username, $note, $code, $dateCreated)){
        $data["status"] = "success";
        $data["info"] = "success";
        $data["user"] = $user;
        $data["code"] = $code;
        echo json_encode($data);
        die();
    }
    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else{
    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();
}

