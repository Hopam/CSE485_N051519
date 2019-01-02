<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
<?php
// core configuration
include_once "../config/core.php";
include_once '../config/database.php';
// check if logged in as admin
include_once "login_checker.php";
include_once '../objects/user.php';
// set page title
$page_title="Thông tin quản lý";
 
// include page header HTML
include 'layout_head.php';
 
echo "<div class='col-md-12'>";
 
        // get parameter values, and to prevent undefined index notice
        $action = isset($_GET['action']) ? $_GET['action'] : "";
 
        // tell the user he's already logged in
        if($action=='already_logged_in'){
            echo "<div class='alert alert-info'>";
                echo "<strong>You</strong> are already logged in.";
            echo "</div>";
        }
 
        else if($action=='logged_in_as_admin'){
            // echo "<div class='alert alert-info'>";
            //     echo "<strong>Bạn</strong> vừa đăng nhập vào trang quản lý.";
            // echo "</div>";
        }
 
    echo "<div class='alert alert-info'>";
        echo "Chủ sở hữu : <br/>";
        echo "<ol><li> Nguyễn Thanh Hải - 58TH2 .</li><li> Lăng Đại Dương - 58TH2 . <ol>";
    echo "</div>";
 
    echo "</div>";

echo "<div class='col-md-12'>";
 
    // read all users from the database
     // get database connection
    $database = new Database();
    $db = $database->getConnection();
    
    // initialize objects
    $user = new User($db);
    $stmt = $user->readAdmin($from_record_num, $records_per_page);
    $num = $stmt->rowCount();

    if($num>0){
        echo "<table class='table table-hover table-responsive table-bordered'>";
    
        // table headers
        echo "<tr>";
            echo "<th>Tên</th>";
            echo "<th>Họ đệm</th>";
            echo "<th>Email</th>";
            echo "<th>SĐT</th>";
            echo "<th>Địa chỉ</th>";
        echo "</tr>";
    
        // loop through the user records
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
    
            // display user details
            echo "<tr>";
                echo "<td>{$firstname}</td>";
                echo "<td>{$lastname}</td>";
                echo "<td>{$email}</td>";
                echo "<td>{$contact_number}</td>";
                echo "<td>{$address}</td>";
            echo "</tr>";
            }
    
        echo "</table>";
    }
 
echo "</div>";

   
// include page footer HTML
include_once 'layout_foot.php';
?>
</body>
</html>