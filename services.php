<?php
 session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false){
  header("location:login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="contact.css" rel="stylesheet">
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
          <h1>Our Services</h1>
    </div>
  </div>

  <section class="course">
    <h4>Unlock Your Coding Potential With Our Expert-Led Courses.Dive Into Programming Languages,Algorithms,And Web Developement.Build Your Skills,Craft Your Future </h4>
    <div class="Row">
        <div class="course-card">
            <img src="Courses/dataalgo.jpeg" alt="Portfolio" />
            <h4>Data Structure and Algorithm</h4>
            <p> Beginner Professional Certifiacte. 6 months </p>
            <a class="btn btn-dark  mt-auto">Enroll now</a>
        </div>
        <div class="course-card">
            <img src="Courses/fullstack.jpeg" alt="Portfolio" />
            <h4>Full Stack Web Development</h4>
            <p> Beginner Professional Certifiacte. 6 months </p>
            <a class="btn btn-dark  mt-auto ">Enroll now</a>
        </div>
        <div class="course-card">
            <img src="Courses/Python.jpeg" alt="Portfolio" />
            <h4>Python Crash Course</h4>
            <p> Beginner Professional Certifiacte. 3 months </p>
            <a class="btn btn-dark mt-auto ">Enroll now</a>
        </div>
    </div>
    <div class="Row">
        <div class="course-card">
            <img src="Courses/data.jpeg" alt="Portfolio" />
            <h4>Data Science</h4>
            <p> Beginner Professional Certifiacte. 6 months </p>
            <a class="btn btn-dark  mt-auto">Enroll now</a>
        </div>
        <div class="course-card">
            <img src="Courses/Java.jpeg" alt="Portfolio" />
            <h4>Java Course</h4>
            <p> Beginner Professional Certifiacte. 6 months </p>
            <a class="btn btn-dark  mt-auto ">Enroll now</a>
        </div>
        <div class="course-card">
            <img src="Courses/React.jpeg" alt="Portfolio" />
            <h4>React framework</h4>
            <p> Beginner Professional Certifiacte. 3 months </p>
            <a class="btn btn-dark mt-auto " onclick="service.php">Enroll now</a>
        </div>
    </div>
    <div class="Row">
        <div class="course-card">
            <img src="Courses/SQL.jpeg" alt="Portfolio" />
            <h4>SQL</h4>
            <p> Beginner Professional Certifiacte. 3 months </p>
            <a class="btn btn-dark  mt-auto">Enroll now</a>
        </div>
        <div class="course-card">
            <img src="Courses/webdesign.jpeg" alt="Portfolio" />
            <h4>Website Design</h4>
            <p> Beginner Professional Certifiacte. 3 months </p>
            <a class="btn btn-dark  mt-auto ">Enroll now</a>
        </div>
        <div class="course-card">
            <img src="Courses/Django.jpeg" alt="Portfolio" />
            <h4>Django framework</h4>
            <p> Beginner Professional Certifiacte. 3 months </p>
            <a class="btn btn-dark mt-auto ">Enroll now</a>
        </div>
    </div>
    
    
</section> 
    


    
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