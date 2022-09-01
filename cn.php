<?php
$dsn = "mysql:host=localhost;dbname=login1";
$user ='root';
$password = '';
try{
    $db = new PDO($dsn,$user,$password);

    echo "done";
}
catch(PDOEXCEption $e){
    echo "failed to connect";
    $e->getline();

}
?>