<?php
session_start();
if (isset($_POST["submit"])) {
  require "db.php";

  $username = filter_var(trim($_POST ['username']), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST ['password']), FILTER_SANITIZE_STRING);
  $sql = "select * from registratedusers where username = ? && password = ?";
  $stmt= $pdo->prepare($sql);
  $stmt->execute([$username, $password]);

  $data = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($data) {
    $_SESSION['user'] = $user['id'];
    header("Location: HomePage.php");

  } else {
      echo "Error.";
  }
}
  
?>