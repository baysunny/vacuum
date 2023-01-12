<?php

date_default_timezone_set('Asia/Jakarta');
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_connection.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/global.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/library/library_session.php";

$test = Connection::testConnection();
if($test){
	echo "success";
	// $query = "SELECT * FROM session, users WHERE users.username = session.username";
	$query = "SELECT * FROM users RIGHT JOIN session ON users.username = session.username";

	$result = Connection::connect()->query($query);
	echo "<pre>";
	$x = 0;
	while($row = $result->fetch_assoc()){
		$x++;
		echo $x.' - ';
		print_r($row);
	}
	// $session = new Session();
	// $username = "baysunny";
	// $ipAddress = getIpAddress();
	// $code = "00-03";
 //    $sql = "INSERT INTO session(ip_address, username, code, status) VALUES('$ipAddress', '$username', '$code', 0)";
 //    $result = Connection::connect()->query($sql);
 //    echo "<pre>";
 //    if($result){
        
 //        echo "suckess";
 //    }else{
 //    	echo "failed to insert";
 //    }
}else{
	echo "not Usc";
}