<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_review_code.php";


if(isset($_POST["generate_code"])){
    $required_post = array("ipAddress");
    $data["status"] = "ERROR";
    $data["info"] = "NULL";
    $data["code"] = "";

    if(!post_validator($_POST, $required_post)){
        $data["info"] = "Data Required Error!";
        echo json_encode($data);
        die();
    }

    $ipAddress = clean_input(cleanInput($_POST["ipAddress"]));
    $dateCreated = date("Y-m-d H:i:s");
    $code = "";

    $o_reviewCode = new Review_Code();
    while(True){
        $code = generate_code();
        if(!$o_reviewCode->getReviewCode($code)){
            break;
        }
    }

    if($o_reviewCode->addReviewCode($ipAddress, $code, $dateCreated)){
        $data["status"] = "success";
        $data["info"] = "success";
        $data["code"] = $code;
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

