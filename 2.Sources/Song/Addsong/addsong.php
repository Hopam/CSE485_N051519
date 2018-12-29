<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" href="../../css/addsong.css"/>
    <title>Đăng bài hát</title>
</head>
<body>
<?php
// core configuration
include_once "../config/core.php";
include_once "login_checker.php";
// set page title
$page_title = "Đăng bài hát";
 
// include login checker
 
// include classes
include_once '../config/database.php';
include_once '../objects/song.php';
include_once "layout_head.php";
// include_once "libs/php/utils.php";
// include page header HTML
 
 
    // registration form HTML will be here
    // code when form was submitted will be here
    // if form was posted
if($_POST){
 
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
 
    // initialize objects
    $song = new song($db);

    // set song email to detect if it already exists
    $song->Tenbh=$_POST['Tenbh'];

    // check if email already exists
    if($song->TenbhExists()){
        echo "<div class='alert alert-danger'>";
            echo "The song you specified is already added. Please try again or <a href='addsong.php'></a>";
        echo "</div>";
    }

    else{
        $song->Tenbh=$_POST['Tenbh'];
        $song->Loibh=$_POST['Loibh'];
        $song->TacGia=$_POST['TacGia'];
        $song->TheLoai=$_POST['TheLoai'];
        $song->CaSi=$_POST['CaSi'];
        $song->Tone=$_POST['Tone'];
        $song->Link=$_POST['Link'];
        $song->Dieubh=$_POST['Dieubaihat'];
        $song->Capo= $_POST['Capo'];
        $song->NguoiDang= $_SESSION['firstname'];
        $song->LuotXem=0;
 
// create the song
if($song->create()){

        echo "<div class='alert alert-success'>
            The song you specified is already added.
        </div>";

 
}else{
    echo "<div class='alert alert-danger' role='alert'>Unable to addsong. Please try again.</div>";
}
    }
}

?>

<form action='addsong.php' method='post' id='addsong'>
 
    <table class='table table-responsive'>
 
        <tr>
            <td class='width-30-percent'></td>
            <td></td><div id="page-content">
    <!-- <div class="container"> -->
        <div class="col-md-7">
            <div class="red">
                            </div>
            <form id="song-create-form" action="addsong.php" method="post" class="col-md-12">
                <label for="song-name">
                    Tên bài hát:
                </label>
                <div>
                <input  name="Tenbh" type="text" class='form-control' class="hac-input" autofocus="true" autocomplete="off" placeholder="Ví dụ: Cát Bụi" required value="<?php echo isset($_POST['Tenbh']) ? htmlspecialchars($_POST['Tenbh'], ENT_QUOTES) : "";  ?>" style="width:100%">
                </div>
                <div id="suggestions"></div>

                <label for="song-lyric">
                    Lời bài hát và hợp âm:
                </label>
                <div id="toolbox">
                    <div class="pull-right">
                        <button type="button" id="preview-btn" class="hac-button">
                            <i class="fa fa-eye"></i> Xem trước                        </button>
                    </div>
                </div>
                <textarea name="Loibh" class='form-control' required class="hac-input large" rows="10" style="width: 635px;height: 600px;"><?php echo isset($_POST['Loibh']) ? htmlspecialchars($_POST['Loibh'], ENT_QUOTES) : "";  ?></textarea>

                <div id="toolbox-bottom">
                    Hợp âm: <span id="chord-list"><span class="search-chord-content"></span></span>
                </div>

              <div class="preview-panel">
                <div id="preview-content" class="pre"></div>
              </div> <!-- /.preview-panel -->

                <div>
                    <div class="col-md-3">
                        <label for="song-authors">
                            Tác giả:
                        </label>
                        <input type="text" class='form-control' class="hac-input artist-autocomplete ui-autocomplete-input" name="TacGia" required placeholder="Ví dụ: Trịnh Công Sơn..." value="<?php echo isset($_POST['TacGia']) ? htmlspecialchars($_POST['TacGia'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                    <div class="col-md-3 ">
                        <label for="song-genres">
                            Thể loại:
                        </label>
                        <input type="text" class='form-control' class="genre-autocomplete hac-input ui-autocomplete-input" name="TheLoai" required placeholder="Ví dụ: Nhạc trẻ" value="<?php echo isset($_POST['TheLoai']) ? htmlspecialchars($_POST['TheLoai'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                    <div class="col-md-3 ">
                        <label for="song-genres">
                            Điệu bài hát:
                        </label>
                        <input type="text" class='form-control' class="genre-autocomplete hac-input ui-autocomplete-input" name="Dieubaihat" required placeholder="Ví dụ:Ballad" value="<?php echo isset($_POST['Dieubaihat']) ? htmlspecialchars($_POST['Dieubaihat'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                    <div class="col-md-2 ">
                        <label for="song-genres">
                           Capo:
                        </label>
                        <input type="text" class='form-control' class="genre-autocomplete hac-input ui-autocomplete-input" name="Capo" value="<?php echo isset($_POST['Capo']) ? htmlspecialchars($_POST['Capo'], ENT_QUOTES) : "";  ?>" autocomplete="off">
                    </div>
                </div>
                <div class="clearfix"></div>
                <h3 class="blue-header text-left">THÔNG TIN CA SĨ</h3>
                <div id="singer-list">
                                    <div>
                        <div class="col-md-3 ">
                        <label>
                        Ca sĩ:
                        </label>
                        <input type="text"style="width:100%" class='form-control' name="CaSi" required placeholder="Ví dụ: Cẩm Ly, Đan Trường..." autocomplete="off" value="<?php echo isset($_POST['CaSi']) ? htmlspecialchars($_POST['CaSi'], ENT_QUOTES) : "";  ?>"/>
                        </div>
                        <div class="col-md-2">
                        <label>
                        Tông:
                        </label>
                        <input type="text" style="width:100%" class='form-control' name="Tone" required placeholder="Ví dụ: Am" autocomplete="off" value="<?php echo isset($_POST['Tone']) ? htmlspecialchars($_POST['Tone'], ENT_QUOTES) : "";  ?>">
                        </div>
                        <div class="col-md-5">
                        <label>
                        Link nhạc:
                        </label>
                        <input type="text" style="width:100%" class="form-control"  name="Link" required placeholder="Ví dụ: http://mp3.zing.vn/..." value="<?php echo isset($_POST['Link']) ? htmlspecialchars($_POST['Link'], ENT_QUOTES) : "";  ?>">
                        </div>
                    </div>
                                </div>
                     <br><br><br><br>
                <div class="submit-area">
                    <button id="submit-btn" type="submit" class='btn btn-lg btn-primary btn-block'>
                        <i class="fa fa-check"></i> Đăng bài hát                    </button>
                </div>
                <input type="hidden" id="song-chords" name="song-chords" value="">
                <input type="hidden" id="from-request-id" name="from-request-id" value="">
            </form>
        </div>
