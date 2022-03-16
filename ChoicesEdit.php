<?php

include "layouts/header.php";
include "db.php";
if (isset($_POST['edit'])){
    $choices = $_POST;
    unset($choices['edit']);

    foreach($choices as $key => $value){
        $id = str_replace('choice_','',$key);
        
        $choicesSql = "UPDATE choices set text = '$value' WHERE id = :id";
        $choicesQuery = $pdo->prepare($choicesSql);
        $choicesQuery->bindParam(':id',$id);
        $choicesQuery->execute();



        
    }

    header("Location: UserCreatedSurveys.php");

}