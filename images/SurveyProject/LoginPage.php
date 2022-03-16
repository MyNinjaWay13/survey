



<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="LoginPage.css"> 
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
  <h1>Survey Project</h1>
  <form action="Login.php" method="POST">

    <div class="container">
      <h2>Log in page</h2>
      <p>Please fill in this form log in into your account.</p>
      <hr>


      <form action="LoginPage.php" method="POST">

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="psw" required>
        <hr>
        <p>By logging in an account you agree to our <a href="#">Terms & Privacy</a>.</p>


        <input type="hidden" name="submit">


        <button type="submit" class="logbutton">Sign in</button>


    </div>


    <div class="container Register">
      <p>Don't have an account? <a href="RegisterPage.php">Register here</a>.</p>
    </div>
  </form>
  
</body>


</html>