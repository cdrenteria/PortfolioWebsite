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
<style>
  body {background-color: #274156}
</style>
<body>
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
                      <a class="nav-link" href="index.html#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html#about">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html#gallery" >Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact.php" >Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </header>

  
    <!-- Contact Form -->

    <div class="contactForm" id="contact">
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