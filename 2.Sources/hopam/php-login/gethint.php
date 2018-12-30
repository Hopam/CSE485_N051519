    
<?php
// Array with names
    //khai báo biến host
    // $hostName = 'localhost';
    // // khai báo biến username
    // $userName = 'root';
    // //khai báo biến password
    // $passWord = '';
    // // khai báo biến databaseName
    // $databaseName = 'hopambh';
    // // khởi tạo kết nối
    // $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
    // $keyword = $_GET['keyword'];
//$sql = mysqli_query("SELECT Tenbh FROM baihat WHERE Tenbh LIKE '%$keyword%' ");
//$a = mysqli_fetch_array($sql);
$a[] = "Anh Đang Ở Đâu Đấy Anh - Hương Giang Idol <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Anh Đếch Cần Gì Nhiều Ngoài Em - Đen Vâu,Vũ,Thành Đồng <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Phía sau một cô gái - Soobin Hoàng Sơn <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Chấp nhận - Hòa Minzy <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Suýt Nữa Thì - Andiez <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Sai Người Sai Thời Điểm - Thanh Hưng <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Tháng Tư Là Lời Nói Dối Của Em - Hà Anh Tuấn <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Thằng Điên - Phương Ly,JustaTee <a href='../php/Thang-dien.php'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Mãi Mãi Sẽ Hết Vào Ngày Mai - Andiez <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[]= "Càng Níu Giữ Càng Dễ Mất - Mr.Siro <a href='../php/Cang-niu-giu-cang-de-mat.php'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Hong Kong 1 - Nguyễn Trọng Tài <a href='../php/Hong-Kong-1.php'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Vô Tình - Hoaprox, Xesi <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Y.E.U - M.I.N <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Yêu 5 - Rhymastic <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Lạ Lùng - Vũ <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
$a[] = "Người Tình Mùa Đông - Hà Anh Tuấn <a href='#'><img class='link' src='../Image/Link.svg' /></a>";
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";
// lookup all hints from array if $q is different from "" 
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);

  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = "<ul class='list_search'>$name</ul>";
      }
       else {
        $hint .= "<ul class='list_search'> $name</ul>";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "Không có kết quả nào *_* " : $hint;
?>
<style>
.link{
    vertical-align:middle;
    width:50px;
    height:20px;
}
.link:hover{
    border:2px solid #DEFCF5;
}
.list_search{
    padding:10px;
    width:500px;
    border:1px solid #ddd;
    border-radius:10px;
}
.list_search:hover{
    background:#DEFCF5;
    color:black;
    border:2px solid #ddd;
}
</style>