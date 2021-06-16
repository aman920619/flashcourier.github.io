<?php
  session_start();
  include 'connection.php';
  $or2= $_SESSION['id'];
  

  
$query2=mysqli_query($con,"select * from tbl_cus_parcel where cus_id='$or2'");
$check3=mysqli_fetch_array($query2);
$date = date("d-m-Y");
$c_id=$check3['cus_id'];
$qu2=mysqli_query($con,"select * from tbl_customer where cus_id='$c_id'");
$check4=mysqli_fetch_array($qu2);
$qu3=mysqli_query($con,"select * from tbl_parcel where cus_id='$c_id'");
$check5=mysqli_fetch_array($qu3); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Invoice</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="customerUI.php">FLASH<span>COURIER</span></a></h1>
          <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="customerUI.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="logout.php">Sign-out</a></li>

        </ul>
      </nav>

      <a href="#about" class="get-started-btn scrollto">Get Started</a> 

    </div>
  </header>

  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Invoice</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper" style="margin-left: 0px;">
    <section class="content-header" style="margin-top: 74px;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice:</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="invoice p-3 mb-3">
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Flash Courier
                    <small class="float-right">Date:<?php echo $date?></small>
                  </h4>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Flash Courier </strong><br>
                    Bypass Road, Kailod Kartal, Indore, Madhya Pradesh 452020<br>
                    Phone:+91 7987401655<br>
                    Email: flashcourier@protonmail.com
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?php echo $check3['sender_name']?></strong><br>
                    <?php echo $check3['sender_add']?><br>
                    
                    Phone:<?php echo $check3['sender_contact']?><br>
                    Email:<?php echo $check4['ctr_email']?>
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  <b>Invoice: </b><?php echo $check3['invoice_no']?><br>
                  <br>
                  <b>Tracking ID:</b> <?php echo   $check3['order_id']?><br>
                 
                  
                </div>
                
              </div>
             
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product Id</th>
                      <th>Weight(gm)</th>
                      <th>Height(cm)</th>
                      <th>Length(cm)</th>
                      <th>Width(cm)</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td><?php echo $check5['order_id']?></td>
                      <td><?php echo $check5['weight']?></td>
                      <td><?php echo $check5['height']?></td>
                      <td><?php echo $check5['length']?></td>
                      <td><?php echo $check5['width']?></td>
                      <td><?php echo $check5['amt']?></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="row">
                <div class="col-6">
                  
                </div>
                <div class="col-6">
                  <p class="lead">Amount Due </p>

                  <div class="table-responsive">
                    <table class="table">
                     
                   
                      
                      <tr>  
                        <th>Total:<?php echo $check5['amt'] ?></th>
                        <td></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row no-print">
                <div class="col-12">
                    <a href="print_invoice.php" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  
                  <button onclick='display()' class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>

    

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
<script>
         function display() {
            window.print();
         }
      </script>