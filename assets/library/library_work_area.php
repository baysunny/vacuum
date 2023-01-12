<?php

class Work_Area{

    function addWorkArea($areaName, $level, $parentID, $authenticationCode, $createdBy, $dateCreated){
        // $areaName = mysqli_real_escape_string(Connection::connect(), $areaName);
        $sql = "INSERT INTO work_area(area_name, level, parent_id, authentication_code, created_by, date_created) VALUES('$areaName', '$level', '$parentID', '$authenticationCode', '$createdBy', '$dateCreated')";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function deleteWorkArea($workAreaID){
        $sql = "DELETE FROM work_area WHERE work_area_id='$workAreaID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function deleteSubArea($workAreaID){
        $sql = "DELETE FROM work_area WHERE parent_id='$workAreaID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function getWorkArea($workAreaID){
        $sql = "SELECT * FROM work_area WHERE work_area_id='$workAreaID'";

        $result = Connection::connect()->query($sql);
        if($result->num_rows != 1){
            return false;
        }

        $workArea = array();
        if($row = $result->fetch_assoc()){            
            $workArea["workAreaID"] = $row["work_area_id"];
            $workArea["areaName"] = $row["area_name"];
            $workArea["level"] = $row["level"];
            $workArea["parentID"] = $row["parent_id"];
            $workArea["child"] = array();
            $workArea["authentication_code"] = $row["authentication_code"];
            $workArea["createdBy"] = $row["created_by"];
            $workArea["dateCreated"] = $row["date_created"];
            
        }
        return $workArea;
    }

    function getWorkAreas(){
        $sql = "SELECT * FROM work_area";

        $result = Connection::connect()->query($sql);
        $workAreas = array();
        while($row = $result->fetch_assoc()){
            $workArea = array();
            $workArea["workAreaID"] = $row["work_area_id"];
            $workArea["areaName"] = $row["area_name"];
            $workArea["level"] = $row["level"];
            $workArea["parentID"] = $row["parent_id"];
            $workArea["child"] = array();
            $workArea["authentication_code"] = $row["authentication_code"];
            $workArea["createdBy"] = $row["created_by"];
            $workArea["dateCreated"] = $row["date_created"];
            array_push($workAreas, $workArea);
        }
        return $workAreas;
    }
}

?>