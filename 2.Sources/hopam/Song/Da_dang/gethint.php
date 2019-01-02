    
<?php
// Array with names
    // $keyword = $_GET['keyword'];
//$sql = mysqli_query("SELECT Tenbh FROM baihat WHERE Tenbh LIKE '%$keyword%' ");
//$a = mysqli_fetch_array($sql);
$a[] = "Anh Đang Ở Đâu Đấy Anh - Hương Giang Idol <a href=detail.php?id=14><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Anh Đếch Cần Gì Nhiều Ngoài Em -  Đen Vâu,Vũ,Thành Đồng <a href=detail.php?id=13><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Chấp nhận 2 - Hòa Minzy <a href=detail.php?id=4><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Suýt Nữa Thì - Andiez <a href=detail.php?id=5><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Sai Người Sai Thời Điểm - Thanh Hưng <a href=detail.php?id=7><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Tháng Tư Là Lời Nói Dối Của Em - Hà Anh Tuấn <a href=detail.php?id=6><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Thằng Điên - Phương Ly,JustaTee <a href=detail.php?id=1><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Mãi Mãi Sẽ Hết Vào Ngày Mai - Andiez <a href=detail.php?id=9><img class='link' src='../../Image/Link.svg' /></a>";
$a[]= "Càng Níu Giữ Càng Dễ Mất - Mr.Siro <a href=detail.php?id=2><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Hong Kong 1 - Nguyễn Trọng Tài <a href=detail.php?id=3><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Vô Tình - Hoaprox, Xesi <a href=detail.php?id=8><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Y.E.U - M.I.N <a href=detail.php?id=15><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Yêu 5 - Rhymastic <a href=detail.php?id=16><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Lạ Lùng - Vũ <a href=detail.php?id=11><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Người Tình Mùa Đông - Hà Anh Tuấn <a href=detail.php?id=12><img class='link' src='../../Image/Link.svg' /></a>";
$a[] = "Chiều Nay Không Có Mưa Bay - Thái Tuyết Trâm <a href=detail.php?id=10><img class='link' src='../../Image/Link.svg' /></a>";
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