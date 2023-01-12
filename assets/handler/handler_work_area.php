<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_users.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_session.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_authentication.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_work_area.php";

if(isset($_POST["add_workArea"])){
    $required_post = array("ipAddress", "username", "code", "authenticationCode", 
                           "areaName", "level", "parentID");

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

    $areaName = clean_input(cleanInput($_POST["areaName"]));
    $level = clean_input(cleanInput($_POST["level"]));
    $parentID = clean_input(cleanInput($_POST["parentID"]));

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

    if($level > 2 || $level < 1){
        $data["info"] = "Level Error";
        echo json_encode($data);
        die();        
    }

    if($parentID == 0 && $level != 1 || $parentID > 0 && $level == 1){
        $data["info"] = "Parent ID Error";
        echo json_encode($data);
        die();           
    }

    $o_workArea = new Work_Area();

    if($level == 2){
        $workArea = $o_workArea->getWorkArea($parentID);
        if(!$workArea){
            $data["info"] = "Work Area Not Found";
            echo json_encode($data);
            die();
        }

        if(!$o_authentication->verifyAuthentication($authenticationCode)){
            $data["info"] = "Failed to Verify Authentication";
            echo json_encode($data);
            die();
        }

        if($o_workArea->addWorkArea($areaName, $level, $parentID, $authenticationCode, $username, $dateCreated)){
            $data["status"] = "success";
            $data["info"] = "success";
            echo json_encode($data);
            die();
        }
    }else{
        if($parentID != 0){
            $data["info"] = "Error Occured";
            echo json_encode($data);
            die();   
        }

        if(!$o_authentication->verifyAuthentication($authenticationCode)){
            $data["info"] = "Failed to Verify Authentication";
            echo json_encode($data);
            die();
        }

        if($o_workArea->addWorkArea($areaName, $level, $parentID, $authenticationCode, $username, $dateCreated)){
            $data["status"] = "success";
            $data["info"] = "success";
            echo json_encode($data);
            die();
        }
    }
    

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["delete_workArea"])){

    $required_post = array("ipAddress", "username", "code", "authenticationCode", 
                           "workAreaID");
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

    $workAreaID = clean_input(cleanInput($_POST["workAreaID"]));

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

    $o_workArea = new Work_Area();
    $workArea = $o_workArea->getWorkArea($workAreaID);
    if(!$workArea){
        $data["info"] = "Work Area Not Found";
        echo json_encode($data);
        die();
    }

    if(!$o_authentication->verifyAuthentication($authenticationCode)){
        $data["info"] = "Failed to Verify Authentication";
        echo json_encode($data);
        die();
    }

    if($o_workArea->deleteWorkArea($workAreaID)){
        if($workArea["level"] == 1){
            if($o_workArea->deleteSubArea($workAreaID)){
                $data["status"] = "success";
                $data["info"] = "success";
                echo json_encode($data);
                die();
            }else{
                $data["info"] = "FAILED TO DELETE SUBAREA";
                echo json_encode($data);
                die();

            }
        }
        $data["status"] = "success";
        $data["info"] = "success";
        echo json_encode($data);
        die();
    }


    

    $data["info"] = "FATAL ERROR";
    echo json_encode($data);
    die();

}else if(isset($_POST["get_workAreas"])){
    
    // $o_service = new Service();
    $data["status"] = "success";
    $o_workArea = new Work_Area();
    $workAreas = array(
        array(
            "workAreaID"=>1,
            "areaName"=>"Wayland",
            "level"=>2,
            "parentID"=>3,
            "createdBy"=>"baysunny",
            "dateCreated"=>"",
            "child"=>array()
        ),
        array(
            "workAreaID"=>4,
            "areaName"=>"Wayland 2.3",
            "level"=>2,
            "parentID"=>3,
            "createdBy"=>"baysunny",
            "dateCreated"=>"",
            "child"=>array()
        ),
        array(
            "workAreaID"=>2,
            "areaName"=>"sWETEARRRR",
            "level"=>1,
            "parentID"=>0,
            "createdBy"=>"baysunny",
            "dateCreated"=>"",
            "child"=>array()
        ),
        array(
            "workAreaID"=>3,
            "areaName"=>"Wayland 2",
            "level"=>1,
            "parentID"=>0,
            "createdBy"=>"baysunny",
            "dateCreated"=>"",
            "child"=>array()
        )
    );
    $workAreas = $o_workArea->getWorkAreas();
    $sortedWorkAreas = array();
    foreach($workAreas as $workArea){
        if($workArea["level"] == 1){
            array_push($sortedWorkAreas, $workArea);
        }
    }

    foreach($workAreas as $workArea){
        foreach($sortedWorkAreas as $i => $area){
            if($workArea["parentID"] == $area["workAreaID"] && $workArea["level"] == 2){
                array_push($sortedWorkAreas[$i]["child"], $workArea);    
            }
        }
    }
    
    $data["workAreas"] = $sortedWorkAreas;
    echo json_encode($data);
    die();

}else{
    $data["info"] = "UNKNOWN CREATURE :)";
    echo json_encode($data);
    die();

}

