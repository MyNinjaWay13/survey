<?php
session_start();
include("db.php");
$error= NULL;
$owner = $_SESSION['username'];
    // print_r ($_POST);die();


try{
    $checkbox1= $_POST['vote'];
    $chk="";

    foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
    
    
    $stmt = $pdo->prepare("INSERT INTO `votes`(`owner`, `choiceid`) VALUES ('$owner', '$chk')"); 
    $stmt->execute();

}

catch(Exception $ex) {
    $error = $ex->getMessage();
}
if(is_null($error)){
    echo  "OK" ;
    header("location: HomePage.php");
}
else{
    echo($error);
}


?> 