<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="About.css" rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
<?php
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false){
    echo'
    <div class="nav-container">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a href="index.php"><img id="logo" src="logo.jpeg"></a>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link  mx-lg-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mx-lg-2" href="About us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-lg-2" href="services.php">Services</a>
                </li>
              </ul>
            </div>
          </div>
            <a class="nav-link mx-lg-4" href="login.php">Login</a>
            <a href="Register.php" class="login-button  mx-sm-2">Register Now</a>
            <button class="navbar-toggler  mx-sm-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
            </button>
        </div>
    </nav>  
    ';
  }
  else{
    require 'nav2.php';
  }
?>  

    <div class="title">
          <h1>ABOUT US</h1>
    </div>
  </div>



  <div class="info">
    <div class="Row">
      <div class="about">
        <h3>Who we are?</h3>
        <p ><b>"</b> Welcome to Techspot Infotech,your gateway to custom software solutions.
          We empowering students through diverse training courses across domains,offering hands-on internships on live
          projects.
          Join us on a journey of learning and practical experience, shaping the future of tech enthusiasts.<b>"</b>
        </p>
        <button class="btn btn-success">Join Us</button>
      </div>
   
      <div class="group">
          <img src="image2.jpg">
      </div>
    </div>
  </div>

  <div class="intro">
    <div class="Row">
      <div class="box">
        <img src="aboutus/company.jpg">
        <h4>Company Type</h4>
        <h5>Software Solutions IT Company</h5>
      </div>
      <div class="box">
        <img src="aboutus/founded.jpg">
        <h4>Founded in</h4>
        <h5>2018</h5>
      </div>
      <div class="box">
        <img src="aboutus/emp.jpg">
        <h4>Employees</h4>
        <h5>11-50</h5>
      </div>
    </div>
  </div>

  <div class="service">
    <h1>Our Services</h1>
    <div class="Row">
      <div class="pic">
        <img src="aboutus/About us.jpeg ">
    </div>
    <div class="content">
      <p >We provide customized software solutions to our clients.Also provides courses and industrial training with live projects to students in the following domain:
        <ul>
          <li>Artificial Inteligens</li>
          <li>Machine Learning</li>
          <li>Data Science</li>
          <li>Database Management and Integration</li>
          <li>Android App Development</li>
          <li>Building Restful APIs</li>
          <li>Front-End Development with HTML,CSS and JavaScript</li>
          <li>Backend Development with Python and Django</li>
        </ul>
      </p>
      <button class="read">Read More</button>
    </div>
    </div>
  </div>

    
   
  <section class="footer">
        <h4>Techspot Infotech| Copyright@2024| www.techspotinfotech.com</h4>
        <h6>Follows us on</h6>
        <div class="social">
            <i class="fa fa-facebook"></i> 
            <i class="fa fa-instagram"></i> 
            <i class="fa fa-linkedin"></i> 
        </div>
  </section>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
 

</body>
</html>