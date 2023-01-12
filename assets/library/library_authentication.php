<?php

class Authentication{

    function __construct(){
        // makes the authentication expired in 5min by change the status to 2
        $sql = "UPDATE authentication SET status=2 WHERE status=0 AND date_created < (NOW() - INTERVAL 5 MINUTE)";
        Connection::connect()->query($sql);

    }

    function getAuthentication($code){
        $sql = "SELECT * FROM authentication WHERE code='$code'";

        $result = Connection::connect()->query($sql);
        $authentication = array();
        if($row = $result->fetch_assoc()){            
            $authentication["authenticationID"] = $row["authentication_id"];
            $authentication["ipAddress"] = $row["ip_address"];
            $authentication["note"] = $row["note"];
            $authentication["code"] = $row["code"];
            $authentication["status"] = $row["status"];
            $authentication["dateCreated"] = $row["date_created"];
            
        }
        return $authentication;
    }

    function generateAuthentication($ipAddress, $username, $note, $code, $dateCreated){
        $sql = "INSERT INTO authentication(ip_address, username, note, code, status, date_created) VALUES('$ipAddress', '$username', '$note', '$code', 0, '$dateCreated')";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function verifyAuthentication($authenticationCode){
        $sql = "UPDATE authentication SET status=1 WHERE code='$authenticationCode'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }
}


