<?php
include "layouts/header.php";
include "db.php";
if (isset($_POST['delete'])){
    $id = $_SESSION['user_id'];
    $surveyid = $_POST['surveyid'];


   $sql = " DELETE FROM tblsurvey WHERE  id=:id";
    $stmt= $pdo->prepare($sql);
    $stmt->bindParam(':id',$surveyid);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    // print_r($_POST); die();


    }
    ?> 
