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
 
if(empty($_SESSION['logged_in'])){
    header("Location: {$home_url}php-login/login.php?action=not_yet_logged_in");
}
else if(isset($page_title) && ($page_title=="Login" || $page_title=="Sign Up")){
    if(isset($_SESSION['access_level'])){
        header("Location: {$home_url}Song/Addsong/addsong.php?action=already_logged_in");
    }
}
    // if user not yet logged in, redirect to login page
 
//if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
?>
</body>
</html>