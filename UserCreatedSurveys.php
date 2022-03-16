<?php

include "layouts/header.php";
include "db.php";
define("PER_PAGE", "7");

if(!isset($_SESSION['user_id'])){
    echo "Please <a href=LoginPage.php>login</a> to use this page ";
    }
    $stmt = $pdo->prepare("SELECT CEILING(COUNT(*) / ".PER_PAGE.") `pages` FROM `tblsurvey`");
$stmt->execute(); 
$pageTotal = $stmt->fetchColumn();
$pageNow = isset($_GET["page"]) ? $_GET["page"] : 1 ;
$limX = ($pageNow - 1) * PER_PAGE;
$limY = PER_PAGE;

$stmt = $pdo->prepare("SELECT * FROM `tblsurvey` WHERE Owner=:id ");
$stmt->bindParam(':id',$_SESSION['user_id']);
$stmt->execute();
$surveys = $stmt->fetchAll();
  ?>
  <head>
      <link rel="stylesheet" href="UserCreated.css">
      </head>
<br>
<body>
  <h1>My Surveys</h1>

  <?php foreach($surveys as $survey): ?>
  <?php
          $choicesSql = "SELECT * FROM choices WHERE surveyid=:surveyid";
          $choicesQuery = $pdo->prepare($choicesSql);
          $choicesQuery->bindParam(':surveyid',$survey['id']);
          $choicesQuery->execute();
          $choices = $choicesQuery->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <br>
  <div class="row col-5">
    <h4 class="fw-bold text-center mt-3"></h4>
    <form class=" bg-white px-4" action="SurveyEdit.php" method="post">
      <ul>
        <li>
      <input type="hidden" name="surveyid" value="<?=$survey['id'];?>">
      <input class="form-control" name="Question" class="fw-bold" value="<?=$survey['Question'];?>">
      <input class="form-control" name="Description" class="fw-bold" value="<?=$survey['Description'];?>">
      <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
          location.href = "UserCreatedSurveys.php";
        };
      </script>
      <button class="btn btn-outline-warning" name="edit" id="myButton">EDIT</button>
      <button class="btn btn-outline-danger" name="delete" id="delbtn" formaction="SurveyDel.php">DELETE</button>
      </li>
    </form>

    <form class=" bg-white px-4" method="post">
      <?php foreach($choices as $choice): ?>
      <div class="form-check mb-2">
        <input class="form-control" name="choice_<?=$choice['id']?>" class="form-check-label" for="radioExample1"
          value="<?=$choice['text']?>" />
      </div>
      <?php endforeach; ?>
      <button class="btn btn-outline-warning" name="edit" formaction="ChoicesEdit.php" id="myButton">EDIT</button>
      <button class="btn btn-outline-danger" name="delete" id="delbtn" formaction="ChoiceDelete.php">DELETE</button>
      <hr>
    
            </ul>
    </form>
  </div>

    <!-- <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "UserCreatedSurveys.php";
    };
</script> -->

    <?php endforeach; ?>

























</body>

</html>