<?php  
  include 'layouts/header.php';
  include 'db.php';

  
 ?>











































 <?php
// include 'db.php';
// define("PER_PAGE", "10");
// $stmt = $pdo->prepare("SELECT CEILING(COUNT(*) / ".PER_PAGE.") `pages` FROM `tblsurvey`");
// $stmt->execute(); 
// $pageTotal = $stmt->fetchColumn();

// $pageNow = isset($_GET["page"]) ? $_GET["page"] : 1 ;
// $limX = ($pageNow - 1) * PER_PAGE;
// $limY = PER_PAGE;

// $stmt = $pdo->prepare("SELECT * FROM `tblsurvey` ORDER BY `id` LIMIT $limX, $limY");
// $stmt->execute();
// $surveys = $stmt->fetchAll();
//   ?>
//             <body>
//             <br>
//             <h1>Recent Surveys</h1>
//             <ul>
//               <?php
// foreach ($surveys as $u) {
//   printf("<li>%u %s</li>", $u['id'], $u['Question'], $u['Description'], $u['img']);
// }
// ?></ul>

// <div class="pagination" id="pagination"><?php
// for ($i=1; $i<=$pageTotal; $i++) {
//   printf("<a %shref='1-paginate.php?page=%u'>%u</a>", 
//     $i==$pageNow ? "class='current' " : "", $i, $i
//   );
// }
?></div>
 



 // $start = 0;  $per_page = 4;
  //   $page_counter = 0;
  //   $next = $page_counter + 1;
  //   $previous = $page_counter - 1;
    
  

    
  //   if(isset($_GET['start'])){
  //    $start = $_GET['start'];
  //    $page_counter =  $_GET['start'];
  //    $start = $start *  $per_page;
  //    $next = $page_counter + 1;
  //    $previous = $page_counter - 1;
  //   }
  //   $q = "SELECT * FROM tblsurvey LIMIT $start, $per_page";
  //   $query = $pdo->prepare($q);
  //   $query->execute();

  //   if($query->rowCount() > 0){
  //       $result = $query->fetchAll(PDO::FETCH_ASSOC);
  //   }
  //   $count_query = "SELECT * FROM tblsurvey";
  //   $query = $pdo->prepare($count_query);
  //   $query->execute();
  //   $count = $query->rowCount();
  //   $paginations = ceil($count / $per_page);
  //   echo "<pre>";
  //   print_r($result);
    
?>