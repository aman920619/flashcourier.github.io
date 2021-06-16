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
            echo "<script>window.location.href='admintrackres.php'</script>";}
        else{
            echo"<script>alert('Invalid Tracking ID'); window.location.href='trackparcel.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Track Parcel</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini">
<div class="wrapper">
<?php
include './themepart/topmenu.php';
include './themepart/sidebar.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1><b>Track Parcel</b></h1>
          </div>
        </div>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form method='post'>
			<div class="d-flex w-100 px-1 py-2 justify-content-center align-items-center">
				<label for="">Enter Tracking Number</label>
				<div class="input-group col-sm-5">
                    <input type="search"  class="form-control form-control-sm" placeholder="Type the tracking number here" name='order_id'>
                    <div class="input-group-append">
                        <button type="submit"  class="btn btn-sm btn-primary btn-gradient-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
			</div>
</form>
		</div>
	</div>
	
</div>


    </div>
</div>
  <footer class="main-footer">
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
