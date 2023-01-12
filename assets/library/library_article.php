<?php

class Article{

    function addArticle($title, $description, $imageNameOg, $imageName, $url, $authenticationCode, $createdBy, $dateCreated){
        $sql = "INSERT INTO article(title, description, image_name_og, image_name, url, authentication_code, created_by, date_created) VALUES('$title', '$description', '$imageNameOg', '$imageName', '$url', '$authenticationCode', '$createdBy', '$dateCreated')";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function editArticle($articleID, $title, $description, $imageNameOg, $imageName, $url){
        $sql = "UPDATE article SET title='$title', description='$description', image_name_og='$imageNameOg', image_name='$imageName', url='$url' WHERE article_id='$articleID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function deleteArticle($articleID){
        $sql = "DELETE FROM article WHERE article_id='$articleID'";
        $result = Connection::connect()->query($sql);
        if($result){
            return true;
        }return false;
    }

    function getArticle($articleID){
        $sql = "SELECT * FROM article WHERE article_id='$articleID'";

        $result = Connection::connect()->query($sql);
        if($result->num_rows != 1){
            return false;
        }

        $article = array();
        if($row = $result->fetch_assoc()){            
            $article["articleID"] = $row["article_id"];
            $article["title"] = $row["title"];
            $article["description"] = $row["description"];
            $article["imageNameOg"] = $row["image_name_og"];
            $article["imageName"] = $row["image_name"];
            $article["url"] = $row["url"];
            $article["createdBy"] = $row["created_by"];
            $article["dateCreated"] = $row["date_created"];
            
        }
        return $article;
    }

    function getArticles(){
        $articles = array();
        $sql = "SELECT * FROM article ORDER BY date_created DESC";
        $result = Connection::connect()->query($sql);
        while($row = $result->fetch_assoc()){
            $article = array();
            $article["articleID"] = $row["article_id"];
            $article["title"] = $row["title"];
            $article["description"] = $row["description"];
            $article["imageNameOg"] = $row["image_name_og"];
            $article["imageName"] = $row["image_name"];
            $article["url"] = $row["url"];
            $article["createdBy"] = $row["created_by"];
            $article["dateCreated"] = $row["date_created"];
            
            array_push($articles, $article);
        }return $articles;

    }

    
}


