<?php

class Users{

    function getUser($username){
        $sql = "SELECT * FROM users WHERE username='$username'";

        $result = Connection::connect()->query($sql);
        $user = array();
        if($row = $result->fetch_assoc()){            
            $user["userID"] = $row["user_id"];
            $user["username"] = $row["username"];
            $user["hashedPassword"] = $row["hashed_password"];
            $user["showedPassword"] = $row["showed_password"];
            $user["email"] = $row["email"];
            $user["level"] = $row["level"];
            $user["dateCreated"] = $row["date_created"];
            
        }
        return $user;
    }

    function updateUser($userID, $newUsername, $newPassword, $newEmail){
        $sql = " UPDATE users SET username='$newUsername', showed_password='$newPassword', email='$newEmail' WHERE user_id='$userID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    
}


