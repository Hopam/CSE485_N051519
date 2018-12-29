<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
<?php
// 'user' object
class song{
 
    // database connection and table name
    private $conn;
    private $table_name = "baihat";
 
    // object properties
    public $Mabh;
    public $Tenbh;
    public $Loibh;
    public $CaSi;
    public $TacGia;
    public $TheLoai;
    public $Dieubh;
    public $Tone;
    public $Capo;
    public $Link;
    public $CapNhat;
    public $NguoiDang;
    public $LuotXem;
    
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
    function TenbhExists(){
 
        // query to check if Tenbh exists
        $query = "SELECT Mabh,Tenbh, Loibh, CaSi, TacGia, TheLoai, Tone,Capo, Link, CapNhat, NguoiDang, LuotXem
                FROM " . $this->table_name . "
                WHERE Tenbh = ?
                LIMIT 0,1";
     
        // prepare the query
        $stmt = $this->conn->prepare( $query );
     
        // sanitize
        $this->Tenbh=htmlspecialchars(strip_tags($this->Tenbh));
     
        $stmt->bindParam(1, $this->Tenbh);
     
        // execute the query
        $stmt->execute();
     
        // get number of rows
        $num = $stmt->rowCount();
     
    
        if($num>0){
     
            // get record details / values
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
            // assign values to object properties
            $this->Mabh = $row['Mabh'];
            $this->Mabh = $row['Tenbh'];
            $this->Loibh= $row['Loibh'];
            $this->CaSi = $row['CaSi'];
            $this->TacGia = $row['TacGia'];
            $this->TheLoai = $row['TheLoai'];
            $this->Tone = $row['Tone'];
            $this->Capo = $row['Capo'];
            $this->Link = $row['Link'];
            $this->CapNhat = $row['CapNhat'];
            $this->NguoiDang= $row['NguoiDang'];
            $this->LuotXem = $row['LuotXem'];
     
            return true;
        }
     
        return false;
    }
    
    
// create new user record
function create(){
 
    // to get time stamp for 'created' field
    $this->CapNhat=date('Y-m-d H:i:s');
    // insert query
    $query = "INSERT INTO " . $this->table_name . "
            SET
        Mabh = :Mabh,
        Tenbh = :Tenbh,
        Loibh = :Loibh,
        CaSi = :CaSi,
        TacGia = :TacGia,
        TheLoai = :TheLoai,
        Dieubh = :Dieubh,
        Tone = :Tone,
        Capo = :Capo,
        Link = :Link,
        CapNhat = :CapNhat,
        NguoiDang = :NguoiDang,
        LuotXem = :LuotXem ";
 
    // prepare the query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->Mabh=htmlspecialchars(strip_tags($this->Mabh));
    $this->Tenbh=htmlspecialchars(strip_tags($this->Tenbh));
    $this->Loibh=htmlspecialchars(strip_tags($this->Loibh));
    $this->CaSi=htmlspecialchars(strip_tags($this->CaSi));
    $this->TacGia=htmlspecialchars(strip_tags($this->TacGia));
    $this->TheLoai=htmlspecialchars(strip_tags($this->TheLoai));
    $this->Dieubh=htmlspecialchars(strip_tags($this->Dieubh));
    $this->Tone=htmlspecialchars(strip_tags($this->Tone));
    $this->Capo=htmlspecialchars(strip_tags($this->Capo));
    $this->Link=htmlspecialchars(strip_tags($this->Link));
    $this->CapNhat=htmlspecialchars(strip_tags($this->CapNhat));
    $this->NguoiDang=htmlspecialchars(strip_tags($this->NguoiDang));
    $this->LuotXem=htmlspecialchars(strip_tags($this->LuotXem));
 
    // bind the values
    $stmt->bindParam(':Mabh', $this->Mabh);
    $stmt->bindParam(':Tenbh', $this->Tenbh);
    $stmt->bindParam(':Loibh', $this->Loibh);
    $stmt->bindParam(':CaSi', $this->CaSi);
    $stmt->bindParam(':TacGia', $this->TacGia);
    $stmt->bindParam(':TheLoai', $this->TheLoai);
    $stmt->bindParam(':Dieubh', $this->Dieubh);
    $stmt->bindParam(':Tone', $this->Tone);
    $stmt->bindParam(':Capo', $this->Capo);
    $stmt->bindParam(':Link', $this->Link);
    $stmt->bindParam(':CapNhat', $this->CapNhat);
    $stmt->bindParam(':NguoiDang', $this->NguoiDang);
    $stmt->bindParam(':LuotXem', $this->LuotXem);

 
    // execute the query, also check if query was successful
    if($stmt->execute()){
        return true;
    }else{
        $this->showError($stmt);
        return false;
    }
 
}

public function showError($stmt){
    echo "<pre>";
        print_r($stmt->errorInfo());
    echo "</pre>";
}

// read all user records
function readAll($from_record_num, $records_per_page){
 
    // query to read all user records, with limit clause for pagination
    $query = "SELECT
                Mabh,
                Tenbh,
                CaSi,
                TacGia,
                TheLoai,
                Dieubh,
                CapNhat,
                NguoiDang,
                LuotXem
            FROM " . $this->table_name . "
            ORDER BY Mabh ASC
            LIMIT ?, ?";
 
    // prepare query statement
    $stmt = $this->conn->prepare( $query );
 
    // bind limit clause variables
    $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
    $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
 
    // execute query
    $stmt->execute();
 
    // return values
    return $stmt;
}
function readSong($from_record_num, $records_per_page){
    $query = "SELECT Tenbh FROM ".$this->table_name."";
    $stmt = $this->conn->prepare( $query );
 
    // bind limit clause variables
    $stmt->bindParam(1, $from_record_num, PDO::PARAM_INT);
    $stmt->bindParam(2, $records_per_page, PDO::PARAM_INT);
 
    // execute query
    $stmt->execute();
 
    // return values
    return $stmt;
}

// used for paging users
public function countAll(){
 
    // query to select all user records
    $query = "SELECT Mabh FROM " . $this->table_name . "";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    // get number of rows
    $num = $stmt->rowCount();
 
    // return row count
    return $num;
}

// used in email verification feature

// used in forgot password feature


// check if given access_code exist in the database


// used in forgot password feature

}
?>
</body>
</html>
<!-- Username: darwin@example.com
Password: darwin12qw!@QW -->