</form>        
        <!-- left column (instruction panel) -->
        <div class="col-md-5">
            <div id="instruction-panel" class="instruction-panel" style="transform: translate3d(0px, 0px, 0px);">
                <div id="instruction-song-name" class="instruction">
                    <h3>Cảm ơn bạn rất nhiều ^_^</h3>




<p>...vì đã đăng hợp âm của bạn lên đây!</p>
<p>Cộng đồng Guitar Việt Nam cần những người như bạn.</p>
                </div>
                <div id="instruction-song-lyric" class="instruction">
                    <h3> Để có chất lượng hợp âm tốt hơn, bạn vui lòng...</h3>
<ul>
    <li>Viết <b>đủ hợp âm</b>, đừng dùng "tương tự", "như trên"... vì nhiều người mới tập chơi họ không rành.</li>
    <li>Để cho <b>dễ nhìn</b> thì bạn đặt hợp âm trong <b>cặp ngoặc vuông</b> ngay <b>trước</b> chữ cần nhấn mạnh. Ví dụ:
        <div class="padding-both text-small">
            Hạt bụi <b class="blue-link">[Am]</b>nào hóa kiếp thân tôi<br>
            Để một <b class="blue-link">[Dm]</b>mai vươn hình hài lớn dậy
        </div>
    </li>
    <li>Nếu bạn viết kèm theo hướng dẫn chơi thì ngăn cách với phần lời bằng một dòng dấu === nhé. Ví dụ:

        <div class="padding-both text-small">
            Tông gốc <b class="blue-link">[Em]</b>, Capo 5<br>
            ===<br>
            Hạt bụi <b class="blue-link">[Am]</b>nào hóa kiếp thân tôi<br>
            Để một <b class="blue-link">[Dm]</b>mai vươn hình hài lớn dậy
        </div>
</li>
    <li><b>Không</b> đăng các bài hát có nội dung phản động, nhạy cảm, vi phạm thuần phong mỹ tục người Việt Nam.</li>
    <li><b>Kiểm tra lại bài hát</b> bằng nút <b>XEM TRƯỚC</b> trước khi đăng.</li>
</ul>                </div>
            </div>
        </div>
    </div>

</div>
</table>
<!-- <form action='register.php' method='post' id='register'>

<?php
 
 
// include page footer HTML
include_once "layout_foot.php";
?>
</body>
</html>
