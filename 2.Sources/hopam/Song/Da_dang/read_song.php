<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài hát đã đăng</title>
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
$page_title = "Bài hát đã đăng";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // read all users from the database
    $stmt = $user->Da_dang($from_record_num, $records_per_page);
    // count retrieved users
    $num2 = $user->countDa_dang();
 
    // to identify page for paging
    $page_url="read_song.php?";
 
    // include products table HTML template
    include_once "read_song_template.php";
 
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
                <form action='register.php' method='post' id='register'>
 
                    <table class='table table-responsive'>
                
                        <tr>
                            <td class='width-30-percent'>Tên bài hát</td>
                            <td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                        <tr>
                            <td>Ca sĩ </td>
                            <td><input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                        <tr>
                            <td>
                                <button type='submit' class='btn btn-primary'>
                                    <span class='glyphicon glyphicon'>Sửa</span>
                                </button>
                            </td>
                        </tr>
                
                    </table>
                </form>
            
            </div>

            <div id='Xoa'>
                <form action='register.php' method='post' id='register'>
 
                    <table class='table table-responsive'>
                
                        <tr>
                            <td class='width-30-percent'>Tên bài hát</td>
                            <td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
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