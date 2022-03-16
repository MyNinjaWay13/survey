<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// // Check file size
// if ($_FILES["img"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

include("db.php");
$error= NULL;

try{
    // Insert survey to db      
    $stmt = $pdo->prepare("INSERT INTO `tblsurvey`(`Question`, `Description`, `img`, `Owner`, `type`) VALUES (?, ?, ?, ?, ?)");

    // print_r($_POST['type']);die();
    // Bind the values to insert survey
    $stmt->execute([$_POST["Question"],$_POST["Description"], $_FILES["img"]["name"], $_POST["Owner"], $_POST['type']]);


    // Generate choices sql VALUES
    $choicesSql = '';
    $surveyId = $pdo->lastInsertId();
    foreach($_POST['choices'] as $key=>$choice){
        $choicesSql .= "( '$choice', $surveyId),";
    }
    $choicesSql = substr($choicesSql,0,-1);

    // Choices Insert query
    $stmt = $pdo->prepare("INSERT INTO choices (text, surveyid )
    VALUES $choicesSql
    ");
    $stmt->execute(); 
        
}catch(Exception $ex) {
    $error = $ex->getMessage();
}

if(is_null($error)){
    echo  "OK" ;
    header("location: HomePage.php");
}
else{
    echo($error);
}
?>
