<?php
  session_start();
  include 'connection.php';

  if($_POST){
    $street=$_POST['street'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $zip_code=$_POST['zip_code'];
    $country=$_POST['country'];
    $contact=$_POST['contact'];

    $bran=mysqli_query($con,"insert into tbl_branch(street,state,city,zip_code,country,contact) values('{$street}','{$state}','{$city}','{$zip_code}','{$country}','{$contact}')") or die(mysqli_error($con));

   if($bran){
      echo "<script>alert('Branch Added');window.location.herf='add_branch.php'</script>";
   } 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Add Branch</title>
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
              <h1><b>ADD BRANCH</b></h1>
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
                <h3 class="card-title">New Branch</h3>
              </div>
              
              <form method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputstreet">Street/Building</label>
                    <input type="street" class="form-control" id="exampleInputstreet" placeholder="Street/Building" name="street">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputstate">State</label>
                    <input type="state" class="form-control" id="exampleInputstate" placeholder="State" name="state">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputcity">City</label>
                    <input type="city" class="form-control" id="exampleInputcity" placeholder="City" name="city">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputzipcode">Zip Code/Postal Code</label>
                    <input type="zipcode" class="form-control" id="exampleInputEmail1" placeholder="Zip Code" name="zip_code">
                  </div>
                     <div class="form-group">
                    <label for="exampleInputcountry">Country</label>
                    <input type="country" class="form-control" id="exampleInputcountry" placeholder="Country" name="country">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputcontact">Contact</label>
                    <input type="contact" class="form-control" id="exampleInputcontact" placeholder="Contact no." name="contact">
                  </div>
   
                </div>
               

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
     </div>
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
