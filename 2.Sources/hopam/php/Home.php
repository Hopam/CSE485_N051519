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
  					 <span><b>HOT NHẤT </b></span>
				</div> 
                <div id="body-left-content">
                
                <ol > 
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "hopambh");
                    mysqli_query ($conn, 'set names UTF8');
                    $sql="SELECT *  FROM baihat ORDER BY LuotXem DESC LIMIT 10 ";

                    $result = mysqli_query($conn, $sql);
                    // mysqli_set_charset($conn, 'UTF8');


                    if ($result) {
                        // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
                        // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
                        while ($row=mysqli_fetch_row($result)) {
                            printf ("<a href=".$home_url."detail.php?id=".$row[0]."><li> $row[1] </a>&nbsp <i> $row[3] </i> </li> <br>");
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

                    $sql="SELECT * FROM baihat WHERE CapNhat >= ALL(SELECT CapNhat FROM baihat) ";

                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
                        // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
                        while ($row=mysqli_fetch_row($result)) {
                        echo "<center><h2>$row[1]</h2>&nbsp <i> $row[3] </i></center><br/>";
                           
                        echo "<div id='nguoi_dang'>";
                            echo "Người đăng :<img style='vertical-align:middle' width='20px' height='20px' src='../Image/login-icon.png'/> $row[11]";
                        echo " </div>";    
                    
                        echo "<div class='info'>";
                            echo "<b>Tone:&ensp;<span class='hopam'> $row[7]</span></b><br/>";
                            echo "<b>Điệu:</b>&ensp;<span>$row[6]</span><br/><br/>";
                        echo "</div>";
                        echo "<p style='padding:20px'>";
                        //echo $row[2];
                        $replace_content = str_replace("[", "<span class='hopam'>[", $row[2]);
                        $replace_content = str_replace("]", "]</span>", $replace_content);
                        // echo $replace_content;
                        $aryLine = explode(PHP_EOL, $replace_content);
                        echo implode("<br /><br /> ", $aryLine);
                        echo "</p>";
                        echo "<br/>";
                        echo "<br/>";
                        echo "<br/>";
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
 <?php include_once "Footer.php";?>
    </body>
</html>