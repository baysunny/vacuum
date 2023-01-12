<?php
@session_start();

    if(!isset($_SESSION['username'])){
        header('Location: /authentication/lgn.php');
    }
    date_default_timezone_set('Asia/Jakarta');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>COOL WEEB</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <link rel="icon" type="image/png" href="/drives/drive-main-file/images/YaoYao.jpg" sizes="34x32">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="preload" href="/drives/drive-main-file/fonts/LexendDeca-Black.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/drives/drive-main-file/fonts/LexendDeca-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/assets/template/css/dashboard.css" rel="stylesheet">
    <link href="/assets/template/css/just-kidding.css" rel="stylesheet">
    <link href="/assets/template/css/color.css" rel="stylesheet">
    
    <link href="/assets/template/css/baysunny-icon.css" rel="stylesheet">
    
    <link href="/assets/template/css/baysunny-style.css" rel="stylesheet">
    <style>
     
        @font-face {
            font-family: 'Lexend Deca';
            src: url(/drives/drive-main-file/fonts/LexendDeca-Regular.woff2) format('woff2'),
                 url(/drives/drive-main-file/fonts/LexendDeca-Regular.woff) format('woff');
            
        }
        
        body{
            font-family: Lexend Deca;
        }

        
    </style>
</head>
