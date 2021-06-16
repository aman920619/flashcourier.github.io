<?php 
  session_start();
  include 'connection.php';

  $h=$_SESSION['id1'];
  $y=mysqli_query($con,"select * from tbl_parcel where cus_id='$h'");
  $z=mysqli_fetch_array($y);
  $am=$z['amt'];
?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Payment Index</title>
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

        <h1 class="logo"><a href="customerUI.php">Flash<span>Courier</span></a></h1>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="customerUI.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
           <li><a href="#contact">Contact</a></li>
          <li><a href="logout.php">sign out</a></li>
        </ul>
      </nav>

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header>

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><b>Payment Index</b></h2>
          <ol>
              <li><a href="customerUI.php">Home</a></li>
            <li>Payment Index</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <p>
         <form align="center">
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br/><br/>
    <input type="textbox" name="amt" id="amt" value="<?php   echo $am?>" disabled="disabled" placeholder="Enter amount"/><br/><br/>
    <input type="button" name="btn" id="btn" value="Pay Now" class="btn btn-flat border-dark bg-warning" onclick="pay_now()"/>

</form>
        </p>
      </div>
    </section>

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


<script>
    function pay_now(){
        var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name,
               success:function(result){
                   var options = {
                        "key": "rzp_test_88ZsdioTM6qGD1", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Flash Courier",
                        "description": "Payment Service",
                        "image": "https://i.imgur.com/1sYAmXG.png",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                 alert('Payment Succesfull');
                              window.location.href="cust_invoice.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    }
</script>