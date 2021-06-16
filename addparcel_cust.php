<?php
  session_start();
  include 'connection.php';

  if($_POST){
    $cus_id=$_SESSION['id'];
    $order_id=uniqid('FLSHA');
    $invoice_no=uniqid();
    $sender_name=$_POST['sender_name'];
    $sender_add=$_POST['sender_add'];
    $sender_contact=$_POST['sender_contact'];
    $rec_name=$_POST['rec_name'];
    $rec_add=$_POST['rec_add'];
    $rec_contact=$_POST['rec_contact'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $length=$_POST['length'];
    $width=$_POST['width'];

    if($weight<=250){
      $amt=40;
    }
    
    else{
      if($weight<=500){
        $amt=85;
      }
      else {
        if($weight<=1000){
          $amt=120;
        }
        else{
          if($weight<=1500){
            $amt=150;
          }
          else{
            if($weight<=2000){
              $amt=170;
            }
            else{
              if($weight<=2500){
                $amt=190;
              }
              else{
                if($weight<=3000){
                  $amt=210;
                }
                else{
                  if($weight<=3500){
                    $amt=230;
                  }
                  else{
                    if($weight<=5000){
                      $amt=280;
                    }
                    else{
                      if($weight<=10000){
                        $amt=600;
                      }
                      else{
                        if($weight<=20000){
                          $amt=1100;
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }
    }

    $custparcl=mysqli_query($con,"insert into tbl_cus_parcel(cus_id,order_id,invoice_no,sender_name,sender_add,sender_contact,rec_name,rec_add,rec_contact) values('{$cus_id}','{$order_id}','{$invoice_no}','{$sender_name}','{$sender_add}','{$sender_contact}','{$rec_name}','{$rec_add}','{$rec_contact}')") or die(mysqli_error($con));
    $cuatparl=mysqli_query($con,"insert into tbl_parcel(cus_id,order_id,invoice_no,height,weight,length,width,amt) values('{$cus_id}','{$order_id}','{$invoice_no}','{$height}','{$weight}','{$length}','{$width}','{$amt}')") or die(mysqli_error($con));
  
    if($cuatparl && $custparcl){
      echo "<script>alert('Record added Succesfully'); window.location.href='payindex.php'</script>";
    }
  }
 
?>
<?php
  
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Book Parcel</title>
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

  <main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2><b>Book Parcel</b></h2>
          <ol>
              <li><a href="customerUI.php">Home</a></li>
            <li>Book Parcel</li>
          </ol>
        </div>

      </div>
    </section>

    <section class="inner-page">
      <div class="container">
        <p>
            <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Parcel Details</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <form method='post'>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Sender Name</label>
                     <input type="sender" class="form-control" id="exampleInputsender" placeholder="Name" name="sender_name" value="">
               </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="address" class="form-control" id="exampleInputaddress" placeholder="Address" name="sender_add" value="" >
                </div>
                  <div class="form-group">
                  <label>Contact</label>
                     <input type="number" class="form-control" id="exampleInputcontact" placeholder="Contact" name="sender_contact" value="" >
               </div>
              </div>
                
              <div class="col-md-6">
                <div class="form-group">
                  <label>Recipient Name</label>
                  <input type="recipient" class="form-control" id="exampleInputrecipient" placeholder="Name" name="rec_name" value="" >
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="address" class="form-control" id="exampleInputaddress1" placeholder="Address" name="rec_add" value="" >
                </div>
                  <div class="form-group">
                  <label>Contact</label>
                     <input type="number" class="form-control" id="exampleInputcontact1" placeholder="Contact" name="rec_contact" value="" >
               </div>
              </div>
            </div>
          </div>
          
        </div>
          <hr>
        Parcel Information
        <table class="table table-bordered" id="parcel-items">
          <thead>
            <tr>
              <th>Weight(in gm)</th>
              <th>Height(cm)</th>
              <th>Length(cm)</th>
              <th>Width(cm)</th>
              
                            
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name='weight' value="" required></td>
              
              <td><input type="text" name='height' value="" required></td>
              <td><input type="text" name='length' value="" required></td>
              <td><input type="text" name='width' value="" required></td>             
             
              
          </tbody>
                 
           </table>
                      <div class="row">
          
        
  	</div>
  	<div class="card-footer border-top border-dark">
  		<div class="d-flex w-100 justify-content-center align-items-center">
                    <button class="btn btn-flat border-warning bg-warning"  type="submit" >Submit</button>
                        <a class="btn btn-flat border-dark bg-muted" href="addparcel_cust.php">Cancel</a>
      </form>
  		</div>
  	</div>
    
	</div>
        </p>
      </div>
    </section>
  </main>
      <div class="copyright">
    Project&copy;2021<strong><span>Flash Courier</span></strong> CMS
      </div>

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