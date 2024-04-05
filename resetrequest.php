<?php
  session_start();
  include 'dbconnection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

function send_pass_resetlink($get_email,$get_fname,$get_lname){
  $mail = new PHPMailer(true);

  try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'namratajounjal22@gmail.com';                     //SMTP username
      $mail->Password   = 'ioxqlywwlndqfovn';                               //SMTP password
      $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
      //Recipients
      $mail->setFrom('namratajounjal22@gmail.com', $get_fname,$get_lname);
      $mail->addAddress($get_email);     //Add a recipient
      $mail->addReplyTo('namratajounjal22@gmail.com');
  
      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Reset password link';
      $sample_template="
      <h2>Hello $get_fname  $get_lname</h2>
      <h3>You are receiving this email because we received a password reset request for your account.</h3>
      <br></br>
      <a href='http://localhost/Techspot%20Infotech/changepass.php?email=$get_email&user=$get_fname'>Click me</a>
      ";
      $mail->Body    = $sample_template;
  
      $mail->send();
      echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
  
  if(isset($_POST['passwordreset'])){
    $email=$_POST['email'];
    $chech_email="select * from register where email='$email' LIMIT 1";
    $fetch=mysqli_query($conn,$chech_email);

    if(mysqli_num_rows($fetch)>0){
      $user_data=mysqli_fetch_assoc($fetch);
      $get_fname=$user_data['fname'];
      $get_lname=$user_data['lname'];
      $get_email=$user_data['email'];

      send_pass_resetlink($get_email,$get_fname,$get_lname);
      echo' <script type="text/javascript">alert("We emailed you password reset link.")</script>';
    }
    else{
      echo' <script type="text/javascript">alert("No found email.")</script>';
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!-- Password Reset 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
          <div class="row">
            <div class="col-12">
              <div class="mb-5">
                <h2 class="h3">Password Reset</h2>
                <h3 class="fs-6 fw-normal text-secondary m-0">Provide the email address associated with your account to recover your password.</h3>
              </div>
            </div>
          </div>
          <form action="resetrequest.php" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" name="passwordreset" type="submit">Reset Password</button>
                </div>
              </div>
            </div>
          </form>
          <div class="row">
            <div class="col-12">
              <hr class="mt-5 mb-4 border-secondary-subtle">
              <div class="d-flex gap-4 justify-content-end">
                <a href="login.php" class="link-secondary text-decoration-none">Login</a>
                <a href="Register.php" class="link-secondary text-decoration-none">Register</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>