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
// $conn = mysqli_connect("localhost", "root", "", "hopambh");
// mysqli_query ($conn, 'set names UTF8');
// used to get mysql database connection
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "hopambh";
    private $username = "root";
    private $password = "";
    public $conn;
    
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $q = $this->conn->query('set names UTF8');
            $q->setFetchMode(PDO::FETCH_ASSOC);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}

// mysqli_set_charset($conn, 'UTF8');
?>

</body>
</html>