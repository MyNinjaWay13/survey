 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="HomePage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php
        session_start();
        include("navigation.php");
        $ID = $_SESSION['user_id'];

        ?>
 <?php  
 
  require 'db.php';
  define("PER_PAGE", "3");
  $stmt = $pdo->prepare("SELECT CEILING(COUNT(*) / ".PER_PAGE.") `pages` FROM `tblsurvey`");
$stmt->execute(); 
$pageTotal = $stmt->fetchColumn();

$pageNow = isset($_GET["page"]) ? $_GET["page"] : 1;
$limX = ($pageNow - 1) * PER_PAGE;
$limY = PER_PAGE;
$stmt = $pdo->prepare("SELECT *,  (SELECT COUNT(v.id) FROM `votes` v 
LEFT JOIN choices c ON (v.choiceid = c.id)
WHERE v.owner={$ID} AND c.surveyid = ts.id) as user_has_voted FROM `tblsurvey` ts ORDER BY `id` LIMIT $limX, $limY");
$stmt->execute();
$surveys = $stmt->fetchAll();
// $prevPage=$pageNow - 1;
// $nextPage= $pageNow + 1;
$prevPage = ($pageNow - 1) < 1 ? 1 : ($pageNow - 1);
$nextPage = ($pageNow + 1) > $pageTotal ? $pageTotal : ($pageNow + 1);
  ?>

            <body>
            <br>
            <h1 class="mb-3" style="font-size:50px"> Recent Surveys</h1>

<?php foreach($surveys as $survey): ?>
  <?php

    $choicesSql = "SELECT *
    , (SELECT COUNT(id) FROM votes WHERE choiceid=choices.id) as vote_count
     FROM choices WHERE surveyid=:surveyid";
    $choicesQuery = $pdo->prepare($choicesSql);
    $choicesQuery->bindParam(':surveyid',$survey['id']);
    $choicesQuery->execute();
    $choices = $choicesQuery->fetchAll(PDO::FETCH_ASSOC);

  ?>
  
<div class="row col-5">
  <h4 class="fw-bold text-center mt-3"></h4>
  <form id = "survform" class=" bg-white px-9" method="post">
<br>
    <p style="font-size:25px;" class="fw-bold"><?=$survey['Question'];?></p>
    <p style="font-size:20px" name = "Description" class="fw-bold"><?=$survey['Description'];?></p>
    <br>
    <img src = "<?=$survey['img'];?>" width="650" height="400" value=/>
    <br>
    <?php
      // print_r($survey);
    ?>
    <?php
    // $choiceType = $survey['type'] == 0 ? 'radio' : 'checkbox';
    if($survey['type'] == 0)
      $choiceType = 'radio';
    else
      $choiceType = 'checkbox';
    foreach($choices as $choice): ?>
    <br>
      <div class="form-check mb-2">
        <input id = "ch" class="mb-3" type="<?=$choiceType?>" name="vote<?=$choiceType == 'checkbox' ? '[]' : ''; ?>" id="radioExample1 " value = "<?=$choice['id']?>" />    
        <label class="form-check-label" for="radioExample1">
          <?=$choice['text']?>
        </label>
        <p class= "respond2"> 
      users respond: <br><span

        class="respond" id="display"><?=$choice['vote_count']?></span>
    </p>
   
  
      </div>
    <?php endforeach; ?>
   
    <?php
    if(!isset($_SESSION['user_id'])){
      echo '<button class="btn btn-primary"  style="visibility: hidden" name = "answerbtn" type="submit" class="btn btn-primary"><i aria-hidden="true"></i> SUBMIT</button>' ;
        }
        else{
          if(isset($_SESSION['user_id']))
          
          echo '<button class="btn btn-primary" id= "btn" formaction= "VoteSubmit.php"  name = "answerbtn" type="submit">SUBMIT</button>';
         
        }
      
    ?>
     <script>
  
    </script>
  </form>
  <div class="text-end">
    
  </div>
</div>
<?php endforeach; ?>


    </body>
    
    <br>
    <nav class="dodo" aria-label="Page navigation example">
  <ul class="pagination">
  <li class="page-item"><a class="page-link" href="HomePage.php?page=<?=$prevPage?>"  class='button'>Previous</a></li>
    <?php for($a = 1;$a <= $pageTotal; $a++): ?>
      <li class="page-item"><a class="page-link" href="?page=<?=$a?>"><?=$a?></a></li>
    <?php endfor; ?>
  <li class="page-item"><a class="page-link" href="HomePage.php?page=<?=$nextPage?>"  class='button'>Next</a></li>
    
  </ul>
</nav>
    <?php 
    include 'layouts/footer.php';
    ?>
    
    
    </html>
  

   















