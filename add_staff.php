<?php
  session_start();
  include 'connection.php';

  if($_POST){
    $stf_name=$_POST['stf_name'];
    $stf_email=$_POST['stf_email'];
    $stf_gender=$_POST['stf_gender'];
    $stf_number=$_POST['stf_number'];

    $staf=mysqli_query($con,"insert into staff(stf_name,stf_email,stf_gender,stf_number) values('{$stf_name}','{$stf_email}','{$stf_gender}','{$stf_number}')") or die(mysqli_error($con));

    if($staf){
       echo "<script>alert('Staff Added');window.location.href='add_staff.php'</script>"; 
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Add Staff</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini">
<div class="wrapper">
  <?php
    include './themepart/topmenu.php';
  ?>
  <?php
    include './themepart/sidebar.php';
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
             <h1><b>ADD STAFF</b></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Staff</h3>
              </div>
              <form method="post">
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="stf_name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="stf_email">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>

                    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" value="Male" name="stf_gender">
                          <label for="customRadio1" class="custom-control-label">Male</label>
                        </div>
                        <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="stf_gender">
                          <label for="customRadio2" class="custom-control-label">Female</label>
                        </div>
                  </div>
                 
                  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Number" name="stf_number">
                  </div>
                    </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6">
          </div>
        </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>COURIER MANAGEMENT SYSTEM</b> 
    </div>
    <strong>Project &copy;2021 <a>Flash Courier</a>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
