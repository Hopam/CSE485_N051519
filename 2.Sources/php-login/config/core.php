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
// show error reporting
error_reporting(E_ALL);
 
// start php session
session_start();
 
// set your default time-zone
date_default_timezone_set('Asia/Manila');
 
// home page url
$home_url="http://localhost:81/2.Sources/php-login/";
 
// page given in URL parameter, default page is one
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
// set number of records per page
$records_per_page = 5;
 
// calculate for the query LIMIT clause
$from_record_num = ($records_per_page * $page) - $records_per_page;
?>
</body>
</html>