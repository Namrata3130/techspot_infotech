<?php
  session_start();
  include 'dbconnection.php';
  $showalert=false;
  if($_SERVER['REQUEST_METHOD'] == "POST"){
  $R_fname= $_POST["rfname"];
  $R_lname= $_POST["rlname"];
  $R_email= $_POST["remail"];
  $R_phone= $_POST["rphone"];
  $R_pass= $_POST["rpass"];
  $R_cpass= $_POST["rcpass"];

  $query="select * from register where email='$R_email'";
  $run=mysqli_query($conn,$query);
  $exists=mysqli_num_rows($run);

 
  if(($R_pass==$R_cpass) ){

    if($exists > 0){
      echo' <script type="text/javascript">alert("Email already exist.Please try to register with different email id")</script>';
    }
    else{
      $sql="INSERT INTO register ( `fname`, `lname`, `email`, `phone`, `password`, `date`) 
      VALUES ('$R_fname', '$R_lname', '$R_email', '$R_phone', '$R_pass', current_timestamp())";
      
      $result = mysqli_query($conn, $sql);
      if($result){
         echo' <script type="text/javascript">alert("Successfully Register.")</script>';
      }
      else{
       echo' <script type="text/javascript">alert("Please enter valid information.")</script>';
      }
    }
  }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="register.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
<?php  
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false){
    echo'
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a href="index.php"><img src="logo.jpeg"></a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active mx-lg-2" aria-current="page" href="index.php">Home</a>
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
          <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </nav> 
    ';
  }
  else{
    require 'nav.php';
  }
?>  

<div class="container">

  <div class="title">Registration</div>
  <div class="content">
    <form action="Register.php" method="POST">
      <div class="user-details">
        <div class="input-box">
          <span class="details">First Name</span>
          <input name="rfname" type="text" placeholder="Enter your first name" required>
        </div>
        <div class="input-box">
          <span class="details">Last name</span>
          <input name="rlname" type="text" placeholder="Enter your last name" required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input name="remail" type="email" placeholder="Enter your email" required>
        </div>
        <div class="input-box">
          <span class="details">Phone Number</span>
          <input name="rphone" type="phone" placeholder="Enter your number" required>
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input name="rpass" type="password" placeholder="Enter your password " required>
        </div>
        <div class="input-box">
          <span class="details">Confirm Password</span>
          <input name="rcpass" type="password" placeholder="Confirm your password" required>
        </div>
      </div>

      <div class="button">
        <input type="submit" value="Register">
      </div>
      <h6>Already have account?  <a href="login.php" class="link-secondary text-decoration-none">Login</a></h6>
    </form>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>

