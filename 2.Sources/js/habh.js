function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}

// $(document).ready(function(){
    // $("#dbh").click(function(){
    //     $("#show1").slideToggle("slow");
    // })
//     $("#myInput").keyup(function(){
//         var txt = $("#myInput").val();
//         $.post('php/search.php'), {data : txt}, function(){
//             $('#left-content').html(data);
//         }
//     })
// });
//----------------------------


//----------------
var playlist = document.getElementsByClassName("text-item");
playlist.addEventListener('click',play,false);

function play(){
alert("Chưa có gì hớt");
}
//---------------------------------------------
