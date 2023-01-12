<?php

session_start();

include $_SERVER['DOCUMENT_ROOT']."/config.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/template/templates.php";

$page = new AuthenticationPage("Login Page");
$page->loginPage();