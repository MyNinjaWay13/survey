<?php
$pdo= null;
$host = 'localhost';
$db   = 'surveyproject';
$user = 'root';
$pass = '';
$port = "3306";
$charset = 'utf8mb4';
$dsn = "mysql:dbname={$db};host={$host};port={$port}; charset={$charset}";
// $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
try {
    
     $pdo = new \PDO($dsn, $user, $pass);
     
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

 catch (\PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
}
?>
     

