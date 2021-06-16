
<?php
  session_start();
  include 'connection.php';

  if($_POST){
    $sender_name=$_POST['sender_name'];
    $sender_add=$_POST['sender_add'];
    $sender_contact=$_POST['sender_name'];
    $rec_name=$_POST['rec_name'];
    $rec_add=$_POST['rec_add'];
    $rec_contact=$_POST['rec_contact'];

    $cuspar=mysqli_query($con,"insert into tbl_cus_parcel(sender_name,sender_add,sender_contact,rec_name,rec_add,rec_contact) values('{$sender_name}','{$sender_add}','{$sender_contact}','{$rec_name}','{$rec_add}','{$rec_contact}')") or die(mysqli_error($con));
 
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $width=$_POST['width'];
    $length=$_POST['length'];

    $parcl=mysqli_query($con,"insert into tbl_parcel(height,weight,length,width) values('{$height}','{$weight}','{$length}','{$width}')") or die(mysqli_error($con));
   

  if($_POST){
      echo "<script>alert('Parcel Recorded');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flash Courier | Add Parcel</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
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
            <h1><b>ADD PARCEL</b></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">New Parcel</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Sender Name</label>
                     <input type="sender" class="form-control" id="exampleInputsender" placeholder="Name"name="sender_name">
               </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="address" class="form-control" id="exampleInputaddress" placeholder="Address" name="sender_add">
                </div>
                  <div class="form-group">
                  <label>Contact</label>
                     <input type="contact" class="form-control" id="exampleInputcontact" placeholder="Contact" name="sender_contact">
               </div>
              </div>
                
              <div class="col-md-6">
                <div class="form-group">
                  <label>Recipient Name</label>
                  <input type="recipient" class="form-control" id="exampleInputrecipient" placeholder="Name" name="rec_name">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="address" class="form-control" id="exampleInputaddress" placeholder="address"name="rec_add">
                </div>
                  <div class="form-group">
                  <label>Contact</label>
                     <input type="contact" class="form-control" id="exampleInputcontact" placeholder="Contact" name="rec_contact">
               </div>
              </div>
            </div>
            <h5>Pickup Details</h5>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Branch Processed</label>
                  <select class="form-control select2 select2-dark" data-dropdown-css-class="select2-danger" data-placeholder="Please select here" style="width: 100%;">
                    <option selected="selected"></option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Pickup Branch</label>
                  <div class="select2-dark">
                    <select class="select2" data-placeholder="Please select here" data-dropdown-css-class="select2-warning" style="width: 100%;">
                        <option selected="selected"></option>
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
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
              <th>Weight</th>
              <th>Height</th>
              <th>Length</th>
              <th>Width</th>
              <th>Price</th>
                            
                        </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name='weight[]' value="" required></td>
              <td><input type="text" name='height[]' value="" required></td>
              <td><input type="text" name='length[]' value="" required></td>
              <td><input type="text" name='width[]' value="" required></td>
              <td><input type="text" class="text-right number" name='price[]' value="" required></td>
                          </tr>
          </tbody>
                  <tfoot>
            <th colspan="4" class="text-right">Total</th>
            <th class="text-right" id="tAmount">0.00</th>
          </tfoot> </table>
                      <div class="row">
          <div class="col-md-12 d-flex justify-content-end">
            <button  class="btn btn-sm btn-success bg-gradient-success" type="button" id="new_parcel"><i class="fa fa-item"></i> Add Item</button>
            </div>
        </div>
        </form>
  	</div>
  	<div class="card-footer border-top border-dark">
  		<div class="d-flex w-100 justify-content-center align-items-center">
  			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-parcel" type="submit">Save</button>
                        <a class="btn btn-flat bg-gradient-secondary mx-2" href="add_parcel.php">Cancel</a>
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
<script src="plugins/select2/js/select2.full.min.js"></script>
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('.select2').select2()
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    $('[data-mask]').inputmask()
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    $('#reservation').daterangepicker()
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    $('.duallistbox').bootstrapDualListbox()
    $('.my-colorpicker1').colorpicker()
    $('.my-colorpicker2').colorpicker()
    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
  })
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
  Dropzone.autoDiscover = false
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { 
    url: "/target-url", 
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, 
    previewsContainer: "#previews", 
    clickable: ".fileinput-button" 
  })

  myDropzone.on("addedfile", function(file) {
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })
  myDropzone.on("sending", function(file) {
    document.querySelector("#total-progress").style.opacity = "1"
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
</script>
</body>
</html>
