<?php
    session_start();
    include 'connection.php';

    if($_POST){
        $order_id=$_POST['order_id'];
        $order_id1=$_POST['order_id'];
        $_SESSION['order']=$order_id;
        $_SESSION['order1']=$order_id1;
        

        $qu=mysqli_query($con,"select * from tbl_parcel where order_id='$order_id'") or die(mysqli_error($con));
        $check3=mysqli_fetch_array($qu);
       
        if(isset($check3)){
            echo "<script>window.location.href='1.php'</script>";}
        else{
            echo"<script>alert('Invalid Tracking ID'); window.location.href='trackcust.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Track Parcel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
          <li><a href="login.php">Sign-out</a></li>

        </ul>
      </nav>

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><b>Track Parcel</b></h2>
          <ol>
              <li><a href="customerUI.php">Home</a></li>
            <li>Track Parcel</li>
          </ol>
       </div>
     </div>
    </section>
 
        
  <div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
    <form method="post">
			<div class="d-flex w-100 px-1 py-2 justify-content-center align-items-center">
				<label for="">Enter Tracking Number</label>
				<div class="input-group col-sm-5">
                    <input type="text"  class="form-control" placeholder="Type the tracking number here" name="order_id">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-sm btn-primary btn-gradient-primary"> <i class="fa fa-search"></i></button>
                        
                    </div>
        </div>
			</div>
    </form>
		</div>
	</div>
</div>
</main>


      

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