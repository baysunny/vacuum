<?php

class Service{

    function addService($iconNameOg, $iconName, $title, $description, $imageNameOg, $imageName, $fullDescription, $authenticationCode, $createdBy, $dateCreated){
        $sql = "INSERT INTO service(icon_name_og, icon_name, title, description, image_name_og, image_name, full_description, authentication_code, created_by, date_created) VALUES('$iconNameOg', '$iconName', '$title', '$description', '$imageNameOg', '$imageName', '$fullDescription', '$authenticationCode', '$createdBy', '$dateCreated')";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function editService($serviceID, $iconNameOg, $iconName, $title, $description, $imageNameOg, $imageName, $fullDescription){
        $sql = "UPDATE service SET icon_name_og='$iconNameOg', icon_name='$iconName', title='$title', description='$description', image_name_og='$imageNameOg', image_name='$imageName', title='$title', full_description='$fullDescription' WHERE service_id='$serviceID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function deleteService($serviceID){
        $sql = "DELETE FROM service WHERE service_id='$serviceID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function getService($serviceID){
        $sql = "SELECT * FROM service WHERE service_id='$serviceID'";

        $result = Connection::connect()->query($sql);
        if($result->num_rows != 1){
            return false;
        }

        $service = array();
        if($row = $result->fetch_assoc()){            
            $service["serviceID"] = $row["service_id"];
            $service["iconNameOg"] = $row["icon_name_og"];
            $service["iconName"] = $row["icon_name"];
            $service["title"] = $row["title"];
            $service["description"] = $row["description"];
            $service["imageNameOg"] = $row["image_name_og"];
            $service["imageName"] = $row["image_name"];
            $service["fullDescription"] = $row["full_description"];
            $service["authenticationCode"] = $row["authentication_code"];
            $service["createdBy"] = $row["created_by"];
            $service["dateCreated"] = $row["date_created"];
            
        }
        return $service;
    }

    function getServices(){
        $sql = "SELECT * FROM service ORDER BY date_created ASC";
        $services = array();
        $result = Connection::connect()->query($sql);        
        while($row = $result->fetch_assoc()){
            $service = array();
            $service["serviceID"] = $row["service_id"];
            $service["iconNameOg"] = $row["icon_name_og"];
            $service["iconName"] = $row["icon_name"];
            $service["title"] = $row["title"];
            $service["description"] = $row["description"];
            $service["imageNameOg"] = $row["image_name_og"];
            $service["imageName"] = $row["image_name"];
            $service["fullDescription"] = $row["full_description"];
            $service["authenticationCode"] = $row["authentication_code"];
            $service["createdBy"] = $row["created_by"];
            $service["dateCreated"] = $row["date_created"];
            
            array_push($services, $service);
        }return $services;
    }

  

    
}


