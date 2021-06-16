
<?php
  session_Start();
  include 'connection.php';

  if(isset($_SESSION['id'])){
    header('Location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  



  <title>Flash Courier | Log in</title>
  <meta name="google-signin-client_id" content="914217771610-m8l03924bn8n7r2lc4dupm68ommh6hgh.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
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
<body class="hold-transition dark-mode login-page">
<div class="login-box">
  <div class="login-logo">
      <a href="index2.html"><b><span style="font-family: 'Bebas Neue';font-size:50px;color:#FF5500";>FLASH</b></a><span style="font-family: 'Bebas Neue';font-size:44px;color:#474747";</b> COURIER</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <form action="validate.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="adm_username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="adm_password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-info">Sign In</button>
          </div>
        </div>
      </form>

 

      
     
      <p class="mb-0">
        <a href="register.php" class="text-center">Sign Up</a>
      </p>
    </div>
  </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
