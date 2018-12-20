<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// core configuration
include_once "config/core.php";
 
// destroy session, it will remove ALL session settings
session_destroy();
  
//redirect to login page
header("Location: {$home_url}login.php");
?>
</body>
</html>