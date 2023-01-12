<?php

class Session{
    
    function __construct(){
        // makes the authentication expired in 5min by change the status to 2
        $sql = "UPDATE session SET status=2 WHERE status=1 AND date_created < (NOW() - INTERVAL 60 MINUTE)";
        Connection::connect()->query($sql);

    }

    function getSession($code){
        $sql = "SELECT * FROM session WHERE code='$code'";
        $result = Connection::connect()->query($sql);
        if($result->num_rows != 1){
            return false;
        }

        $loginHistory = array();
        if($row = $result->fetch_assoc()){            
            $loginHistory["loginID"] = $row["login_id"];
            $loginHistory["ipAddress"] = $row["ip_address"];
            $loginHistory["username"] = $row["username"];
            $loginHistory["code"] = $row["code"];
            $loginHistory["status"] = $row["status"];
            $loginHistory["dateCreated"] = $row["date_created"];
            
        }
        return $loginHistory;
    }

    function generateSession($ipAddress, $username, $code, $status, $dateCreated){
        $sql = "INSERT INTO session(ip_address, username, code, status, date_created) VALUES('$ipAddress', '$username', '$code', '$status', '$dateCreated')";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function verifySession($code){
        $sql = "UPDATE session SET status=1 WHERE code='$code'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }
}


