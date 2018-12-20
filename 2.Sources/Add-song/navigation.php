
<!-- ------------------- -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang chủ - Hợp Âm HD - Website tra cứu hợp âm bài hát</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width:device-width, initial-scare:1">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css" />    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/habh.css" />
    <link rel="stylesheet" type="text/css" href="../css/addsong.css"/>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script type="text/javascript" src="../js/habh.js"></script>
</head>

<body>
<div id="top-nav-bar">        
            <div id="nav-bar">
            	<div id="left-bar">
                	<a title="Trang chủ" href="../php/Home.php" style="text-decoration:none">
                        <img src="../Image/logo.png" style="vertical-align:middle; cursor:pointer" height="60px" width="60px"/>                  	
                    </a>
                	<input type="text" id="myInput" onkeyup="showHint(this.value)" placeholder="Tìm kiếm theo tên bài hát"/>   
                    <div class="search"><span id="txtHint"></span></div>                
                </div>
                <div id="right-bar">    
                    <a href="addsong.php" title="Đăng bài hát" class="btn"><i class="fas fa-plus"></i> Đăng bài hát</a>
                   	<a href="../php-login/login.php" title="Đăng nhập" class="btn"><i class="fas fa-user"></i> Đăng nhập</a>
                    <a href="../php-login/register.php" title="Đăng ký" class="btn"><i class="fas fa-user"></i> Đăng ký</a>
                </div>            
          	</div> 
            <div id="title-bar">
            	<div class="title">
                	<a href="../php/Home.php" title="Bài hát" class="text-item">Bài hát</a>
                    <a href="#" class="text-item" title="Playlist">Playlist</a>
                    <a href="#" class="text-item" title="Hợp âm">Hợp âm</a>
                    <a href="../php/Dieubaihat.php" title="Điệu bài hát" class="text-item">Điệu bài hát</a>
                    <a href="#" class="text-item" title="Thể loại">Thể loại</a>
                    <a href="#" class="text-item" title="Yêu cầu hợp âm">Yêu cầu hợp âm</a>
                    <a href="#" class="text-item" title="Thành viên">Thành viên</a>
                </div>
            </div>  	
        </div>
        <br/><br/><br/>
<style>
.search{
	margin-left:70px; 
	z-index:99999;
	margin-top:0px; 
	position:fixed;
	background-color:#FFF;
	border:1px solid #ddd;
	border-radius:10px;
	text-decoration: none;
	cursor: pointer;
}
#title-bar{
    margin-top:-10px;
}
.btn{
    margin-top:-4px;
}
</style>
    <!-- <div id="top-nav-bar" class="navbar navbar-default navbar-static-top" role="navigation">
        <div id="nav-bar" class="container-fluid">
            <div id="left-bar" class="nav navbar-nav navbar-left">
                <a title="Trang chủ" href="Home.php" style="text-decoration: none;">
                    <img src="../Image/logo.png" class="logo" />
                </a>
                <input type="text" id="myInput" placeholder="Tìm kiếm theo tên bài hát" />
            </div> -->
            <?php
            // login and logout options will be here 
            // check if users / customer was logged in
// if user was logged in, show "Edit Profile", "Orders" and "Logout" options
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
    ?>
    <ul class="nav navbar-nav navbar-right">
        <li <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?>>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
                &nbsp;&nbsp;<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>      

       <?php
    }
    // show login and register options here
    // if user was not logged in, show the "login" and "register" options
else{
    ?>
            <!-- <div id="right-bar" class="nav navbar-nav navbar-right">
                <a href="addsong.php"title="Đăng bài hát" title="Đăng bài hát" class="btn"> <i class="fas fa-plus"> </i> Đăng bài hát</a>
                <a href="login.php" title="Đăng nhập" class="btn"><i class="fas fa-user"></i>    Đăng nhập</a>
                <a href="register.php" title="Đăng ký" class="btn"><i class="fas fa-user"></i>   Đăng ký</a>
            </div>
        </div>
        <div id="title-bar">
            <div class="title">
                <a href="Home.php" title="Bài hát" class="text-item">Bài hát</a>
                <a href="#" class="text-item" title="Playlist"  >Playlist</a>
                <a href="#" class="text-item" title="Hợp âm" >Hợp âm</a>
                <a href="Dieubaihat.php" title="Điệu bài hát" id="dieubaihat" class="text-item">Điệu bài hát</a>
                <a href="#" class="text-item" title="Thể loại" >Thể loại</a>
                <a href="#" class="text-item" title="Yêu cầu hợp âm">Yêu cầu hợp âm</a>
                <a href="#" class="text-item" title="Thành viên" >Thành viên</a>
            </div>
        </div>
    </div> -->
    <?php
    }
    ?>
</body>
</html>