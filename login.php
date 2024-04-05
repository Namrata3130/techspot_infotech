<?php
   session_start();
   $_SESSION['loggedin']=false;
  include 'dbconnection.php';

  $showerror=false;
  if($_SERVER['REQUEST_METHOD'] == "POST"){

  $L_email= $_POST["lemail"];
  $L_pass= $_POST["lpass"];
  
  $query="select * from register where email='$L_email' and password='$L_pass'";
  $result=mysqli_query($conn,$query);
  $num=mysqli_num_rows($result);
  $user_data=mysqli_fetch_assoc($result);
  if($num >0){
    $login=true;
    $_SESSION['loggedin']=true;
    $_SESSION['Username']=$user_data['fname'];
    header("location:index.php");
  }
  else{
    $showerror=true;
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
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="login.css" rel="stylesheet">
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
    <div class="title">Login</div>
    <?php
    if($showerror){
     echo'<div>
             <h5> Invalid credentials.</h5>
          </di>';
    }
    ?>
    <form action="login.php" method="POST">
        <div class="user-details">

            <div class="input-box">
                <span class="details">Email</span>
                <input name="lemail" type="email" placeholder="User ID" required>
            </div>

            <div class="input-box">
                <span class="details">Password</span>
                <input name="lpass" type="password" placeholder="Password" required>
            </div>
            <h6><a href="resetrequest.php" class="link-secondary text-decoration-none">Forgot Password?</a></h6>
            <div class="button">
                <input  type="submit" value="Login">
            </div>
            <h6>Don't have an account?  <a href="changepass.php" class="link-secondary text-decoration-none">Register</a></h6>
    </form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>