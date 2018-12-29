<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// display the table if the number of users retrieved was greater than zero
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";
 
    // table headers
    echo "<tr>";
        echo "<th>STT</th>";
        echo "<th>Tên bài hát</th>";
        echo "<th>Ca sĩ</th>";

    echo "</tr>";
 
    // loop through the songrecords
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
 
        // display user details
        echo "<tr>";
            echo "<td>{$Tenbh}</td>";
            echo "<td>{$CaSi}</td>";
        echo "</tr>";
        }
 
    echo "</table>";
 
    $page_url="read_song.php?";
    $total_rows = $song->countAll();
 
    // actual paging buttons
    include_once 'paging.php';
}
 
// tell the user there are no selfies
else{
    echo "<div class='alert alert-danger'>
        <strong>No users found.</strong>
    </div>";
}
?>

</body>
</html>