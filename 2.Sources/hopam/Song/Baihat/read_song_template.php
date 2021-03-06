<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// display the table if the number of users retrieved was greater than zero
if($num>0){
    echo "<div class='alert alert-success'>
        Số bài hát đang có là {$num} . 
    </div>";
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>STT</th>";
        echo "<th>Tên bài hát</th>";
        echo "<th>Lời bài hát</th>";
        echo "<th>Ca sĩ</th>";
        echo "<th>Tác giả</th>";
        echo "<th>Thể loại</th>";
        echo "<th>Điệu bài hát</th>";
        echo "<th>Cập nhật</th>";
        echo "<th>Người đăng</th>";
        echo "<th>Lượt xem</th>";
    echo "</tr>";
 
    // loop through the user records
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$Mabh}</td>";
            echo "<td>{$Tenbh}</td>";
            echo "<td>{$Loibh}</td>";
            echo "<td>{$CaSi}</td>";
            echo "<td>{$TacGia}</td>";
            echo "<td>{$TheLoai}</td>";
            echo "<td>{$Dieubh}</td>";
            echo "<td>{$CapNhat}</td>";
            echo "<td>{$NguoiDang}</td>";
            echo "<td>{$LuotXem}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_song.php?";
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