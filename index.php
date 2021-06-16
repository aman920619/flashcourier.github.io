<?php
  include 'connection.php';
  session_start();
  
  
  if(!isset($_SESSION['id'])||(trim($_SESSION['id']==''))){
      header('Location:login.php');
      exit(); 
  }

  
  $quer=mysqli_query($con,"select * from tbl_branch");
  $count=mysqli_num_rows($quer);
  $query=mysqli_query($con,"select * from staff");
  $cont_staff=mysqli_num_rows($query);
  $que=mysqli_query($con,"select * from tbl_parcel");
  $cont_parcel=mysqli_num_rows($que);

  $deli=mysqli_query($con,"select * from tbl_parcel where status='8'");
  $count_deli=mysqli_num_rows($deli);




  
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Dashboard </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="fcslogo/FCS.png" height="90" width="80">
  </div>
<?php
include 'themepart/sidebar.php';
include 'themepart/topmenu.php';
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b>DASHBOARD</b></h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>

              <div class="info-box-content">
                <span class="info-b ox-text">Total Branches</span>
                <span class="info-box-number"><?php echo $count?></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Staff</span>
                <span class="info-box-number"><?php  echo $cont_staff?></span>
              </div>
            </div>
          </div>
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-boxes"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Parcels</span>
                <span class="info-box-number"><?php echo $cont_parcel?></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-people-carry"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Successfully Delivered</span>
                <span class="info-box-number"><?php echo $count_deli?></span>
            </div>
            </div>              
        </div>
          
      </div>
          <div class="card">
              <div class="card-header border-transparent">
                  <h3 class="card-title"><b> New Members</b></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>S.no</th>
                      <th>Customer Name</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $q=mysqli_query($con,"select * from tbl_customer") or die(mysqli_error($con));
                    while($row=mysqli_fetch_array($q)){
                      echo "<tr>";
                      echo "<td>{$row['cus_id']}</td>";
                      echo "<td>{$row['ctr_name']}</td>";
                      echo "<td>{$row['ctr_username']}</td>";
                      echo "<td>{$row['ctr_password']}</td>";
                      echo "<td>{$row['ctr_email']}</td>";
                      echo "</tr>";

                      
                      
                    }
                    ?>
                   
                    </tbody>
                  </table>
                </div>
    </section>
</div>        
  <footer class="main-footer">
      <strong>Project &copy;2021 <a>Flash Courier</a>
    <div class="float-right d-none d-sm-inline-block">
      <b>COURIER MANAGEMENT SYSTEM</b>
    </div>
  </footer>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
