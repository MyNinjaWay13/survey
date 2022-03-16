<?php
include("navigation.php");
session_start();
include ("db.php");
require "check.php";
if(isset($_POST["Question"])){
    require "SurveySubmit.php"  ;
}
 $ID = $_SESSION['user_id'];
?>

<html>
	<head>
	<link rel="stylesheet" href="CreateSurvey.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
    
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Survey Creation</h3>
            <p class="black-text">Enter information for your survey!<br> so that we can personalize the right experience for you.</p>
            <div class="card">
                <h5 class="text-center mb-4">Please fill the form</h5>
                <form class="form-card" id="surveyform" action="SurveySubmit.php" method="post" enctype="multipart/form-data">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Survey Title<span class="text-danger"> *</span></label>
                            <input type="text" id="cname" name="Question" placeholder="Enter title for your survey" required>
                        </div>
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <input type="hidden" id="fname" name="Owner" placeholder= required value =<?php if(isset($ID)){echo  $_SESSION['user_id'];}?>>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="form-label" for="customFile">Default file input example</label>
                            <input  type="file" class="form-control" name="img" id="customFile" required />
                        </div>
                        <div class="form-group">
                            <label for="comment">Description</label>
                            <textarea class="form-control" rows="5" name="Description" id="comment" required></textarea>
                        </div>
                    </div>
                    <br>
                    <h6>Choose survey form and add choices for users answer</h6>
                    <select class="form-select" size="3" aria-label="size 3 select example" name="type">
                      <option value="0">One possible answer</option>
                      <option value="1">One or more possible answers</option>
                    </select>
                    <button type="button" onclick="add()">Add</button>
                    <button type="button" onclick="remove()">remove</button>
                    <div id="new_chq"></div>
                    <input type="hidden" value="1" id="total_chq" >
                    <br>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                    </div>
                </form>
                <br>
                <script>
                var errors = 0;
                $('.add').on('click', add);
                $('.remove').on('click', remove);
                function add() {
                  var new_chq_no = parseInt($('#total_chq').val()) + 1;
                  var new_input = "<input type='text' id='new_" + new_chq_no + "' name='choices[]' multiple >";
                  $('#new_chq').append(new_input);
                  $('#total_chq').val(new_chq_no);
                }
                function remove() {
                  var last_chq_no = $('#total_chq').val();
                  if (last_chq_no > 1) {
                    $('#new_' + last_chq_no).remove();
                    $('#total_chq').val(last_chq_no - 1);
                  }
                }
                </script>
        </div>
      </div>
    </div>
</div>
<script src="assets/CreateSurvey.js"></script>
</body>
<?php
include 'layouts/footer.php';
?>
</html>
<?php
    // if(!empty($_POST)){
    //     print_r($_POST['fullname']);
    // }
?>