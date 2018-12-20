<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css" /> 
    <link rel="stylesheet" type="text/css" href="../css/addsong.css"/>
    <title>Đăng bài hát</title>
</head>
<body>
<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title = "Đăng bài hát";
 
// include login checker
 
// include classes
include_once 'config/database.php';
include_once 'objects/user.php';
include_once "libs/php/utils.php";
 
// include page header HTML
 
 
    // registration form HTML will be here
    // code when form was submitted will be here
    // if form was posted
if($_POST){
 
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
 
    // initialize objects
    $user = new User($db);
    $utils = new Utils();
 
    // set user email to detect if it already exists
}
?>
<?php
$page_title = "Đăng bài hát";
include_once 'layout_head.php';
?>
<form action='addsong.php' method='post' id='addsong'>
 
    <table class='table table-responsive'>
 
        <tr>
            <td class='width-30-percent'></td>
            <td></td><div id="page-content">
    <div class="container">
        <div class="col-md-7">
            <div class="red">
                            </div>
            <form id="song-create-form" action="" method="post" class="col-md-12">
                <label for="song-name">
                    Tên bài hát:
                </label>
                <div>
                <input id="song-name" name="Tenbh" type="text" class="hac-input" autofocus="true" autocomplete="on" placeholder="Ví dụ: Cát Bụi" required value="<?php echo isset($_POST['Tenbh']) ? htmlspecialchars($_POST['Tenbh'], ENT_QUOTES) : "";  ?>" style="width:100%"/>
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
                <textarea id="song-lyric" name="Loibh" class="hac-input large" rows="10" required style="width: 635px;height: 600px;"><?php echo isset($_POST['Loibh']) ? htmlspecialchars($_POST['Loibh'], ENT_QUOTES) : "";  ?></textarea>

                <div id="toolbox-bottom">
                    Hợp âm: <span id="chord-list"><span class="search-chord-content"></span></span>
                </div>

              <div class="preview-panel">
                <div id="preview-content" class="pre"></div>
              </div> <!-- /.preview-panel -->

                <div>
                    <div class="col-md-5">
                        <label for="song-authors">
                            Tác giả:
                        </label>
                        <input id="song-authors" type="text" class="hac-input artist-autocomplete ui-autocomplete-input" name="TacGia" placeholder="Ví dụ: Trịnh Công Sơn..." required value="<?php echo isset($_POST['TacGia']) ? htmlspecialchars($_POST['TacGia'], ENT_QUOTES) : "";  ?>" autocomplete="on"/>
                    </div>
                    <div class="col-md-5 ">
                        <label for="song-genres">
                            Thể loại:
                        </label>
                        <input id="song-genres" type="text" class="genre-autocomplete hac-input ui-autocomplete-input" name="TheLoai" placeholder="Ví dụ: Nhạc trẻ" required value="<?php echo isset($_POST['TheLoai']) ? htmlspecialchars($_POST['TheLoai'], ENT_QUOTES) : "";  ?>" autocomplete="on"/>
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
                        <input id="singer-names" type="text"style="width:100%" name="CaSi" placeholder="Ví dụ: Cẩm Ly, Đan Trường..." required value="<?php echo isset($_POST['CaSi']) ? htmlspecialchars($_POST['CaSi'], ENT_QUOTES) : "";  ?>" autocomplete="on"/>
                        </div>
                        <div class="col-md-2">
                        <label>
                        Tông:
                        </label>
                        <input id="singer-key" type="text" style="width:100%" name="Tone" placeholder="Ví dụ: Am" required value="<?php echo isset($_POST['Tone']) ? htmlspecialchars($_POST['Tone'], ENT_QUOTES) : "";  ?>" autocomplete="on"/>
                        </div>
                        <div class="col-md-5">
                        <label>
                        Link nhạc:
                        </label>
                        <input id="song-link" type="text" class="hac-input" name="Link" required value="<?php echo isset($_POST['Link']) ? htmlspecialchars($_POST['Link'], ENT_QUOTES) : "";  ?>" autocomplete="on" placeholder="Ví dụ: http://mp3.zing.vn/...">
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
<!-- <form action='register.php' method='post' id='register'>

<?php
 
 
// include page footer HTML
include_once "layout_foot.php";
?>
</body>
</html>