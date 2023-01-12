<?php

session_start();

include $_SERVER['DOCUMENT_ROOT']."/config.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/template/templates.php";


if(isset($_GET["code"], $_GET["authentication"])){
	$code = $_GET["code"];
	$authentication = $_GET["authentication"];
	$page = new RedirectPage("Redirect Page");
	$page->redirectPage($code, $authentication);
}else{
	header("Location:/");
}