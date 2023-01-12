<?php

session_start();

include $_SERVER['DOCUMENT_ROOT']."/config.php";
include $_SERVER['DOCUMENT_ROOT']."/assets/template/templates.php";

$page = new DashboardPage("Review Page");
$page->reviewsPage();