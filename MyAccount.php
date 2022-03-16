<?php include 'layouts/header.php';
 include ("db.php");
require "check.php";
 $ID = $_SESSION['user_id'];
 try{
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $statement = $pdo->prepare("SELECT email, phone, fullname FROM registratedusers WHERE id = :id");
 $statement->execute(array(':id' => $ID));
 $data = $statement->fetch(PDO::FETCH_ASSOC);
 } 
 catch(PDOException $error){
   $error->getMessage();
 }

?>
    <?php require "check.php"; ?>
    <h1 class="text-primary">Edit Profile</h1>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use REAL inforamtion.
        </div>
        <h3>Personal info</h3>
        <form action="AccEdit.php" method = "POST">
          <div class="form-group">
            <label class="col-lg-3 control-label">Username:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="uname" value = <?php if(isset($_SESSION['user_id'])){
              echo  $_SESSION['username'];}?>
              >
            </div>
          </div>
          <div class="form-group">
          <form action="AccEdit.php" method = "POST">

            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value = <?php if(isset($_SESSION['user_id'])){
              echo  $data['email'];}?> >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value = <?php if(isset($_SESSION['user_id'])){
              echo  $data['phone'];}?> >
            </div>
          </div>

         
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Fullname:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fname" value = <?php if(isset($_SESSION['user_id'])){
              echo  $data['fullname'];}?> >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="password" >
            </div>
          </div>
          
                <br>
                <button  class="btn btn-primary" id="SurveyButton" type="button">Create Survey</button>
                <input  class="btn btn-primary" type = "submit" name = "edit">
                <br>
                <button   class="btn btn-outline-success" name = "MySurveys" id = "mysurveys" type = "button" onClick = "MyFunction()">My created surveys</button>
                <script>
  function MyFunction() {
    window.location.href="UserCreatedSurveys.php";
  }
 </script>

              </div>
            </div>
          </div>

        </form>
      </div>
  </div>
</div>
<hr>

<script src="assets/MyAccount.js"></script>
</body>
<?php
include 'layouts/footer.php';
?>
</html>