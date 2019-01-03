<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chung</title>
    <script src="../js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/SuaXoa.css">
    <script type="text/javascript" src="../js/SuaXoa.js"></script> 
</head>
<body>

<?php
// core configuration
include_once "config/core.php";
include_once 'config/database.php';
include_once 'objects/user.php';
include_once "libs/php/utils.php";
// set page title
$page_title="Thông tin cá nhân";
 
// include login checker
$require_login=true;
include_once "login_checker.php";
 
// include page header HTML
include_once 'layout_head.php';

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
    $stmt = $user->readUser($from_record_num, $records_per_page);
    $num = $stmt->rowCount();
 
echo "</div>";
//-------------------
echo "<div class='col-md-12'>";
 
    // to prevent undefined index notice
    $action = isset($_GET['action']) ? $_GET['action'] : "";
 
    // if login was successful
    if($action=='login_success'){
        echo "<div class='alert alert-info'>";
            echo "<strong>Hi " . $_SESSION['firstname'] . ", welcome back!</strong>";
        echo "</div>";
    }
 
    // if user is already logged in, shown when user tries to access the login page
    else if($action=='already_logged_in'){
        echo "<div class='alert alert-info'>";
            echo "<strong>You are already logged in.</strong>";
        echo "</div>";
    }
 
    // content once logged in
    echo "<div class='alert alert-info'>";
        echo "<strong>Thông tin về " . $_SESSION['firstname'] . "</strong><br/>";
    echo "</div>";
    if($num>0){
        echo "<table class='table table-hover table-responsive table-bordered'>";
    
        // table headers
        echo "<tr>";
            echo "<th>Tên</th>";
            echo "<th>Họ đệm</th>";
            echo "<th>Email</th>";
            echo "<th>SĐT</th>";
            echo "<th>Địa chỉ</th>";
        echo "</tr>";
    
        // loop through the user records
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
    
            // display user details
            echo "<tr>";
                echo "<td>{$firstname}</td>";
                echo "<td>{$lastname}</td>";
                echo "<td>{$email}</td>";
                echo "<td>{$contact_number}</td>";
                echo "<td>{$address}</td>";
            echo "</tr>";
            }
    
        echo "</table>";
    }

echo "</div>";
 

?>
<?php 
    if($_POST){
        $user->email=$_POST['email'];
        if($user->emailExists()){
   
           $user->firstname=$_POST['firstname'];
           $user->lastname=$_POST['lastname'];

           $user->contact_number=$_POST['contact_number'];
           $user->address=$_POST['address'];
           $user->password=$_POST['password'];
            $user->confirm_password=$_POST['confirm_password'];
            $user->access_level='Customer';
            $user->status=0;

            // access code for email verification
           $access_code=$utils->getToken();
           $user->access_code=$access_code;
        
       // create the user
       if($user->updateCustomer()){
       
               echo "<div class='alert alert-success'>
                   The information you specified is already updated.
               </div>";

    // send confimation email
    $send_to_email=$_POST['email'];
    $body="Hi {$send_to_email}.<br /><br />";
    $body.="Please click the following link to verify your email and login: {$home_url}verify.php/?access_code={$access_code}";
    $subject="Verification Email";
    include_once "libs/PHPMailer/index.php";
       
       }else{
           echo "<div class='alert alert-danger' role='alert'>Can't update. Please try again.</div>";
       }
    }
    else{

        echo "<div class='alert alert-danger'>";
            echo "The song email specified is not exists. Please try again !";
        echo "</div>";
    
        }
   }

?>

    <div class='col-md-12'>
        <div class='alert alert-info'>
            <td>
            <button id='SuaTK' class='btn btn-primary'>
                <span class='glyphicon glyphicon'> Sửa </span>
            </button>
            </td>

            <div id='Suatk'>
                <form action='index.php' method='post'>
 
                    <table class='table table-responsive'>
                
                        <tr>
                            <td class='width-30-percent'>Tên</td>
                            <td><input type='text' name='firstname' class='form-control' value="<?php echo "{$firstname}"; ?>" required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>
                
                        <tr>
                            <td>Họ đệm </td>
                            <td><input type='text' name='lastname' class='form-control' value="<?php echo "{$lastname}"; ?>" required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><input type='email' name='email' class='form-control' required  value="<?php echo "{$email}"; ?>" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td>SĐT </td>
                            <td><input type='text' name='contact_number' class='form-control' value="<?php echo "{$contact_number}"; ?>" required value="<?php echo isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number'], ENT_QUOTES) : "";  ?>" /></td>
                        </tr>

                        <tr>
                            <td>Địa chỉ</td>
                            <td><input name='address' class='form-control' required value="<?php echo "{$address}"; ?>" value="<?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address'], ENT_QUOTES) : "";  ?>"/></td>
                        </tr>
                

                        <tr>
                            <td>Mật khẩu mới</td>
                            <td><input type='password' name='password' class='form-control' required id='passwordInput'></td>
                        </tr>

                        <tr>
                            <td>Xác nhận mật khẩu</td>
                            <td><input type='password' name='confirm_password' class='form-control' required id='passwordInput'></td>
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
        </div>
     
    </div>
<?php
// footer HTML and JavaScript codes
include 'layout_foot.php';
include_once "../php/Footer.php";
?>
<style>
.footer-clean {
    margin:30px 0px 60px 30px;
}
.col-md-3{
  width: 24%;
  float: left;
  margin-bottom:40px;
}
</style>
</body>
</html>