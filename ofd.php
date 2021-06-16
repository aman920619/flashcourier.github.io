<?php
  session_start();
  include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Out for Delivery</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini">
<div class="wrapper">

<?php
include './themepart/sidebar.php';
include './themepart/topmenu.php';
?>
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1><b>OUT FOR DELIVERY</b></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th>S.no</th> 
                    <th>Reference Number</th>
                    <th>Sender Name</th>
                    <th>Recipient Name</th>
                    <th>Status</th>
                    <th>Update Status</th>
                    <th>Delete</th>

                  </tr>
                  </thead>
                  <tbody>
                        <?php $q=mysqli_query($con,"select * from tbl_cus_parcel") or die(mysqli_error($con));?>
                        <?php while($qu5=mysqli_fetch_array($q)):?>
                        <?php if($qu5['status']=='6'):?>
                        <tr>
					            	<td class="text-center"><?php echo ($qu5['cus_id'])?></td>
					            	<td><b><?php echo ($qu5['order_id']) ?></b></td>
						            <td><b><?php echo ucwords($qu5['sender_name']) ?></b></td>
						            <td><b><?php echo ucwords($qu5['rec_name']) ?></b></td>
						            <td class="text-center">
							          <?php 
							          switch ($qu5['status']) {
								        case '1':
									      echo "<span class='badge badge-pill badge-info'> Parcel Accepted</span>";
									      break;
								        case '2':
									      echo "<span class='badge badge-pill badge-info'> Collected</span>";
									      break;
								        case '3':
									      echo "<span class='badge badge-pill badge-primary'>Shipped</span>";
								      	break;
								        case '4':
									      echo "<span class='badge badge-pill badge-primary'> In-Transit</span>";
									      break;
								        case '5':
									      echo "<span class='badge badge-pill badge-primary'>Parcel Arrived</span>";
									      break;
								        case '6':
									      echo "<span class='badge badge-pill badge-primary'>Out For Delivery</span>";
									      break;
								        case '7':
									      echo "<span class='badge badge-pill badge-success'>Ready For Pickup</span>";
									      break;
								        case '8':
									      echo "<span class='badge badge-pill badge-success'>Parcel Delivered</span>";
									      break;
								        case '9':
									      echo "<span class='badge badge-pill badge-danger'>Picked-Up</span>";
									      break;
								        default:
									      echo "<span class='badge badge-pill badge-info'>Parcel Accepted</span>";
                        break;
							          }
                        ?>
						            </td>
                        <td>
                        <form action="parcel_list.php" method="post">
                        <select name='status' onchange='form.submit()'>
                        <option value='1'>Parcel Accepted</option>
                        <option value='1'>Parcel Accepted</option>
                        <option value='2'>Collected</option>
                        <option value='3'>Shipped</option>
                        <option value='4'>In-Transit</option>
                        <option value='5'>Parcel Arrived</option>
                        <option value='6'>Out For Delivery</option>
                        <option value='7'>Ready to Pickup</option>
                        <option value='8'>Parcel Delivered</option>
                        <option value='9'>Picked Up</option>
                        </select>
                        <input type='hidden' name='cus_id' value='<?php echo $qu5['cus_id'];?>'/>
                        </form>
                        </td>
						            <td class="text-center">
		                    <div class="btn-group">
		                    <button type="button" class="btn btn-flat ">
                        <a href="delete.php?id=<?php echo $qu5['cus_id']; ?>" class=" ">
		                    <i class="fas fa-trash"></i>
		                    </a>
		                    </button>
	                      </div>
					  	          </td>
					              </tr>	
				                <?php endif; ?>
                        <?php endwhile;?>

                  </tbody>
                </table>
              </div>
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
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
    $(function () {
    $("#example1").DataTable().buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
