<?php
session_start();
include("db.php");
$error= NULL;
$owner = $_SESSION['user_id'];
$vt= $_POST['vote'];
    // print_r ($_POST);die();


try{
    
    if(!is_array($vt)){
        $stmt = $pdo->prepare("INSERT INTO `votes`(`owner`, `choiceid`) VALUES ('$owner', '$vt')"); 
        $stmt->execute();
    }
    else{
        foreach($vt as $vtSingle){
            $stmt = $pdo->prepare("INSERT INTO `votes`(`owner`, `choiceid`) VALUES ('$owner', '$vtSingle')"); 
            $stmt->execute();
        }
    }

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