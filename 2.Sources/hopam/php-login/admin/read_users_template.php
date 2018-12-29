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
// display the table if the number of users retrieved was greater than zero
if($num>0){
    echo "<div class='alert alert-success'>
        Số người dùng là {$num} . 
    </div>";
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>STT</th>";
        echo "<th>Tên</th>";
        echo "<th>Họ đệm</th>";
        echo "<th>Email</th>";
        echo "<th>SĐT</th>";
        echo "<th>Chức vụ</th>";
    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$firstname}</td>";
            echo "<td>{$lastname}</td>";
            echo "<td>{$email}</td>";
            echo "<td>{$contact_number}</td>";
            echo "<td>{$access_level}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_users.php?";
    $total_rows = $user->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No users found.</strong>
    </div>";
}
?>

</body>
</html>