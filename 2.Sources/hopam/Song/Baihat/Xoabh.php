<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài hát</title>
    <script src="../../js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/SuaXoa.css">
    <script type="text/javascript" src="../../js/SuaXoa.js"></script> 
</head>
<body>
<?php
// core configuration
include_once "../config/core.php";
 
// check if logged in as admin
include_once "login_checker.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$user = new User($db);
 
// set page title
$page_title = "Song";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // read all users from the database
    $stmt = $user->readAll($from_record_num, $records_per_page);
    // count retrieved users
    $num = $user->countAll();
 
    // to identify page for paging
    $page_url="read_song.php?";
 
    // include products table HTML template
    include_once "read_song_template.php";
 
echo "</div>";
 

echo "<div class='col-md-12'>";

if($_POST){
        $user->Tenbh=$_POST['Tenbh'];
    if($user->TenbhExists()){
     
    // create the user
    if($user->deleteBH()){
    
            echo "<div class='alert alert-success'>
                The song you specified is already deleted.
            </div>";
    
    }else{
        echo "<div class='alert alert-danger' role='alert'>Can't deleted. Please try again.</div>";
    }
}
    else{

    echo "<div class='alert alert-danger'>";
        echo "The song you specified is not exists. Please try again !";
    echo "</div>";

    }
}
echo "</div>";
?>

<div class='col-md-12'>
        <div class='alert alert-info'>
            <td>
            <button id='SuaBh' class='btn btn-primary'>
                <span class='glyphicon glyphicon'> Sửa </span>
            </button>
            </td>

            <td>
            <button id='XoaBh' class='btn btn-primary'>
                <span class='glyphicon glyphicon'> Xóa </span>
            </button>
            </td>

            <div id='Sua'>
                <form action='read_song.php' method='post'>
 
                    <table class='table table-responsive'>

                        <tr>
                            <td class='width-30-percent'>Mã bài hát</td>
                            <td><input type='text' name='Mabh' class='form-control' required value="<?php echo isset($_POST['Mabh']) ? htmlspecialchars($_POST['Mabh'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                        <tr>
                            <td class='width-30-percent'>Tên bài hát</td>
                            <td><input type='text' name='Tenbh' class='form-control' required value="<?php echo isset($_POST['Tenbh']) ? htmlspecialchars($_POST['Tenbh'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                        <tr>
                            <td>Ca sĩ </td>
                            <td><input type='text' name='CaSi' class='form-control' required value="<?php echo isset($_POST['CaSi']) ? htmlspecialchars($_POST['CaSi'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td>Tác giả </td>
                            <td><input type='text' name='TacGia' class='form-control' required value="<?php echo isset($_POST['TacGia']) ? htmlspecialchars($_POST['TacGia'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td>Thể loại </td>
                            <td><input type='text' name='TheLoai' class='form-control' required value="<?php echo isset($_POST['TheLoai']) ? htmlspecialchars($_POST['TheLoai'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td>Điệu bài hát </td>
                            <td><input type='text' name='Dieubh' class='form-control' required value="<?php echo isset($_POST['Dieubh']) ? htmlspecialchars($_POST['Dieubh'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                        <tr>
                            <td>
                                <button type='submit' class='btn btn-primary'>
                                    <span class='glyphicon glyphicon'>Lưu</span>
                                </button>
                            </td>
                        </tr>
                
                    </table>
                </form>
            
            </div>

            <div id='Xoa'>
                <form action='Xoabh.php' method='post'>
 
                    <table class='table table-responsive'>
                
                        <tr>
                            <td class='width-30-percent'>Tên bài hát</td>
                            <td><input type='text' name='Tenbh' class='form-control' required value="<?php echo isset($_POST['Tenbh']) ? htmlspecialchars($_POST['Tenbh'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                
                        <tr>
                            <td>
                                <button type='submit' class='btn btn-primary'>
                                    <span class='glyphicon glyphicon'>Xóa</span>
                                </button>
                            </td>
                        </tr>
                
                    </table>
                </form>
            
            </div>
        </div>
     
    </div>

</body>
</html>