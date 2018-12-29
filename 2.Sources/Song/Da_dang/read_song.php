<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài hát đã đăng</title>
</head>
<body>
<?php
// core configuration
include_once "../config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/song.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$song = new song($db);
 
// set page title
$page_title = "";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // read all users from the database
    $stmt = $song->readAll($from_record_num, $records_per_page);
    // count retrieved users
    $num = $song->rowCount();
 
    // to identify page for paging
    $page_url="read_song.php?";
 
    // include products table HTML template
    include_once "read_song_template.php";
 
echo "</div>";
 

?>
</body>
</html>