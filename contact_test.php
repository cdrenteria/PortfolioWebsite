<!DOCTYPE html>
<html>

<head>
    <title>Chandler Renteria Full Stack Web Dev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X5JVGLF7JN"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-X5JVGLF7JN');
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheet.css"  type="text/css">
    <script src="https://kit.fontawesome.com/46da648e7e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="bg"> <!-- Compressed Image -->
        <header>
            <!-- Navigation Bar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-custom">
                <a class="navbar-brand" href="index.html"><i class="fas fa-laptop-code fa-2x"></i></a>
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
                      <a class="nav-link" href="#gallery" >Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contactForm" >Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
              <div class="welcomeText">
                  <h2 class="welcomeMessage">Hello, I am <span class="name">Chandler Renteria</span>. <br> Full-Stack Web Developer</h2>
                <button type="button" class="btn btn-outline-light"><a href="#portfolio" style="color: #FBFCFF;">See My Work  <i class="fas fa-arrow-alt-circle-down" style="color: #FBFCFF;"></i></a></button>
              </div>
        </header>
    </div>
    <!-- About Section Start-->
    <div id="about">
        <h2 class="sectionTitle">About</h2>
        <p class="about_description">I first found coding when my brother introduced me to python in 2019. Something about the logic of it all clicked with me, if you want a certain output there are exact steps you take to get there. From then until April of 2020 I taught myself python while owning and operating my business full time. </p>
        <p class="about_description">When Covid-19 caused worldwide lockdowns in April my business took a big hit, losing about 80% of total revenue in a month. It was then that I decided to take that hobby I enjoyed so much and take it seriously. I immediately enrolled in Salt Lake Community College studying web development and design. With my background in python and teaching myself coding concepts I was able to excel in everything from HTML to PHP and MySQL.</p>
        <p class="about_description" id="lastParagraph">Now, I am looking for a full time opportunity to code professionally.  My goal is work on a team that values self-improvement and teamwork. From my first jobs to owning my own business I always embraced a policy of mutual success. Meaning I understand that hiring a junior developer is an investment, and to stay in business you need a return on that investment- I feel confident I can provide that return if given the tools to succeed.</p>
        <h2 class="sectionTitle">Skills</h2>
        <div class="container">
            <div class="row  justify-content-md-center">
                <div class="skillCard col-xs-12">
                    <i class="fab fa-html5 fa-6x"></i>
                    <h4 class=""><span class="skillTitle">HTML5</span></h4>
                    <p>As junior developer I have a solid understanding of HTML, how it works, and how to get it to do what is needed.</p>
                </div>
                <div class="skillCard col-xs-12">
                    <i class="fab fa-css3-alt fa-6x"></i>
                    <h4 class=" "><span class="skillTitle">CSS3</span></h4>
                    <p>CSS is a style language that has so much to offer. While I have a firm grasp on CSS and and it's most commonly used selectors and properties</p>
                </div>
                <div class="skillCard col-xs-12">
                    <i class="fab fa-js-square fa-6x"></i>
                    <h4 class=" "><span class="skillTitle">Javascript</span></h4>
                    <p>Javascript and its frameworks provide a source of constant interest to me. I hope to become an expert at it.</p>
                </div>
                <div class="skillCard col-xs-12">
                    <i class="fab fa-php fa-6x"></i>
                    <h4 class=""><span class="skillTitle">PHP & MySQL</span></h4>
                    <p>Name a more iconic duo than PHP and MySQL. While I incorporate PHP in most sites I have built MySQL has been used less often.</p>
                </div>
                <div class="skillCard col-xs-12">
                    <i class="fab fa-bootstrap fa-6x"></i>
                    <h4 class=""><span class="skillTitle">Bootstrap</span></h4>
                    <p>Bootstrap and other CSS frameworks provide so much power in such a little package. I am eager to explore them more.</p>
                </div>
                <div class="skillCard col-xs-12">
                    <i class="fab fa-python fa-6x"></i>
                    <h4 class=""><span class="skillTitle">Python</span></h4>
                    <p>My first programming language and the one that made me fall in love with programming. Python provides so many opportunities, some I have taken advantage of are below.</p>
                </div>
            </div>
          </div>

        <a class="btn btn-info bg-custom" href="Resume.pdf" download="Chandler Renteria Resume" target="blank" role="button">Download my Resume!</a>
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
                <img class="card-img-top" src="Images/portfolio-site-thumbnail.png" alt="Project Thumbnail">
                <div class="card-body">
                  <h4 class="card-title text-dark">Portfolio Website</h4>
                  <p class="card-text text-dark">Yes, the very site you are viewing. <br></p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">HTML & CSS</li>
                    <li class="list-group-item">Javascript</li>
                    <li class="list-group-item">PHP</li>
                  </ul>
                  <!--<a href="#" class="btn btn-success border-0 project_link bg-custom">See Project</a>-->
                  <a  target="_blank" href="https://github.com/cdrenteria/PortfolioWebsite" class="btn btn-success border-0 project_link bg-custom">See Code</a>
                </div>
            </div>
            <div class="card filterDiv html_css javascript php_mysql">
                <img class="card-img-top" src="Images/cleanbnb-site-thumbnail.png" alt="Project Thumbnail">
                <div class="card-body">
                  <h4 class="card-title text-dark">Cleanbnb Website</h4>
                  <p class="card-text text-dark">Get info, make requests, and more. <br></p>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">HTML & CSS</li>
                    <li class="list-group-item">Javascript</li>
                    <li class="list-group-item">PHP & MySQL</li>
                  </ul>
                  <!--<a href="#" class="btn btn-success border-0 project_link bg-custom">See Project</a>-->
                  <a  target="_blank" href="https://github.com/cdrenteria/Cleanbnb" class="btn btn-success border-0 project_link bg-custom">See Code</a>
                </div>          
            </div>
            <div class="card filterDiv javascript">
              <img class="card-img-top" src="Images/blackjack-thumbnail.jpg" alt="Project Thumbnail">
              <div class="card-body">
                <h4 class="card-title text-dark">Javascript Componets</h4>
                <p class="card-text text-dark">Componets from projects.</p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Card Carousel</li>
                  <li class="list-group-item">Display Filter</li>
                  <li class="list-group-item">Vanilla js</li>
                </ul>
                <!--<a href="#" class="btn btn-success border-0 project_link bg-custom">See Project</a>-->
                <a  target="_blank" href="https://github.com/cdrenteria/JavascriptComponents" class="btn btn-success border-0 project_link bg-custom">See Code</a>
              </div>          
          </div>
            <!-- Unstarted Projects
              <div class="card filterDiv html_css javascript php_mysql">
                <img class="card-img-top" src="Images/images/portfolioWebsite.png" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">Internship Project</h4>
                  <p class="card-text text-dark">This is for the SLCC Internship. <br></p>
                  <a href="#" class="btn btn-success border-0 project_link bg-custom">See Project</a>
                  <a href="#" class="btn btn-success border-0 project_link bg-custom">See Code</a>
                </div>
            </div>
            <div class="card filterDiv html_css javascript">
                <img class="card-img-top" src="Images/images/portfolioWebsite.png" alt="Project Placeholder">
                <div class="card-body">
                  <h4 class="card-title text-dark">Booking App</h4>
                  <p class="card-text text-dark">Book your stay with these websites. <br></p>
                  <a href="#" class="btn btn-success border-0 project_link bg-custom">See Project</a>
                  <a href="#" class="btn btn-success border-0 project_link bg-custom">See Code</a>
                </div>
            </div> --->
            <div class="card filterDiv python">
              <img class="card-img-top" src="Images/blackjack-thumbnail.jpg" alt="Project Thumbnail">
              <div class="card-body">
                <h4 class="card-title text-dark">Console Blackjack</h4>
                <p class="card-text text-dark">A simple game of blackjack played in your console. <br></p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Python</li>
                  <li class="list-group-item">OOP Concepts</li>
                  <li class="list-group-item">Windows Console</li>
                </ul>
               <!-- <a href="#" class="btn btn-success border-0 project_link bg-custom">See Project</a>-->
                <a target="_blank" href="https://github.com/cdrenteria/blackjack" class="btn btn-success border-0 project_link bg-custom">See Code</a>
              </div>
          </div>
            
        </div>
    </div>
    <!-- Image Carousel -->
    <div id="gallery">
      <div id="carouselControls" class="carousel slide" data-ride="carousel">
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
        <a class="carousel-control-prev" href="#carouselControls" id="carouselControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" id="carouselControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- Contact Form -->

    <div class="contactForm">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-xs-12 contactMethod">
            <h2>Contact Info</h2>
            <h4>702-606-5106</h4>
            <p>*preferred method</p>
            <h4>chandler.renteria@gmail.com</h4>
            <h4> <a href="github.com/crenteria">github.com/crenteria</a></h4>
          </div>
          <div class="col-xs-12 contactMethod">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control" name="firstname">
              </div>
              <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control" name="lastName">
                </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">I will never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                  <label for="comapny">Comapny</label>
                  <input type="text" class="form-control" name="company">
              </div>
              <button type="submit" class="btn btn-primary formSubmit">Submit</button>
            </form>
        </div>
        </div>
      </div>
    </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>

</html>
<?php
    $firstname = $lastname = $email = $company = "";

    $firstname =$_POST["firstname"];
    $lastname =$_POST["lastName"];
    $email =$_POST["email"];
    $company =$_POST["company"];

    $to = ("chandler.renteria@gmail.com");
    $subject = ("New Employment Submission!");
    $body = ("$firstname $lastname from $company is interested in speaking with you. Email: $email.");
    mail($to, $subject, $body);

?>