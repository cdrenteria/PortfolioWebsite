<!DOCTYPE html>
<html>

<head>
    <title>Chandler Renteria Full Stack Web Dev</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheet.css"  type="text/css">
</head>
<body>
    <div class="bg"> <!-- Compressed Image -->
        <header>
            <!-- Navigation Bar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index_test.html">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Gallery.html" >Gallery</a>
                    </li>
                  </ul>
                </div>
              </nav>
              <div class="welcomeText">
                  <h2 class="welcomeMessage">Hello, I am <span class="name">Chandler Renteria</span>. <br> Full-Stack Web Developer</h2>
                <button type="button" class="btn btn-outline-light">See My work</button>
              </div>
        </header>
    </div>
    <!-- About Section Start-->
    <div id="about">
        <h2 class="aboutTitle">About</h2>
        <p class="about_description">I am currently self empoyed at Cleanbnb, where we run turnover operations for clients in two states and five cities. </p>
        <div class="container-fluid">
            <div class="row row-cols-3">
                <div>
                    <h1 class="col"><span class="badge badge-pill badge-dark">HTML5</span></h1>
                    <p>As junior developer I have a solid understanding of HTML, how it works, and how to get it to do what is needed.</p>
                </div>
                <div>
                    <h1 class="col"><span class="badge badge-pill badge-dark">CSS3</span></h1>
                    <p>CSS is a style language that has so much to offer. While I have a firm grasp on CSS and and it’s most commonly used selectors and properties</p>
                </div>
                <div>
                    <h1 class="col"><span class="badge badge-pill badge-dark">Javascript</span></h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo tempore magni eius veniam cumearum amet officia!</p>
                </div>
                <div>
                    <h1 class="col"><span class="badge badge-pill badge-dark">PHP & MySQL</span></h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo tempore magni eius veniam cumearum amet officia!</p>
                </div>
                <div>
                    <h1 class="col"><span class="badge badge-pill badge-dark">Photoshop</span></h1>
                    <p>Photoshop opens the world of web design to new opportunities.</p>
                </div>
                <div>
                    <h1 class="col"><span class="badge badge-pill badge-dark">Jquery</span></h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo tempore magni eius veniam cumearum amet officia!</p>
            </div>
        </div>
        <a class="btn btn-dark" href="Resume.pdf" download="Chandler Renteria Resume" target="blank" role="button">Download my Resume!</a>
    </div>
    <!-- Portfolio Section Start -->
    <div id="portfolio">
        <h2 class="portfolioTitle">Portfolio</h2>
        <div class="myBtnContainer">
            <button type="button" id="html_css"class="filter_Select btn btn-outline-light" onclick="filterSelection('html_css')">HTML & CSS</button>
            <button type="button" id="python" class="filter_Select btn btn-outline-light" onclick="filterSelection('python')">Python</button>
            <button type="button" id="javascript" class="filter_Select btn btn-outline-light" onclick="filterSelection('javascript')">Javascript</button>
            <button type="button" id="php_mysql" class="filter_Select btn btn-outline-light" onclick="filterSelection('php_mysql')">PHP & MySQL</button>
            <button type="button" id="filterDiv" class="filter_Select btn btn-outline-light" onclick="filterSelection('filterDiv')">All</button>
        </div>
        <div class="container projects">
            <div class="card filterDiv html_css javascript php_mysql">
                <img class="card-img-top" src="Images/images/portfolioWebsite.PNG" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">Portfolio Website</h4>
                  <p class="card-text text-dark">Yes, the very site you are viewing.</p>
                  <a href="#" class="btn btn-dark project_link">See Project</a>
                </div>
            </div>
            <div class="card filterDiv html_css javascript php_mysql">
                <img class="card-img-top" src="Images/images/portfolioWebsite.PNG" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">Meditation App</h4>
                  <p class="card-text text-dark">Unsolved Homicide. 1995-2016</p>
                  <a href="#" class="btn btn-dark project_link">See Project</a>
                </div>
            </div>
            <div class="card filterDiv python">
                <img class="card-img-top" src="Images/images/portfolioWebsite.PNG" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">Internship Project</h4>
                  <p class="card-text text-dark">This is for the SLCC Internship.</p>
                  <a href="#" class="btn btn-dark project_link">See Project</a>
                </div>
            </div>
            <br>
            <div class="card filterDiv javascript">
                <img class="card-img-top" src="Images/images/portfolioWebsite.PNG" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">Pet Records</h4>
                  <p class="card-text text-dark">Store health records for your pet.</p>
                  <a href="#" class="btn btn-dark project_link">See Project</a>
                </div>
            </div>
            <div class="card filterDiv php_mysql">
                <img class="card-img-top" src="Images/images/portfolioWebsite.PNG" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">John Doe</h4>
                  <p class="card-text text-dark">Some example text.</p>
                  <a href="#" class="btn btn-dark project_link">See Project</a>
                </div>
            </div>
            <div class="card filterDiv javascript">
                <img class="card-img-top" src="Images/images/portfolioWebsite.PNG" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">John Doe</h4>
                  <p class="card-text text-dark">Some example text.</p>
                  <a href="#" class="btn btn-dark project_link">See Project</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Images/lightbulb_finished.jpg" class="d-block w-100" alt="..."> <!-- Compressed Image -->
          </div>
          <div class="carousel-item">
            <img src="Images/road_swimmer_finished.jpg" class="d-block w-100" alt="..."> <!-- Compressed Image -->
          </div>
          <div class="carousel-item">
            <img src="Images/stylized_mountain.jpg" class="d-block w-100" alt="..."> <!-- Compressed Image -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Contact Form -->
      
      <div class="form" id="contactForm" >
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstname">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName">
              </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="Valid Email Address">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="comapny">Comapny</label>
                <input type="text" class="form-control" id="company">
            </div>
            <div class="radioButtons">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Web Design
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Web Development
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                <label class="form-check-label" for="exampleRadios3">
                  Full Stack Development
                </label>
              </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <?php 
            $firstname = $lastname = $email = $company = "";
            $nameErr = $emailErr = $companyErr = "Required Field"
            if ($_SERVER["REQUEST_METHOD" == "POST"]) {
              if (empty($_POST["firstname"])) {
                $nameErr = "Name is required";
                } else {
                $name = testInput($_POST["firstname"]);
                }

              if ($_SERVER["REQUEST_METHOD" == "POST"]) {
                if ($_POST["lastname"]) {
                  $lastname = testInput($_POST["lastname"]);
                }
                
              if (empty($_POST["email"])) {
              $emailErr = "Email is required";
              } else {
              $email = testInput($_POST["email"]);
              }
                
              if (empty($_POST["company"])) {
              $website = "";
              } else {
              $website = testInput($_POST["company"]);
              }
            }
            function testInput($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
            $to = ($email);
            $emailSub = "Confirmation Email";
            $emailBody = "Thank you for you submission on chandlerrenteria.com";
            mail($to, $emailSub, $emailBody);
            echo "Thank you, an email has been sent confirming your submission."

          
          ?>
      </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>

</html>