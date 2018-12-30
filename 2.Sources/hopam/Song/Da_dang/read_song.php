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

echo "<div class='col-md-12'>";

    if($_POST){

    // set user email to detect if it already exists
    $user->Tenbh=$_POST['Tenbh'];

    if($user->TenbhExists()){

        $user->Loibh=$_POST['Loibh'];
        $user->CaSi=$_POST['CaSi'];
        $user->Dieubh=$_POST['Dieubh'];

            // create the user
    if($user->update_Da_Dang()){
    
        echo "<div class='alert alert-success'>
            The song you specified is already updated.
        </div>";

}else{
    echo "<div class='alert alert-danger' role='alert'>Can't update. Please try again.</div>";
}
    }

    else{

        echo "<div class='alert alert-danger'>";
            echo "The song you specified is not exists. Please try again ! ";
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

            <div id='Sua'>
                <form action='read_song.php' method='post'>
 
                    <table class='table table-responsive'>
                
                        <tr>
                            <td class='width-30-percent'>Tên bài hát</td>
                            <td><input type='text' name='Tenbh' class='form-control' required value="<?php echo isset($_POST['Tenbh']) ? htmlspecialchars($_POST['Tenbh'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td class='width-30-percent'>Lời bài hát</td>
                            <td><input type='text' name='Loibh' class='form-control' required value="<?php echo isset($_POST['Loibh']) ? htmlspecialchars($_POST['Loibh'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                        <tr>
                            <td>Ca sĩ </td>
                            <td><input type='text' name='CaSi' class='form-control' required value="<?php echo isset($_POST['CaSi']) ? htmlspecialchars($_POST['CaSi'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td>Điệu bài hát </td>
                            <td><input type='text' name='Dieubh' class='form-control' required value="<?php echo isset($_POST['Dieubh']) ? htmlspecialchars($_POST['Dieubh'], ENT_QUOTES) : "";  ?>" /></td>
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
        </div>
     
    </div>
</body>
</html>