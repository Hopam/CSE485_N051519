<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trang chủ - Hợp Âm HD - Website tra cứu hợp âm bài hát</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scare:1">
        <link rel="stylesheet" type="text/css" href="../css/habh.css">
    </head>
    <body>
    <?php
include_once 'header.php';
    ?>

     
        <div id="content">
            
        	<div id="left-content">
            	<div class="top-left-content">
  					 <span><b>HOT NHẤT HÔM NAY</b></span>
				</div> 
                <div id="body-left-content">
                
                <ol > 
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "hopambh");
                    mysqli_query ($conn, 'set names UTF8');
                    $sql="SELECT *  FROM baihat LIMIT 9 ";

                    $result = mysqli_query($conn, $sql);
                    // mysqli_set_charset($conn, 'UTF8');


                    if ($result) {
                        // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
                        // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
                        while ($row=mysqli_fetch_row($result)) {
                            printf ("<li> $row[1] &nbsp <i> $row[3] </i> </a></li> <br>");
                        }

                        // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
                        // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
                        mysqli_free_result($result);
                    }   
                    ?>
                </ol>

                </div>
			</div> 			                  
            
        	<div id="right-content">
            	<div class="new-song">
            		<span>Hợp âm mới</span>
                </div>
                <div id="right-content-body">
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "hopambh");
                    mysqli_query ($conn, 'set names UTF8');

                    $sql="SELECT * FROM baihat WHERE Mabh='5' ";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
                        // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
                        while ($row=mysqli_fetch_row($result)) {
                            echo "<center><h2>$row[1]</h2></center><br/>";
                            echo "<p>$row[2]</p>";
                        }
                        mysqli_free_result($result);
                    }
                ?>
                </div>
            </div>

            <div id="left-content-down">
                <div class="top-left-content">
  					 <span><b>HOT TRONG TUẦN</b></span>
				</div> 
                <div id="body-left-content">
                
               	<ol>
                	<a href="#"><li class="list">Chiều Nay Không Có Mưa Bay - Thái Tuyết Trâm</li></a>
                	<li class="list">Lạ Lùng - Vũ</li>
                    <a href="song.php"><li class="list">Càng Níu Giữ Càng Dễ Mất - Mr.Siro</li></a>
                    <li class="list">Chấp Nhận 2 - Hòa Minzy</li>
                    <li class="list">Anh Đếch Cần Gì Nhiều Ngoài Em - Đen Vâu, Vũ, Thành Đồng</li>
                    <li class="list">Người Tình Mùa Đông - Hà Anh Tuấn</li>
                    <li class="list">Anh Đang Ở Đâu Đấy Anh - Hương Giang Idol</li>
                    <li class="list">Vô Tình - Hoaprox, Xesi</li>
                    <li class="list">Mãi Mãi Sẽ Hết Vào Ngày Mai - Andiez</li>
                    
                </ol>

                </div>
            </div>      	
        </div>
<style>
.hopam{
    color:red;
    cursor:pointer;
}
.hopam:hover{
    color:gray;
}
a{
    color:black;
    text-decoration:none;
}
#left-content-down{
    float:left;
    width:56%;
	height:100%;
	background-color:white;
	border:1px solid #ddd;
	position:relative;
	margin-top:50px;
	border-radius: 10px;
}
#right-content-body{
    padding:40px 40px 0 40px;
    text-align:justify;
    overflow:scroll;
    height:400px;
    margin-top:60px;
}
.new-song{
    position:absolute;
}
</style>
 
  
    </body>
</html>