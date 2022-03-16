<?php

include "layouts/header.php";
include "db.php";
if (isset($_POST['edit'])){
    $desc = $_POST['Description'];
    $id = $_SESSION['user_id'];
    $question = $_POST['Question'];
    $choice = $_POST['choice'];
    $surveyid= $_POST['surveyid'];
    $text = $_POST['choice'];


    $sql = "UPDATE tblsurvey set Question = '$question', Description = '$desc 'WHERE  id=:id";
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(':id',$surveyid);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($_POST); die();
    header("Location: UserCreatedSurveys.php");


    // $choicesSql = "UPDATE choices set text = '$text' WHERE surveyid = :id";
    // $choicesQuery = $pdo->prepare($choicesSql);
    // $choicesQuery->bindParam(':id',$surveyid);
    // $choicesQuery->execute();
    // $choices = $choicesQuery->fetchAll(PDO::FETCH_ASSOC);
    // print_r($_POST); die();
    // header("Location: UserCreatedSurveys.php");

//     $stmt = $pdo->prepare("SELECT * FROM `tblsurvey` WHERE Owner=:id ");
// $stmt->bindParam(':id',$_SESSION['user_id']);
// $stmt->execute();
// $surveys = $stmt->fetchAll();
}
?>



    <!-- // $sql = "UPDATE tblsurvey set Question = '$question', Description = '$desc 'WHERE  id=:surveyid";
    // $stmt= $pdo->prepare($sql);
    // $stmt->bindParam(':surveyid',$survey['id']);
    // $stmt->execute();
    // $data = $stmt->fetch(PDO::FETCH_ASSOC);
    // header("Location: UserCreatedSurveys.php"); -->



