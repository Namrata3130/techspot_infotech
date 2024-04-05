<?php
  session_start();
  include 'dbconnection.php';
  $alert=false;
  if(isset($_POST['submit'])){
    $email=$_POST['Email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    if($pass==$cpass){
        $update="update register set password='$pass' where email='$email'";
        $result=mysqli_query($conn,$update);
        
        if($result){
          echo' <script type="text/javascript">alert("Your password is updated successfully.")</script>';
        }else{
          echo' <script type="text/javascript">alert("Somthing went wrong.Your password is not updated.")</script>';
        }
    }
    else{
      echo' <script type="text/javascript">alert("Passwords are not same.")</script>';
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
                <h2 class="h3">Change Password</h2>
            </div>
          </div>
          <form action="changepass.php" method="post">
            <div class="row gy-3 gy-md-4 overflow-hidden">
              <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="Email"  placeholder="name@example.com" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>" required>
              </div>
              <div class="col-12">
                <label for="password" class="form-label">New Password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="pass"   required>
              </div>
			        <div class="col-12">
                <label for="password" class="form-label">Confirm password <span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="cpass"   required>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" name="submit" type="submit">Submit</button>
                </div>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>