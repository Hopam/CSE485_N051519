<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Người dùng</title>
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
include_once "../libs/php/utils.php";
 
// include classes
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// initialize objects
$user = new User($db);
$utils = new Utils();
 
// set page title
$page_title = "Users";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // read all users from the database
    $stmt = $user->readAll($from_record_num, $records_per_page);
 
    // count retrieved users
    $num = $user->countAll();
 
    // to identify page for paging
    $page_url="read_users.php?";
 
    // include products table HTML template
    include_once "read_users_template.php";

echo "</div>";



echo "<div class='col-md-12'>";

    if($_POST){

        $stmt = $user->updateTK();

        $user->id=$_POST['id'];
        $user->firstname=$_POST['firstname'];
        $user->lastname=$_POST['lastname'];
        $user->contact_number=$_POST['contact_number'];
        $user->access_level=$_POST['access_level'];
        $access_code=$utils->getToken();
        $user->access_code=$access_code;
     
    // create the user
    if($user->updateTK()){
    
            echo "<div class='alert alert-success'>
                The user you specified is already updated.
            </div>";
    
    }else{
        echo "<div class='alert alert-danger' role='alert'>Can't update. Please try again.</div>";
    }
}
echo "</div>";


echo "<div class='col-md-12'>";

    if($_GET){

        $stmt = $user->deleteTK();
     
    // create the user
    if($user->deleteTK()){
    
            echo "<div class='alert alert-success'>
                The user you specified is already deleted.
            </div>";
    
    }else{
        echo "<div class='alert alert-danger' role='alert'>Can't delete. Please try again.</div>";
    }
}
echo "</div>";
?>

<div class='col-md-12'>
<div class='alert alert-info'>
    <td>
    <button id='SuaTK' class='btn btn-primary'>
        <span class='glyphicon glyphicon'> Sửa </span>
    </button>
    </td>

    <td>
    <button id='XoaTK' class='btn btn-primary'>
        <span class='glyphicon glyphicon'> Xóa </span>
    </button>
    </td>

    <div id='Suatk'>
        <form action='read_users.php' method='post'>

            <table class='table table-responsive'>

                <tr>
                    <td class='width-30-percent'>ID</td>
                    <td><input type='text' name='id' class='form-control' required value="<?php echo isset($_POST['id']) ? htmlspecialchars($_POST['id'], ENT_QUOTES) : "";  ?>" /></td>
                </tr>
        
                <tr>
                    <td class='width-30-percent'>Tên</td>
                    <td><input type='text' name='firstname' class='form-control' required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
                </tr>
        
                <tr>
                    <td>Họ đệm </td>
                    <td><input type='text' name='lastname' class='form-control' required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" /></td>
                </tr>

                <tr>
                    <td>SĐT </td>
                    <td><input type='text' name='contact_number' class='form-control' required value="<?php echo isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number'], ENT_QUOTES) : "";  ?>" /></td>
                </tr>

                <tr>
                    <td>Chức vụ </td>
                    <td><input type='text' name='access_level' class='form-control' required value="<?php echo isset($_POST['access_level']) ? htmlspecialchars($_POST['access_level'], ENT_QUOTES) : "";  ?>" /></td>
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

    <div id='Xoatk'>
        <form action='read_user.php' method='get'>

            <table class='table table-responsive'>
        
                <tr>
                    <td class='width-30-percent'>Email</td>
                    <td><input type='email' name='email' class='form-control' required value="<?php echo isset($_GET["email"]) ? htmlspecialchars($_GET["email"], ENT_QUOTES) : "";  ?>" /></td>
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

<?php
// include page footer HTML
include_once "layout_foot.php";
?>
</body>
</html>