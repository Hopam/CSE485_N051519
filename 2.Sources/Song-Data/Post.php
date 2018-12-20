<?php
$connection = mysqli_connect("localhost", "root", "", "hopambh");

$sql="SELECT * FROM baihat ORDER BY Mabh";

$result = mysqli_query($connection, $sql);

if ($result) {
    // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
    // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
    while ($row=mysqli_fetch_row($result)) {
        printf ("Mabh: %s, Tenbh: %s, Loibh: %s , Casi: %s , TacGia: %s , TheLoai: %s , Dieubh: %s<br/>",$row[0],$row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
    }

    // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
    // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
    mysqli_free_result($result);
}
?>
<?php
class Database{
    private $host = "localhost";
    private $db_name = "hopambh";
    private $username = "root";
    private $password = "";
    public $conn;
    public function getConnection(){
        $this->conn = null;
 
    try{
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
  
    $sql="SELECT * FROM baihat ORDER BY Mabh";
  
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
return $this->conn;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
        <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <h1>Danh sách các bài hát</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Mabh</th>
                        <th>Tenbh</th>
                        <th>Loibh</th>
                        <th>Casi</th>
                        <th>TacGia</th>
                        <th>TheLoai</th>
                        <th>Dieubh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['Mabh']) ?></td>
                            <td><?php echo htmlspecialchars($row['Tenbh']); ?></td>
                            <td><?php echo htmlspecialchars($row['Loibh']); ?></td>
                            <td><?php echo htmlspecialchars($row['Casi']) ?></td>
                            <td><?php echo htmlspecialchars($row['TacGia']) ?></td>
                            <td><?php echo htmlspecialchars($row['TheLoai']) ?></td>
                            <td><?php echo htmlspecialchars($row['Dieubh']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>