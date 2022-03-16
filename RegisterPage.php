<?php 
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="RegisterPage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php
        include("navigation.php");
        ?>
        <br>
  <h1>Survey Project</h1>
    <div class="container">
        <h2>Register</h2>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <form id="registrationForm" action="Registration.php" method="POST">
            <ul>
            <label for="email"><b>Email</b></label>
            <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email"  required/>
            <br>
            <hr>
            <label for="phone number"><b>Phone</b></label>
            <input class="phone" type="number"  placeholder="Enter Phone number" name="phone" id="phone" pattern="[0-9]{0-9}-[0-9]{3}-[0-9]{4}" required>
            <br>
            <hr>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required/>
            <br>
            <hr>

            <label for="fullname"><b>Fullname</b></label>
            <input type="text" placeholder="Enter Fullname" name="fullname" id="fullname" required/>
            <br>
            <hr>



            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="psw" required/>
            <br>
            <hr>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required/>

            <hr>
            </ul>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" style="width: 200px;" class="btn btn-primary">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="LoginPage.php">Sign in</a>.</p>
    </div>
    </form>
    <script src="assets/reg.js"></script>
</body>
</html>