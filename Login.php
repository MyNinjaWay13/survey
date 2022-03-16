<?php
session_start();
include "db.php";
if (isset($_POST["submit"])) { 
  if ($_POST["username"]=="" or $_POST["password"]== "") {
    echo "<center><h1>Username, email or password cannot be empty...!</h1></center>";
  }else {
    $username = filter_var(trim($_POST ['username']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST ['password']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST ['email']), FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST ['phone']), FILTER_SANITIZE_STRING);
$fullname = filter_var(trim($_POST ['fullname']), FILTER_SANITIZE_STRING);

  $sql = "select * from registratedusers where username = ? && password = ?";
  $stmt= $pdo->prepare($sql);
  $stmt->execute([$username, $password]);
  $data = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($data) {
    $_SESSION['user_id'] = $data["id"];
    $_SESSION['username'] = $data["username"];
    header("Location: HomePage.php");
  } else {
      echo "<center><h1>Error..!</h1></center>"; 
  }
  }
}


  
?>