<?php
require "db.php";
//$id = (isset($_POST['id']) ? $_POST['id'] : '');
$email = filter_var(trim($_POST ['email']), FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST ['phone']), FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST ['username']), FILTER_SANITIZE_STRING);
$fullname = filter_var(trim($_POST ['fullname']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST ['password']), FILTER_SANITIZE_STRING);
$pswrepeat= filter_var(trim($_POST ['psw-repeat']), FILTER_SANITIZE_STRING);



$sql = "INSERT INTO registratedusers (`email`, `password`, `username`, `phone`, `fullname`) VALUES (?, ?, ?, ?, ?)";
$stmt= $pdo->prepare($sql);
$result = $stmt->execute([$email, $password, $username, $phone, $fullname]);

if ($result == 1 ) {
    header("Location: LoginPage.php");     
}
// elseif($result==1 && isset($_SESSION['user_id'])){
//     header('HomePage.php');
//     // echo "You are already logged in";
// }
?> 