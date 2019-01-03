<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/song.css">
    <title>Hợp âm bài hát</title>
</head>
<body>

<?php
include_once '../php/header.php';
?>

        <div id="content">
            
        	<div id="left-content">
            	<div class="top-left-content">
  					 <span><h3>Hợp âm bài hát </h3></span>
				</div> 
                <div id="body-left-content" style="padding:30px;text-align: justify">
<?php
   $id = intval($_GET['id']);
   $conn = mysqli_connect("localhost", "root", "", "hopambh");
   mysqli_query ($conn, 'set names UTF8');
   $sql="SELECT *  FROM baihat WHERE Mabh=". $id;
   $qr= "UPDATE baihat SET LuotXem = LuotXem + 1 WHERE Mabh =".$id ;
   mysqli_query($conn,$qr);
   $result = mysqli_query($conn, $sql);
   // mysqli_set_charset($conn, 'UTF8');

   if ($result) {
       // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
       // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
       while ($row=mysqli_fetch_row($result)) {

        echo"<div id='name-song'><h1>$row[1] </h1></div>";
        echo "<div id='singer'>";
            echo "<img class='flag' src='../Image/flag-VN.gif' />";
                echo $row[3];
            echo "<img class='flag' src='../Image/flag-VN.gif' />";
        echo "</div>";
        echo "<div id='nguoi_dang'>";
            echo "Người đăng :<img style='vertical-align:middle' width='20px' height='20px' src='../Image/login-icon.png'/> $row[11]";
        echo " </div>";    
        echo "<p style='padding:20px'>";
        echo "<div class='info'>";
            echo "<b>Tone:&ensp;<span class='hopam'> $row[7]</span></b><br/>";
            echo "<b>Điệu:</b>&ensp;<span>$row[6]</span><br/>";
            echo "<b>Capo:</b>&ensp;<span>$row[8]</span><br/>";
        echo "</div>";
        echo "<p style='padding:30px'>";
        //echo $row[2];
        $replace_content = str_replace("[", "<span class='hopam'>[", $row[2]);
        $replace_content = str_replace("]", "]</span>", $replace_content);
        // echo $replace_content;
        $aryLine = explode(PHP_EOL, $replace_content);
        echo implode("<br /><br /> ", $aryLine);
        echo "</p>";
        echo " </div>";
        echo "<div id='bottom-content'>";
        echo "<div class='info-song'>";
        echo "<li>Tác Giả: $row[4] &emsp; &emsp;  Thể Loại: $row[5] </li> <li> Điệu Bài hát: $row[6] &emsp; &emsp;  Cập Nhật:$row[10] </li> <li> Người Đăng: $row[11] &emsp; &emsp;  Lượt Xem: $row[12] <br/></li>";
        echo "</div>";
       }

       // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
       // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
       mysqli_free_result($result);
   }   
?>
  </div>
            </div>
			</div>       				                  
            
        	<div id="right-content">
            	<div class="new-song">
            		<span><h4>Các thế tay của hợp âm</h4></span>
                </div>
                <div class="ha-content">
                <img class="image-ha" src="../Image/C.png" />
                    <img class="image-ha" src="../Image/Bm.png" />
                    <img class="image-ha" src="../Image/Am.jpg" />
                    <img class="image-ha" src="../Image/D.png" />
                    <img class="image-ha" src="../Image/Em.jpg" />
                    <img class="image-ha" src="../Image/G.png" />
                    <img class="image-ha" src="../Image/Am7.png" />
                    <img class="image-ha" src="../Image/Em7.png" />
                    <img class="image-ha" src="../Image/F.jpg" />
                    <img class="image-ha" src="../Image/Fm.png" />
                    <img class="image-ha" src="../Image/Cmaj7.jpg"/>
                    <img class="image-ha" src="../Image/Bm7.png" />
                    <img class="image-ha" src="../Image/Dm7.jpg" />
                </div>
            </div>
        </div>
<?php include_once "../php/Footer.php";?>
<style>
.footer-clean {
    margin:1500px 0px 60px 30px;
}
.col-md-3{
  width: 24%;
  float: left;
  margin-bottom:40px;
}
#singer{
    width:280px;
}
#name-song{
    padding-left:40px;
}
a{color:black;}
</style>

</body>
</html>