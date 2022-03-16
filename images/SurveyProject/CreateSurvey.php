<?php
    if(!empty($_POST)){
        print_r($_POST['fullname']);
    }
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


<form name = "all" action="HomePage.php" method = "post">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Survey Creation</h3>
            <p class="blue-text">Enter information for your survey!<br> so that we can personalize the right experience for you.</p>
            <div class="card">
                <h5 class="text-center mb-4">Please fill the form</h5>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Survey Title<span class="text-danger"> *</span></label>
                            <input type="text" id="fname" name="fname" placeholder="Enter title for your survey">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="form-label" for="customFile">Default file input example</label>
                            <input type="file" class="form-control" id="customFile" />
                        </div>
                        <div class="form-group">
                            <label for="comment">Description</label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    One possible answer survey (Including answer with additional text information)
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    One or more possible answers survey (Including answer with additional text information)
  </label>
</div>


                    <br>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</form>

</body>
</html>
<?php
    if(!empty($_POST)){
        print_r($_POST['fullname']);
    }
?>