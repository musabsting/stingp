
<?php
include "cn.php";
if(isset($_POST['save'])){
    $username =$_POST{'username'};
    $txt =$_POST{'txt'};

    $stmt =$db->prepare( "INSERT INTO mus(username,	txt	) VALUES(:s,:t)" );
    $stmt->execute(array(
        's' => $username,
        't' => $txt,
    ));
   
}
?>

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="cascade.css">
    <title>storeting</title>
</head>
<body>
   <form  action="stingi.php" method="post">
  
        <div><input type="text" name="username" placeholder="username"></div>
         <div> 
         <span > <input type="text" name="txt"
             placeholder="text" required ></span>
             </div>
   

<div class="save">
    <input type="submit" name="save" value="login">
</div>

</form>
       
    </body>
</html>
