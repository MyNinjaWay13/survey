<?php

include "layouts/header.php";
include "db.php";
if (isset($_POST['delete'])){
    $choices = $_POST;
    unset($choices['delete']);

    foreach($choices as $key => $value){
        $id = str_replace('choice_','',$key);
        
        $choicesSql = "DELETE FROM choices WHERE id = :id";
        $choicesQuery = $pdo->prepare($choicesSql);
        $choicesQuery->bindParam(':id',$id);
        $choicesQuery->execute();



        
    }

    header("Location: UserCreatedSurveys.php");

}
?>
