<?php
  session_start();
  include 'connection.php';

  $or1=$_SESSION['order'];
$query1=mysqli_query($con,"select * from tbl_parcel where order_id='$or1'");
$check4=mysqli_fetch_array($query1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <title>Flash Courier | Tracking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
   <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
</head>
<body class="dark-mode" style='margin-top: 0px;'>
<div class="wrapper">
<nav class='main-header navbar navbar-expand navbar-grey navbar-dark ' style='margin-left:0;margin-bottom: 50px;' >
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
          <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  

<div class="container padding-bottom-3x mb-1" >
        <div class="card mb-3">
          <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Tracking Order No - </span><span class="text-medium"><?php echo $check4['order_id']?></span></div>
          <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped Via:</span> FLASH COURIER</div>
            
            <div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected Date:</span> June 23, 2021</div>
          </div>
          <?php  if($check4['status']=='1'):?>
          <div class="card-body">
          <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-cart"></i></div>
          </div>
          <h4 class="step-title">Parcel Accepted</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-config"></i></div>
          </div>
          <h4 class="step-title">Parcel Collected</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-medal"></i></div>
          </div>
          <h4 class="step-title">In-Transit</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-car"></i></div>
          </div>
          <h4 class="step-title">Parcel Dispatched</h4>
          </div>
          <div class="step">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-home"></i></div>
          </div>
          <h4 class="step-title">Parcel Delivered</h4>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>

          <?php  elseif($check4['status']=='2'):?>
          <div class="card-body">
          <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-cart"></i></div>
          </div>
          <h4 class="step-title">Parcel Accepted</h4>
          </div>
          <div class="step completed ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-config"></i></div>
          </div>
          <h4 class="step-title">Parcel Collected</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-medal"></i></div>
          </div>
          <h4 class="step-title">In-Transit</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-car"></i></div>
          </div>
          <h4 class="step-title">Parcel Dispatched</h4>
          </div>
          <div class="step">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-home"></i></div>
          </div>
          <h4 class="step-title">Parcel Delivered</h4>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>

          <?php  elseif($check4['status']=='3'||$check4['status']=='4'):?>
          <div class="card-body">
          <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-cart"></i></div>
          </div>
          <h4 class="step-title">Parcel Accepted</h4>
          </div>
          <div class=" step completed ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-config"></i></div>
          </div>
          <h4 class="step-title">Parcel Collected</h4>
          </div>
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-medal"></i></div>
          </div>
          <h4 class="step-title">In-Transit</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-car"></i></div>
          </div>
          <h4 class="step-title">Parcel Dispatched</h4>
          </div>
          <div class="step">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-home"></i></div>
          </div>
          <h4 class="step-title">Parcel Delivered</h4>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>

          <?php  elseif($check4['status']=='5'||$check4['status']=='6'):?>
          <div class="card-body">
          <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-cart"></i></div>
          </div>
          <h4 class="step-title">Parcel Accepted</h4>
          </div>
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-config"></i></div>
          </div>
          <h4 class="step-title">Parcel Collected</h4>
          </div>
          <div class="step completed ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-medal"></i></div>
          </div>
          <h4 class="step-title">In-Transit</h4>
          </div>
          <div class="step completed ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-car"></i></div>
          </div>
          <h4 class="step-title">Parcel Dispatched</h4>
          </div>
          <div class="step">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-home"></i></div>
          </div>
          <h4 class="step-title">Parcel Delivered</h4>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>

          <?php  elseif($check4['status']=='7'||$check4['status']=='8'||$check4['status']=='9'):?>
          <div class="card-body">
          <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-cart"></i></div>
          </div>
          <h4 class="step-title">Parcel Accepted</h4>
          </div>
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-config"></i></div>
          </div>
          <h4 class="step-title">Parcel Collected</h4>
          </div>
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-medal"></i></div>
          </div>
          <h4 class="step-title">In-Transit</h4>
          </div>
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-car"></i></div>
          </div>
          <h4 class="step-title">Parcel Dispatched</h4>
          </div>
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-home"></i></div>
          </div>
          <h4 class="step-title">Parcel Delivered</h4>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>

          <?php  else:?>
          <div class="card-body">
          <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
          <div class="step completed">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-cart"></i></div>
          </div>
          <h4 class="step-title">Parcel Accepted</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-config"></i></div>
          </div>
          <h4 class="step-title">Parcel Collected</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-medal"></i></div>
          </div>
          <h4 class="step-title">In-Transit</h4>
          </div>
          <div class="step ">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-car"></i></div>
          </div>
          <h4 class="step-title">Parcel Dispatched</h4>
          </div>
          <div class="step">
          <div class="step-icon-wrap">
          <div class="step-icon"><i class="pe-7s-home"></i></div>
          </div>
          <h4 class="step-title">Parcel Delivered</h4>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>


          <?php endif;?>
<style type="text/css">
body{margin-top:20px;}

.steps .step {
    display: block;
    width: 100%;
    margin-bottom: 35px;
    text-align: center
}

.steps .step .step-icon-wrap {
    display: block;
    position: relative;
    width: 100%;
    height: 80px;
    text-align: center
}

.steps .step .step-icon-wrap::before,
.steps .step .step-icon-wrap::after {
    display: block;
    position: absolute;
    top: 50%;
    width: 50%;
    height: 3px;
    margin-top: -1px;
    background-color: #e1e7ec;
    content: '';
    z-index: 1
}

.steps .step .step-icon-wrap::before {
    left: 0
}

.steps .step .step-icon-wrap::after {
    right: 0
}

.steps .step .step-icon {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    border: 1px solid #e1e7ec;
    border-radius: 50%;
    background-color: #f5f5f5;
    color: #374250;
    font-size: 38px;
    line-height: 81px;
    z-index: 5
}

.steps .step .step-title {
    margin-top: 16px;
    margin-bottom: 0;
    color: #606975;
    font-size: 14px;
    font-weight: 500
}

.steps .step:first-child .step-icon-wrap::before {
    display: none
}

.steps .step:last-child .step-icon-wrap::after {
    display: none
}

.steps .step.completed .step-icon-wrap::before,
.steps .step.completed .step-icon-wrap::after {
    background-color: #0da9ef
}

.steps .step.completed .step-icon {
    border-color: #0da9ef;
    background-color: #0da9ef;
    color: #fff
}

@media (max-width: 576px) {
    .flex-sm-nowrap .step .step-icon-wrap::before,
    .flex-sm-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 768px) {
    .flex-md-nowrap .step .step-icon-wrap::before,
    .flex-md-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 991px) {
    .flex-lg-nowrap .step .step-icon-wrap::before,
    .flex-lg-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 1200px) {
    .flex-xl-nowrap .step .step-icon-wrap::before,
    .flex-xl-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

.bg-faded, .bg-secondary {
    background-color: #f5f5f5 !important;
}
</style>

<script type="text/javascript">

</script>

<footer class="main-footer" style='margin-left:0;margin-top: 189px;'>
    <div class="float-right d-none d-sm-block">
      <b>COURIER MANAGEMENT SYSTEM</b>
    </div>
    <strong>Project &copy;2021 <a>Flash Courier</a>
  </footer>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
