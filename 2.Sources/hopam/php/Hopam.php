<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Trang chủ - Hợp Âm HD - Website tra cứu hợp âm bài hát</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scare:1">
        <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css.map"/>
        <link rel="stylesheet" type="text/css" href="../css/hopam.css">
    </head>
    <body>
    <?php
    include_once 'header.php';
    ?>
<div class="container" style ="padding-top:100px">
    <div class="col-md-12">
        <div class="grid_16">
            <h1 class ="center">Các hợp âm thông dụng</h1>
            <br/>
            <!-- These line of code is migrated from legacy system -->
            <div id="circle_of_fifths">
                <br/>
                <p class ="center">Nhấn vào hợp âm để xem chi tiết</p>  
                <br/>         
                <!-- 386px-384px      -->
                <p class ="center"><img src="../Image/circle.png" usemap="#chordmap"/></p> 

            </div>
            <!--
            coords="x,y,circle"
            x xác định vị trí từ tâm hình tròn đến cạnh bên trái của tấm hình.
            y xác định vị trí từ tâm hình tròn đến cạnh trên của tấm hình.
            circle dùng để xác định bán kính của hình tròn.
             -->
            <map name="chordmap">
                <area value="C" shape="circle" coords="190,33,20" alt="Mercury"  href = "../Image/C.png" />
                <area value="G" shape="circle" coords="266,53,20" alt="Mercury" href = "../Image/G.png"/>
                <area value="D" shape="circle" coords="324,111,20" alt="Mercury" href = "../Image/D.png" />
                <area value="A" shape="circle" coords="345,189,20" alt="Mercury" href = "../Image/A.png"/>
                <area value="E" shape="circle" coords="322,263,20" alt="Mercury" href = "../Image/E.png"/>
                <area value="B" shape="circle" coords="266,317,20" alt="Mercury" href = "../Image/B.png"/>
                <area value="F#" shape="circle" coords="192,343,20" alt="Mercury" href = "../Image/Fs.png"/>
                <area value="C#" shape="circle" coords="117,319,20" alt="Mercury" href = "../Image/Cs.png"/>
                <area value="Ab" shape="circle" coords="69,263,20" alt="Mercury" href = "../Image/Ab.png"/>
                <area value="Eb" shape="circle" coords="36,188,20" alt="Mercury" href = "../Image/Eb.png"/>
                <area value="Bb" shape="circle" coords="57,111,20" alt="Mercury" href = "../Image/Bb.png"/>
                <area value="F" shape="circle" coords="113,53,20" alt="Mercury" href = "../Image/F.png"/>
                <area value="Fm" shape="circle" coords="109,232,20" alt="Mercury" href = "../Image/Fm.png" />
                <area value="Cm" shape="circle" coords="96,187,20" alt="Mercury" href = "../Image/Cm.png"/>
                <area value="Gm" shape="circle" coords="107,139,20" alt="Mercury" href = "../Image/Gm.png"/>
                <area value="Dm" shape="circle" coords="142,103,20" alt="Mercury" href = "../Image/Dm.png"/>
                <area value="Am" shape="circle" coords="190,90,20" alt="Mercury" href = "../Image/Am.jpg"/>
                <area value="Em" shape="circle" coords="238,102,20" alt="Mercury" href = "../Image/Em.jpg"/>
                <area value="Bm" shape="circle" coords="273,140,20" alt="Mercury" href = "../Image/Bm.png"/>
                <area value="F#m" shape="circle" coords="283,189,20" alt="Mercury" href = "../Image/Fsm.png"/>
                <area value="C#m" shape="circle" coords="274,236,20" alt="Mercury" href = "../Image/Csm.png"/>
                <area value="G#m" shape="circle" coords="238,271,20" alt="Mercury" href = "../Image/Gsm.png"/>
                <area value="Ebm" shape="circle" coords="190,280,20" alt="Mercury" href = "../Image/Ebm.png"/>
                <area value="Bbm" shape="circle" coords="142,269,20" alt="Mercury" href = "../Image/Bbm.png"/>
            </map>
            <br/>
            <h2 class ="center">Hợp âm khác</h2>
            <br/>
            <div id="all_chord" class = "col-md-12">
            <div  class = "chord"> 
                <h3 class = "center"> ĐÔ: </h3>
                <br/>
                <br/>
                <ul>    

                    <li> <p> Cm7</p> <img src="../Image/Cm7.png" class = "ha"></li>
                    <li> <p> Cm6</p><img src="../Image/Cm6.png" class = "ha"></li>
                    <li> <p> Cmaj7</p><img src="../Image/Cmaj7.png" class = "ha" ></li>              
                    <li> <p> C#</p><img src="../Image/Cs.png" class = "ha"></li>
                    <li> <p> C#m</p><img src="../Image/Csm.png" class = "ha" ></li>
             
            </div>   
            <div  class = "chord"> 
                <h3 class = "center"> RÊ: </h3>
                <br/>
                <br/>
                <ul>
                <li> <p> D6</p> <img src="../Image/D6.png" class = "ha"></li>
                    <li> <p> Dm7</p><img src="../Image/Dm7.png" class = "ha"></li>
                    <li> <p> Dmaj7</p><img src="../Image/Dmaj7.png" class = "ha" ></li>              
                    <li> <p> D7b5</p><img src="../Image/D7b5.png" class = "ha"></li>
                    <li> <p> D9</p><img src="../Image/D9.png" class = "ha" ></li>
             
             
            </div>  
            <div  class = "chord"> 
                <h3 class = "center"> MI: </h3>
                <br/>
                <br/>
                <ul>
                <li> <p> Eb</p> <img src="../Image/Eb.jpg" class = "ha"></li>
                    <li> <p> Ebm</p><img src="../Image/Ebm.jpg" class = "ha"></li>
                    <li> <p> Eb6</p><img src="../Image/Eb6.png" class = "ha" ></li>              
                    <li> <p> E6</p><img src="../Image/E6.png" class = "ha"></li>
                    <li> <p> E7</p><img src="../Image/E7.png" class = "ha" ></li>
             
            </div>  
        </div>
    </div>
</div>
<?php include_once "Footer.php";?>
</body>
<!-- <script>
    const chord = document.querySelector('#ha');
    chord.onmouseover = () =>{
       document.write( <img src="../Image/C.png" />)
    }
</script> -->
</html>