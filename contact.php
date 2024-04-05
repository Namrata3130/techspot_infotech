<?php
  session_start();

  if($_SERVER['REQUEST_METHOD'] == "POST"){
  $name= $_POST["name"];
  $visitor_email=$_POST["email"]; 
  $subject=$_POST["subject"];
  $message=$_POST["message"];

  $emil_from='namratajounjal@gmail.com';

  $email_subject='User Query Form';

  $email_body="User name: $name.\n".
              "User email: $visitor_email\n".
              "Subject: $Subject".
              "Message:$message";

$to='namratajounjal22@gmail.com';

$headers ="From: $email_from\r\n";
$headers="Reply-To:$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.php");
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
          <h1>Contact Us</h1>
    </div>
  </div>
    

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.551293444386!2d74.59578667381547!3d16.848601818105557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc12283fa9e2a83%3A0xa73572d4b6fea312!2sTECHSPOT%20INFOTECH%20%26%20PRAYASH%20ASSETS!5e0!3m2!1sen!2sin!4v1709476368541!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
    
<section class="Contact-us">
    <div class="contact">
        <div class="contact-col">
            <div>
                <i class="fa fa-user"></i>
                <span>
                    <h5>CEO</h5>
                    <p>Mr.Avinash Sakat</p>
                </span> 
                <i class="fa fa-home"></i>
                <span>
                    <h5>Opp. to Mount Sinai English School,Vishrambag</h5>
                    <p>Sangli,Maharashtra</p>
                </span> 
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+91 70384 15652</h5>
                    <p>Monday to Saturday,10AM to 6PM</p>
                </span> 
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>techspotinfotech@gmail.com</h5>
                    <p>For enquiry,Email us</p>
                </span> 
            </div>
        </div>
        <div class="contact-col">
            <form action="contact.php" method="post">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter your email address" required>
                <input type="text" name="suject" placeholder="Enter your subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="btn btn-success">Send Message</button>
            </form>
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