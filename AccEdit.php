<?php
session_start();
include "db.php";
if (isset($_POST['edit'])){
    $id = $_SESSION['user_id'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fullname = $_POST['fname'];
    $password = $_POST['password'];
   
    $sql = "UPDATE registratedusers set username = '$username', email= '$email'
    , phone = '$phone', fullname = '$fullname'";
    if(!empty($password))
        $sql .= ", password = '$password'";
    $sql .= " WHERE id = '$id'";
    $stmt= $pdo->prepare($sql);
    $stmt->execute([$id, $username, $email, $phone, $fullname, $password]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    header("Location: MyAccount.php");
    
}
      
  
    ?>
