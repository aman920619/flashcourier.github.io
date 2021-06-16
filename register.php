<?php

  session_start();
  include 'connection.php';

  if($_POST){
    $ctr_name=$_POST['ctr_name'];
    $ctr_username=$_POST['ctr_username'];
    $ctr_email=$_POST['ctr_email'];
    $ctr_number=$_POST['ctr_number'];
    $ctr_password=$_POST['ctr_password'];

    $reg=mysqli_query($con,"insert into tbl_customer(ctr_name,ctr_username,ctr_email,ctr_password,ctr_number) values('{$ctr_name}','{$ctr_username}','{$ctr_email}','{$ctr_password}','{$ctr_number}')" ) or die(my_sql_query($con));

    if($reg){
        echo "<script>alert('Successfully Registered');window.location.href ='login.php'</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Registration Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<style>
body {
  background-image: url('https://www.parcelandpostaltechnologyinternational.com/wp-content/uploads/2020/09/homedeliverycovid19-e1600681441589.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<body class="hold-transition dark-mode register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index2.html"><b><span style="font-family: 'Bebas Neue';font-size:50px;color:#FF5500";>FLASH</b></a><span style="font-family: 'Bebas Neue';font-size:44px;color:#474747";</b> COURIER</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><span style="color:#7fffd4"> Register as new Member</p>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="ctr_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="User Name" name="ctr_username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="ctr_email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Mobile Number" name="ctr_number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="ctr_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to <a href="t&c.php">T&C</a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-info btn-block">Register</button>
          </div>
        </div>
      </form>

     

      <a href="login.html" class="text-center">Sign In</a>
    </div>
  </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
