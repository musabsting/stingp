<?php
if(isset($_POST[save])){
    print_r($_POST);
    $sql "INSERT INTO logi(username,password) 
    VALUES('"$_POST['username']"', '"$_POST['password']"')";
    $conn->query($sql);
}
















$host = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$host;dbname=login",$username,$password);
   
    echo "connected";
}
catch(PDOException $e){
    echo "failed: ".$e->getMessage();
}



?>