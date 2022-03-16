<head>
<link rel="stylesheet" href="nav.css">

</head>
<nav name= "navbar" class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="HomePage.php">
      <img src="images/homelogo.png" alt="..." height="36">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <?php
            // if(isset($_SESSION['user_id']) && $_SESSION['user_id']){echo  "Welcome $_SESSION[username] | <a href='logout.php'>Logout</a>";
            // }
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CreateSurvey.php">Create survey</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="RegisterPage.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="MyAccount.php">MyAccount</a>
        </li>
        
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="LoginPage.php">
              <?php if(isset($_SESSION['user_id'])){
          echo "<a href='logout.php'>Logout</a>";
                }
                else{
                  "<a href='LoginPage.php'>Login</a>";
                }
            ?>
            </a></li>
            <li><a class="dropdown-item" href="UserCreatedSurveys.php">
              <?php if(isset($_SESSION['user_id'])){
          echo "<a href='UserCreatedSurveys.php'>Edit my surveys</a>";
                }
                else{
                  "<a href='LoginPage.php'>Login</a>";
                }
            ?>
            
            </a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>