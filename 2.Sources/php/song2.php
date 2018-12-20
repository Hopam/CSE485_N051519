<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/song.css">
    <title>Thằng Điên - Phương Ly,Justa Tee</title>
</head>
<body>

<?php
include_once('header.php')
?>

        <div id="content">
            
        	<div id="left-content">
            	<div class="top-left-content">
  					 <span><h3>Hợp âm bài hát </h3></span>
				</div> 
                <div id="body-left-content" style="padding:30px;text-align: justify">
                    <div id="name-song"><h1>Thằng Điên</h1></div>
                    <div id="singer"><img class="flag" src="../Image/flag-VN.gif"/>Phương Ly,Justa Tee<img class="flag" src="../Image/flag-VN.gif"/></div>
                    <div id="nguoi_dang">Người đăng: <br/> 
                        <img style="vertical-align:middle" width="20px" height="20px" src="../Image/login-icon.png"/>Trung Nguyễn
                    </div>
                    <p style="padding:20px">
                    <div class="info">
                    Intro: Bass 1 2 3 1 2 3 1 2 <br/>
                    Tone:<span class="hopam">[Em]</span><br/>
                    Vòng hợp âm: <span class="hopam">[Cmaj7 Am]- [A7 Dm7 F]- [Fm ]</span><br/>
                    Capo 5 <br/>
                    Điệu : Ballad
                    </div>
                    
                    Giờ tôi lại <span class="hopam">[Cmaj7]</span>lang thang tình yêu thì miên man <br/>
                    Ngày xanh cùng <span class="hopam">[Am7]</span>mây tung tăng tựa mình <span class="hopam">[A7]</span>bên phím đàn<br/> 
                    Nhìn em mình <span class="hopam">[Dm7]</span>ngơ ngác lòng anh chợt hơi khác <br/>
                    Tình yêu này <span class="hopam">[F]</span>đến đúng lúc thấy ánh sáng vụt qua <span class="hopam">[Fm ]</span><br/> 
                    
                    Nụ cười tỏa <span class="hopam">[Cmaj7]</span>hương nắng bình minh và mây trắng <br/>
                    Hình như đều <span class="hopam">[Am7]</span>kêu tôi "ôi thôi tình yêu đến <span class="hopam">[A7]</span>rồi!"<br/> 
                    Chẳng ai phải <span class="hopam">[Dm7]</span>thắc mắc còn tôi thì đã chắc <br/>
                    Nàng ơi nàng <span class="hopam">[F]</span>hãy đến chiếm lấy tâm hồn <span class="hopam">[Fm]</span>tôi <br/>
                    
                    T-ĐK: 
                    <span class="hopam">[Em]</span>Mỉm cười lòng chợt bâng khuâng <span class="hopam">[Am7]</span>tôi chẳng biết mơ hay thật <br/>
                    <span class="hopam">[Dm7]</span>Đợi chờ dù ngày hay đêm <span class="hopam">[F]</span>anh chỉ cần nghĩ cũng thấy <span class="hopam">[Fm]</span>vui..<br/> 
                    
                    ĐK: 
                    I'm in <span class="hopam">[Cmaj7]</span>love... màu nắng cuốn lấp chân mây mờ xa <br/>
                    I'm in <span class="hopam">[Am7]</span>love... thành phố chỉ thấy mỗi <span class="hopam">[A7]</span>riêng mình ta <br/>
                    I'm in <span class="hopam">[Dm7]</span>love... tựa đầu bên tình yêu mới thiết tha <br/>
                    Chỉ <span class="hopam">[F]</span>Crazy man fall in <span class="hopam">[Fm]</span>love <br/>
                    
                    I'm in <span class="hopam">[Cmaj7]</span>love...hạnh phúc chỉ hết khi anh ngừng mơ <br/>
                    I'm in <span class="hopam">[Am7]</span>love... cuộc sống vốn dĩ trôi <span class="hopam">[A7]</span>như vần thơ <br/>
                    I'm in <span class="hopam">[Dm7]</span>love... ngả lưng bên cành cây lá xác xơ <br/>
                    Mờ <span class="hopam">[F]</span>sương đưa tay anh ôm lấy <span class="hopam">[Fm]</span>em.. <br/>
                    
                    Dẫu biết chỉ là <span class="hopam">[Cmaj7]</span>mơ.. <br/>
                    Dẫu biết chỉ là <span class="hopam">[Am7]</span> mơ <span class="hopam">[A7 ]</span> <br/>
                    Dẫu biết chỉ là <span class="hopam">[Dm7]</span>mơ <br/>
                    <span class="hopam">[F]</span>"Crazy man fall in <span class="hopam">[Fm]</span>love.."<br/> 
                </p>
                </div>
                <div id="bottom-content">
                <div class="info-song">
            <?php
$connection = mysqli_connect("localhost", "root", "", "hopambh");

$sql="SELECT * FROM baihat WHERE Mabh='1' ";

$result = mysqli_query($connection, $sql);

if ($result) {
    // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
    // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
    while ($row=mysqli_fetch_row($result)) {
        printf ("<li>Tác Giả: %s  .   Thể Loại: %s </li> <li> Điệu Bài hát: %s . Cập Nhật: %s </li> <li> Người Đăng: %s .  Lượt Xem: %s <br/></li>",$row[4],$row[5], $row[6], $row[10], $row[11], $row[12]);
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
                    <img class="image-ha" src="../Image/Am.jpg" />
                    <img class="image-ha" src="../Image/Em.jpg" />
                    <img class="image-ha" src="../Image/Dm7.jpg" />
                    <img class="image-ha" src="../Image/F.jpg" />
                    <img class="image-ha" src="../Image/Fm.png" />
                    <img class="image-ha" src="../Image/Cmaj7.jpg"/>
                    <h2 style="padding-left:70px">A7</h2><img class="image-ha" src="../Image/A7.png" />
                    
                </div>
            </div>
        </div>
<style>
#singer{
    width:280px;
}
#name-song{
    padding-left:40px;
}
</style>

</body>
</html>