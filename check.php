
<?php
if(!isset($_SESSION['user_id'])){
echo "Please <a href=LoginPage.php>login</a> to use this page ";
exit;
}else{
// echo "Welcome $_SESSION[username] | <a href='logout.php'>Logout</a>|<a href='change.php'>Change Password</a>";
}

?>
