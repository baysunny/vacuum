<?php

class Review_Code{

    function __construct(){
        $sql = "DELETE FROM review_code WHERE status!=1 AND date_created < (NOW() - INTERVAL 5 MINUTE)";
        Connection::connect()->query($sql);
    }

	function addReviewCode($ipAddress, $code, $dateCreated){
		$sql = "INSERT INTO review_code(ip_address, code, status, date_created) VALUES('$ipAddress', '$code', 0, '$dateCreated')";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
	}

	function verifyReviewCode($code){
		$sql = "UPDATE review_code SET status = 1 WHERE code='$code'";
		$result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
	}

	function getReviewCode($code){
		$sql = "SELECT * FROM review_code WHERE code='$code'";

        $result = Connection::connect()->query($sql);
        if($result->num_rows != 1){
            return false;
        }

        $user = array();
        if($row = $result->fetch_assoc()){            
            $user["reviewCodeID"] = $row["review_code_id"];
            $user["ipAddress"] = $row["ip_address"];
            $user["code"] = $row["code"];
            $user["status"] = $row["status"];
            $user["dateCreated"] = $row["date_created"];
            
        }
        return $user;
	}



}


?>