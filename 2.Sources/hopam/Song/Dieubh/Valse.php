<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Điệu Valse</title>
</head>
<body>
<?php
// core configuration
include_once "../config/core.php";
 
 
// set page title
$page_title = "Điệu Valse";
 
// include page header HTML
include_once "../Addsong/layout_head.php";
// connect database
$conn = mysqli_connect("localhost", "root", "", "hopambh");
mysqli_query ($conn, 'set names UTF8');
$sql="SELECT * FROM baihat WHERE Dieubh = 'Valse' ";

$result = mysqli_query($conn, $sql);
// mysqli_set_charset($conn, 'UTF8');


if ($result) {
    // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
    // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
    while ($row=mysqli_fetch_row($result)) {
        printf ("<a href=../Baihat/detail.php?id=".$row[0]."><ol class='list'>$row[1] </a>&nbsp <i>$row[3]</i></ol>");
    }

    // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
    // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
    mysqli_free_result($result);
}
 

?>
<style>
.list{
    background:#96CBF2;
    padding:15px;
    border-radius:10px;
    width:70%;
}
</style>
</body>
</html>