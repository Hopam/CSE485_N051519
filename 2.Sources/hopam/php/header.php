<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scare:1">
        <link rel="stylesheet" type="text/css" href="../css/habh.css">
        <link rel="stylesheet" type="text/css" href="../css/dbh.css">
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css.map"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"crossorigin="anonymous">
		<script type="text/javascript" src="../js/habh.js"></script> 
        <script src="../js/jquery-3.3.1.js"></script>
    </head>
    <body>
    <?php
        include_once "core.php";
         
    ?>
    <div id="top-nav-bar">        
            <div id="nav-bar">
            	<div id="left-bar">
                	<a title="Trang chủ" href="../php/Home.php" style="text-decoration:none">
                        <img src="../Image/logo.png" style="vertical-align:middle; cursor:pointer" height="60px" width="60px"/>                  	
                    </a>
                	<input type="text" id="myInput" onkeyup="showHint(this.value)" placeholder="Tìm kiếm theo tên bài hát"/>   
                    <div class="search"><span id="txtHint"></span></div>                
                    </div>
                <?php
                        // login and logout options will be here 
                        // check if users / customer was logged in
            // if user was logged in, show "Edit Profile", "Orders" and "Logout" options
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true ){

                ?>
                <div id="right-bar" class="nav navbar-nav navbar-right" style="margin-right:20px">
                    <!-- <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?> -->
                        <a href="../Song/Addsong/addsong.php"title="Đăng bài hát" title="Đăng bài hát" class="btn"> <i class="fas fa-plus"> </i> Đăng bài hát</a>
                        <!-- <a href="../php-login/login.php" title="Đăng nhập" class="btn"><i class="fas fa-user"></i>    Đăng nhập</a> -->
                        <a href="../php-login/index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <!-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> -->
                        <img id="icon" src="../Image/login-icon.png"/>  <?php echo $_SESSION['firstname']; ?>
                            &nbsp;<span class="caret"></span>
                        </a>
                        <!-- <ul class="dropdown-menu" role="menu">
                            <li><a href="../php-login/logout.php">Logout</a></li>
                        </ul>    -->
                </div>           
          	</div> 
            <div id="title-bar">
            	<div class="title">
                	<a href="Home.php" title="Bài hát" class="text-item">Bài hát</a>
                    <a href="Playlist.php" class="text-item" title="Playlist">Playlist</a>
                    <a href="Hopam.php" class="text-item" title="Hợp âm">Hợp âm</a>
                    <a href="Dieubaihat.php" title="Điệu bài hát" class="text-item">Điệu bài hát</a>
                    <a href="TheLoai.php" class="text-item" title="Thể loại">Thể loại</a>
                </div>
            </div>  	
        </div>
        

   

       <?php
    }
    else{
        ?>
        <div id="right-bar">    
                    <a href="../Song/Addsong/addsong.php" title="Đăng bài hát" class="btn"><i class="fas fa-plus"> </i> Đăng bài hát</a>
                   	<a href="../php-login/login.php" title="Đăng nhập" class="btn"><i class="fas fa-user"></i> Đăng nhập</a>
                    <a href="../php-login/register.php" title="Đăng ký" class="btn"><i class="fas fa-user"></i> Đăng ký</a>
                </div>            
          	</div> 
            <div id="title-bar">
            	<div class="title">
                	<a href="Home.php" title="Bài hát" class="text-item">Bài hát</a>
                    <a href="Playlist.php" class="text-item" title="Playlist" >Playlist</a>
                    <a href="Hopam.php" class="text-item" title="Hợp âm">Hợp âm</a>
                    <a href="Dieubaihat.php" title="Điệu bài hát" class="text-item">Điệu bài hát</a>
                    <a href="TheLoai.php" class="text-item" title="Thể loại" >Thể loại</a>
                    
                </div>
            </div>  
           
        <?php
        }
                ?>
                 
            </div><!--/.nav-collapse -->

        </div>
    </div>
<style>
.search{
	margin-left:70px; 
	z-index:99999;
	margin-top:0; 
	position:fixed;
	background-color:#FFF;
	border:1px solid #ddd;
	border-radius:10px;
	text-decoration: none;
	cursor: pointer;
}
a{
    color:white;
}
#icon{
    width:25px;
    height:25px;
    margin-bottom:-5px;
}

</style>
    </body>
</html>
