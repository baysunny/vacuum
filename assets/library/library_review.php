<?php

class Review{

	function addReview($ipAddress, $code, $orgUserImage, $userImage, $name, $email, $message, $starRating, $dateCreated){
		$sql = "INSERT INTO review(ip_address, code, user_image_og, user_image, name, email, message, star_rating, status, date_approved, date_created) VALUES('$ipAddress', '$code', '$orgUserImage', '$userImage', '$name', '$email', '$message', '$starRating', 0, '0000-00-00 00:00:00', '$dateCreated')";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
	}

    function deleteReview($reviewID){
        $sql = "DELETE FROM review WHERE review_id='$reviewID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function updateReview($reviewID, $email, $message, $starRating, $status, $approvedBy, $dateApproved){
        $sql = "UPDATE review SET email='$email', message='$message', star_rating='$starRating', status='$status', approved_by='$approvedBy', date_approved='$dateApproved' WHERE review_id='$reviewID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

	function getReview($reviewID){
		$sql = "SELECT * FROM review WHERE review_id='$reviewID'";
        $result = Connection::connect()->query($sql);
        if($result->num_rows != 1){
            return false;
        }
        $review = array();
        if($row = $result->fetch_assoc()){
            $review["reviewID"] = $row["review_id"];
            $review["ipAddress"] = $row["ip_address"];
            $review["code"] = $row["code"];
            $review["userImageOG"] = $row["user_image_og"];
            $review["userImage"] = $row["user_image"];
            $review["name"] = $row["name"];
            $review["email"] = $row["email"];
            $review["message"] = $row["message"];
            $review["starRating"] = $row["star_rating"];
            $review["status"] = $row["status"];
            $review["aprrovedBy"] = $row["approved_by"];
            $review["dateApproved"] = $row["date_approved"];
            $review["dateCreated"] = $row["date_created"];
            
            
        }return $review;
	}

    function getReviews(){
        $sql = "SELECT * FROM review ORDER BY date_created DESC";

        $reviews = array();
        $result = Connection::connect()->query($sql);        
        while($row = $result->fetch_assoc()){
            $review = array();
            $review["reviewID"] = $row["review_id"];
            $review["ipAddress"] = $row["ip_address"];
            $review["code"] = $row["code"];
            $review["userImageOG"] = $row["user_image_og"];
            $review["userImage"] = $row["user_image"];
            $review["name"] = $row["name"];
            $review["email"] = $row["email"];
            $review["message"] = $row["message"];
            $review["starRating"] = $row["star_rating"];
            $review["status"] = $row["status"];
            $review["aprrovedBy"] = $row["approved_by"];
            $review["dateApproved"] = $row["date_approved"];
            $review["dateCreated"] = $row["date_created"];
            
            array_push($reviews, $review);
        }return $reviews;
    }

}


?>