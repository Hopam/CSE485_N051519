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
// login checker for 'admin' access level
 
// if the session value is empty, he is not yet logged in, redirect him to login page
if(empty($_SESSION['logged_in'])){
    header("Location: {$home_url}login.php?action=not_yet_logged_in");
}
 
// if access level was not 'Admin', redirect him to login page
else if($_SESSION['access_level']!="Admin"){
    header("Location: {$home_url}login.php?action=not_admin");
}
 
else{
    // no problem, stay on current page
}
?>
</body>
</html>