
<html>
    <head>
        <link rel="stylesheet" href="HomePage.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
      
        <div class="container">
            <header>
                <div class="topnav" id="myTopnav">
                    <div class = "logobutton" id = "LogoBtn">
                    <input type="image" src="images/logo3.png" style="border: double;" height="80" width="170" href = HomePage.php />
                    </div>
                    
                    <div class="navigations">
                        <a href ="MyAccount.php">My Account</a>
                        <a href="LoginPage.php">Login</a>
                        <a href=>Create Survey</a>
                        <a href="RegisterPage.php">Register Here</a>
                    </div>
                    <div class="search" id = "Search">
                    <input type="text" placeholder="Search..">
                    </div>
                </div>
            </header>
            <br>
            <h1>Recent Surveys</h1>
            <div class="row">
                <div class="leftcolumn">
                    <div class="card">
                        <div class = "RecSurveys" id="recSurveys" >
                        
                            </div>
                            
                        <h5>Amsterdam, Dec 7, 2022</h5>
                        <!-- <div type = "image"  class="fakeimg"  style="height:200px;" > </div>> -->
                        <img src= "images/Amsterdam.jpg"
                        width="500" 
                        height="300">
                        <div class="row col-5">
                            <h4 class="fw-bold text-center mt-3"></h4>
                            <form class=" bg-white px-4" action="">
                              <p class="fw-bold">Hey guys! What do You think about my plan to go to Amsterdam on this Weekend?</p>
                              <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="fullname" id="radioExample1" />
                                <label class="form-check-label" for="radioExample1">
                                  Yes
                                </label>
                              </div>
                              <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" />
                                <label class="form-check-label" for="radioExample2">
                                  No
                                </label>
                              </div>
                              <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample3" />
                                <label class="form-check-label" for="radioExample3">
                                  Yes or No (More detailed answer)
                                  <textarea name="paragraph_text" cols="50" rows="5"></textarea>

                                  
                                </label>
                                
                              </div>
                            </form>
                            <div class="text-end">
                              <button type="button" class="btn btn-primary">Submit</button>
                            
                            </div>
                          </div>
                          <br>
                          <h5>Hiring, Dec 7, 2022</h5>
                        <!-- <div type = "image"  class="fakeimg"  style="height:200px;" > </div>> -->
                        <img src= "images/unreal.jpg"
                        width="500" 
                        height="300">
                        <div class="row col-5">
                            <h4 class="fw-bold text-center mt-3"></h4>
                            <form class=" bg-white px-4" action="">
                              <p class="fw-bold">Looking for a developer with rich background in game-dev and high-level experience in level-design. Preferable programming languages : C#, Engines: UnreaLEngine4, Unity</p>
                              <div class="form-check mb-2 orxanSirab">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" />
                                <label class="form-check-label" for="radioExample1">
                                  + (Tell me about your skills shortly)
                                </label>
                                <textarea name="paragraph_text" cols="50" rows="5"></textarea>

                              </div>
                              <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" />
                                <label class="form-check-label" for="radioExample2">
                                  -
                                </label>
                              </div>
                              
                            </form>
                            <div class="text-end">
                              <button type="button" class="btn btn-primary">Submit</button>
                    
                            </div>
                            
                            
                          </div>
                          
                    </div>
                    </div>
                    <div class="row">
                <div class="leftcolumn">
                    <div class="card">
                        <div class = "RecSurveys" id="recSurveys" >
                        
                            </div>
                            
                        <h5>New phone purchase, Dec 7, 2022</h5>
                        <!-- <div type = "image"  class="fakeimg"  style="height:200px;" > </div>> -->
                        <img src= "images/android.jpg"
                        width="500" 
                        height="300">
                        <div class="row col-5">
  <h4 class="fw-bold text-center mt-3"></h4>
  <form class="px-4" action="">
    <p class="fw-bold">Please mark all the features that you consider the most relevant and important for buying smartphone under 400 $</p>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
      <label class="form-check-label" for="flexCheckDefault">
        The Screen quality(Resolution, Type, Supported technologies)

      </label>
    </div>

    <!-- Checked checkbox -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
      <label class="form-check-label" for="flexCheckDefault2">
        Camera functions (Type of matrix, the zoom feature, night cam)
      </label>
    </div>

    <!-- Checked checkbox -->
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
      <label class="form-check-label" for="flexCheckDefault3">
        The Performance(Amount of RAM, The brand of Processor, amount of cores, the GHz rate)
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
      <label class="form-check-label" for="flexCheckDefault3">
        Longtime OS support
      </label>
</div>
      <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
      <label class="form-check-label" for="flexCheckDefault3">
        The brand
      </label>
      <br>

  </form>
  <div class="card-footer text-end">
    <button type="button" class="btn btn-primary">Submit</button>
  </div>
  
</div>
                        
                          </div>
                          <div class="mx-0 mx-sm-auto">
  <div class="card">
    <div class="card-header bg-primary">
      <h5 class="card-title text-white mt-2" id="exampleModalLabel">Feedback request</h5>
    </div>
    <div class="modal-body">
      <div class="text-center">
        <i class="far fa-file-alt fa-4x mb-3 text-primary"></i>
        <p>
          <strong>Your opinion matters</strong>
        </p>
        <p>
          Have some ideas how to improve our product?
          <strong>Give us your feedback.</strong>
        </p>
      </div>

      <hr />

      <form class="px-4" action="">
        <p class="text-center"><strong>Your rating:</strong></p>

        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example1" />
          <label class="form-check-label" for="radio3Example1">
            Very good
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example2" />
          <label class="form-check-label" for="radio3Example2">
            Good
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example3" />
          <label class="form-check-label" for="radio3Example3">
            Medicore
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example4" />
          <label class="form-check-label" for="radio3Example4">
            Bad
          </label>
        </div>
        <div class="form-check mb-2">
          <input class="form-check-input" type="radio" name="exampleForm" id="radio3Example5" />
          <label class="form-check-label" for="radio3Example5">
            Very bad
          </label>
        </div>

        <p class="text-center"><strong>What could we improve?</strong></p>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="form4Example3" rows="4"></textarea>
          <label class="form-label" for="form4Example3">Your feedback</label>
        </div>
      </form>
    </div>
    <div class="card-footer text-end">
      <button type="button" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>

                    
        </div> 
    </body>
    
    </html>
  

   