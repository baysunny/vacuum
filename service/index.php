<?php

session_start();

include $_SERVER['DOCUMENT_ROOT']."/config.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/template/templates.php";

$page = new MainPage("Main Page");
if(isset($_GET["detail"]) && isset($_GET['read-detail'])){
	$featureID = $_GET["detail"];
	$page->serviceDetailPage($featureID);
}else{
	$page->servicePage();
}
