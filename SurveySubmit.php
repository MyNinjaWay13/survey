<?php
include("db.php");
$error= NULL;

try{
    // Insert survey to db      
    $stmt = $pdo->prepare("INSERT INTO `tblsurvey`(`Question`, `Description`, `img`, `Owner`, `type`) VALUES (?, ?, ?, ?, ?)");

    // print_r($_POST['type']);die();
    // Bind the values to insert survey
    $stmt->execute([$_POST["Question"],$_POST["Description"], $_POST["img"], $_POST["Owner"], $_POST['type']]);


    // Generate choices sql VALUES
    $choicesSql = '';
    $surveyId = $pdo->lastInsertId();
    foreach($_POST['choices'] as $key=>$choice){
        $choicesSql .= "( '$choice', $surveyId),";
    }
    $choicesSql = substr($choicesSql,0,-1);

    // Choices Insert query
    $stmt = $pdo->prepare("INSERT INTO choices (text, surveyid )
    VALUES $choicesSql
    ");
    $stmt->execute();
        
}catch(Exception $ex) {
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