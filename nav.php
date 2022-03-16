<?php
if(($_SESSION['user_id'])){
echo "Welcome $_SESSION[username] | <a href='logout.php'>Logout</a>";
}
?>